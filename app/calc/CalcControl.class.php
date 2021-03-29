<?php
require_once $conf->root_path.'/lib/Smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResistor.class.php';

class CalcControl {

	private $msg;
	private $form;
	private $resistor;
		
	public function __construct(){
		$this->msg = new Messages();
		$this->form = new CalcForm();
		$this->resistor = new CalcResistor();
	}
        
        public function getParams() {
                $this->form->v1 = isset($_REQUEST['v1']) ? $_REQUEST['v1'] : null;
                $this->form->v2 = isset($_REQUEST['v2']) ? $_REQUEST['v2'] : null;
                $this->form->amp = isset($_REQUEST['amp']) ? $_REQUEST['amp'] : null;
        }
        
        public function validate() {
                if (!(isset($this->form->v1) && isset($this->form->v2) && isset($this->form->amp))) return false;
    
                if ($this->form->v1 == "") $this->msg->addError ('Nie podano napięcia zasilania!');
                if ($this->form->v2 == "") $this->msg->addError ('Nie podano napięcia przewodzenia!');
                if ($this->form->amp == "") $this->msg->addError ('Nie podano prądu przewodzenia!');
    
                if (! $this->msg->isError()){

                    if (!is_numeric($this->form->v1)) $this->msg->addError ('Błędny zapis napięcia zasilania!');
                    if (!is_numeric($this->form->v2)) $this->msg->addError ('Błędny zapis napięcia przewodzenia!');
                    if (!is_numeric($this->form->amp)) $this->msg->addError ('Błędny zapis prądu przewodzenia!');
                }
    
                if (! $this->msg->isError()){
                    if ($this->form->v1 <= $this->form->v2) $this->msg->addError ('Wartość napięcia zasilania musi być większa od wartości napięcia przewodzenia!');
                }
    
                return ! $this->msg->isError();
        }
        
        public function process() {
            
                $this->getparams();
                
                if ($this->validate()) {
    
                    $this->form->v1 = doubleval($this->form->v1);
                    $this->form->v2 = doubleval($this->form->v2);
                    $this->form->amp = doubleval ($this->form->amp);
                    $this->msg->addInfo('Parametry poprawne.');

                    $this->resistor->resistor = ($this->form->v1 - $this->form->v2) / ($this->form->amp / 1000);
                    $this->msg->addInfo('Wykonano obliczenia.');
                }
                
                $this->generateView();
        }
        
        public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
                $smarty->assign('page_title','Kalkulator');
                $smarty->assign('page_description','Kalkulator umożliwiający dobranie odpowiedniego rezystora do diody LED.');
                $smarty->assign('page_header','Kalkulator rezystora diody LED');
                $smarty->assign('author','Zaprojektowany przez: Dawid Gruszecki');

                $smarty->assign('form',$this->form);
                $smarty->assign('resistor',$this->resistor);
                $smarty->assign('msg',$this->msg);

                $smarty->display($conf->root_path.'/app/calc/calc_view.tpl');
	}
}