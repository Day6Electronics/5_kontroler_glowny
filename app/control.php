<?php
require_once dirname (__FILE__).'/../config.php';

$action = $_REQUEST['action'] ?? "";

switch ($action) {
	default :
		include_once $conf->root_path.'/app/calc/CalcControl.class.php';
		
		$ctrl = new CalcControl ();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		include_once $conf->root_path.'/app/calc/CalcControl.class.php';
		
		$ctrl = new CalcControl ();
		$ctrl->process ();
	break;
}
?>
