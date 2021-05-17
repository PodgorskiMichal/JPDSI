{extends file="main.tpl"}

{block name=content}

	<div class="pure-menu pure-menu-horizontal bottom-margin ">

	</div>


	<body class="calc">
	<div class="calcbox"	>
		<form action="{$conf->action_url}calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">

			<a href="{$conf->action_url}logout"  class="pure-menu-heading">wyloguj</a>
			<a href="{$conf->action_url}result"  class="pure-menu-heading">Lista</a>
			<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
			<legend>Kalkulator</legend>

			<fieldset>


				<p>Kwota: </p>
				<input id="id_kw" type="text" name="kw"  placeholder="Wprowadź kwotę" value="{$form->kw}" />


				<label for="id_ll">Liczba lat: </label>
				<input id="id_x" type="text" name="ll"  placeholder="Liczba lat" value="{$form->ll}" />



				<label for="id_op">Oprocentowanie: </label>

				<select id="id_op" name="op" >
					{if $user->role == "admin"}
						<option value="0">0%</option>
					{/if}
					<option value="1">1%</option>
					<option value="2">2%</option>
					<option value="3">3%</option>
					<option value="4">4%</option>
					<option value="5">5%</option>
				</select>

				<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>

			</fieldset>
			{if isset($res->result)}
				<div class="result">
					Wynik: {$res->result}
				</div>
			{/if}
		</form>

	</div>

	<div class="msgbox">
		{include file='messages.tpl'}
	</div>


	</body>





{/block}