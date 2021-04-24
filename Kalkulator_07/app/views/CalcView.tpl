{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin ">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

<form action="{$conf->action_url}calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Kalkulator</legend>

	<fieldset>

        <div class="pure-control-group">
			<label for="id_kw">Kwota: </label>
			<input id="id_kw" type="text" name="kw" style="width: 9em" placeholder="Kwota" value="{$form->kw}" />
		</div>

		<div class="pure-control-group">
			<label for="id_ll">Liczba lat: </label>
			<input id="id_x" type="text" name="ll" style="width: 9em" placeholder="Liczba lat" value="{$form->ll}" />
		</div>

        <div class="pure-control-group">
			<label for="id_op">Oprocentowanie: </label>

			<select id="id_op" name="op" style="width: 9em">
				{if $user->role == "admin"}
					<option value="0">0%</option>
				{/if}
					<option value="1" >1%</option>
					<option value="2">2%</option>
					<option value="3">3%</option>
					<option value="4">4%</option>
					<option value="5">5%</option>
			</select>
		</div>

		<div class="pure-controls">
			<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
		</div>

	</fieldset>

</form>


{include file='messages.tpl'}

{if isset($res->result)}
<div class="messages inf">
	Wynik: {$res->result}
</div>
{/if}

{/block}