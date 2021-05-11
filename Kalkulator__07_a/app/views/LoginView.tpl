{extends file="main.tpl"}

{block name=content}
	<body class="login">
	<div class="loginbox">
		<form action="{$conf->action_url}login" method="post"  >

			<h1 class="login">Login Here</h1>
			<form>
				<p>login: </p>
				<input id="id_login" type="text" placeholder="Enter Login" name="login"/>

				<p>pass: </p>
				<input id="id_pass" type="password" placeholder="Enter Password" name="pass" /><br />

				<input type="submit" value="Login"/>

			</form>
		</form>
	</div>
	{include file='messages.tpl'}
	</body>


{/block}