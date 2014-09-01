<div id="trr-socialheader" class="trr-socialheader social-header sombra"></div>
<div id = "box-login">
	<div class = "cont-login-a">
		<span class = "wid-login">Acesse sua conta</span>
		<form action="http://pricefindercp.com.br/advertisers/login.ashx?tp=1" method="POST" class = "wid-login" target = "_blank" onsubmit="return validateForm()">
			<div class = "div-login-spc">
				<span id = "lg-img-email"></span><input type = "email" placeholder = "E-mail" name = "u" class="required">
			</div>
			<div class = "div-login-spc">
				<span id = "lg-img-senha"></span><input type = "password" placeholder = "Senha" name = "p" style = "margin-top: 1px;" class="required">
			</div>
			<input type = "submit" id = "bt-entrar-finder" value = "Entrar no FinderFly"><br>
			<span class = "txt-cont-login">
				<input type = "checkbox" value = "conectado" id = "check-conect"><span>Manter-me conectado</span><span>Esqueceu a senha</span>
			</span>
		</form>
	</div>
	<div class = "cont-login-b">
		<span class = "wid-login">Cadastre-se gr&aacute;tis</span>
		<form action = "#" method = "post" class = "wid-cad" onsubmit="return validateForm()">
			<div class = "div-login-spc">
				<span id = "lg-img-name"></span><input type = "email" placeholder = "E-mail" name = "name" class = "required">
			</div>
			<div class = "div-login-spc">
				<span id = "lg-img-email"></span><input type = "text" placeholder = "E-mail" name = "email" class = "required">
			</div>
			<div class = "div-login-spc">
				<span id = "lg-img-senha"></span><input type = "text" placeholder = "Senha" name = "pass" style="margin-top: 1px;" class = "required">
			</div>
			<input type = "submit" id = "bt-cad-finder" value = "Crie sua Conta"><br>
			
			<div class="termos"> 
				<p style = "font-size: 12px; line-height: 14px;">
				Leia o <a href="#" id="termo_uso">Termo de uso</a> e a <br /><a href="#" id="politica_privacidade">Pol&iacute;tica de Privacidade</a>
				Aceito receber email do PriceFinder
				</p>
			</div>
		</form>
	</div>
</div>	