{extends file=$conf->root_path|cat:"/templates/main.tpl"}

{block name=content}
    
    <div class="box">
	<div class="content">
            <h2 class="align-center">Oblicz rezystor</h2>
            <hr />
            <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<form class="pure-form pure-form-stacked" action="{$conf->action_url}calcCompute" method="post">
                    <fieldset>
		<div class="field half first">
                    <label for="v1">Napięcie zasilania (V):</label>
                    <input name="v1" id="v1" type="text" placeholder="Napięcie zasilania (V)" value="{$form->v1}">
		</div>
		<div class="field half">
                    <label for="v2">Napięcie przewodzenia (V):</label>
                    <input name="v2" id="v2" type="text" placeholder="Napięcie przewodzenia (V)" value="{$form->v2}">
		</div>
		<div class="field half first">
                    <label for="amp">Prąd przewodzenia (mA):</label>
                    <input name="amp" id="amp" type="text" placeholder="Prąd przewodzenia (mA)" value="{$form->amp}">
		</div>
		<ul class="actions align-center">
                    <li><input value="Oblicz wartość rezystora" class="button special" type="submit"></li>
		</ul>
                    </fieldset>
		</form>
	</div>
    </div>
    </div>

<div style="width:90%; margin: 2em auto;">
                    
{if $msg->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach  $msg->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if $msg->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach  $msg->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($resistor->resistor)}
	<h4>Wynik:</h4>
	<p class="res">
	{$resistor->resistor} Ohm
	</p>
{/if}
</div>
{/block}