<div id="trr-socialheader" class="trr-socialheader social-header sombra"></div>
<div id = "box-login">
	<div class = "cont-login-a">
		<span class = "wid-login">Acesse sua conta</span>
		<form action="http://pricefindercp.com.br/advertisers/login.ashx?tp=1" method="POST" name = "form-login" class = "wid-login" target = "_blank" onsubmit="return validateFormLogin()">
			<div class = "div-login-spc">
				<span id = "lg-img-email"></span><input type = "email" placeholder = "E-mail" name = "u" class="required form">
			</div>
			<div class = "div-login-spc">
				<span id = "lg-img-senha"></span><input type = "password" placeholder = "Senha" name = "p" style = "margin-top: 1px;" class="required form">
			</div>
			<input type = "submit" id = "bt-entrar-finder" value = "Entrar no FinderFly"><br>
			<span class = "txt-cont-login">
				<input type = "checkbox" value = "conectado" id = "check-conect"><span>Manter-me conectado</span><span>Esqueceu a senha</span>
			</span>
		</form>
	</div>
	<div class = "cont-login-b">
		<span class = "wid-login">Cadastre-se gr&aacute;tis</span>
		<form action = "/envia_cadastro_lg" method = "post" class = "wid-cad" onsubmit="setarCamposCadastro(); enviaCadastro('/envia_cadastro_lg', camposCadastro, 'resposta_ajax_cad'); return false;" name = "form-cad">
			<div class = "div-login-spc">
				<span id = "lg-img-name"></span><input type = "text" placeholder = "Nome" name = "nome_cad" class = "required">
			</div>
			<div class = "div-login-spc">
				<span id = "lg-img-email"></span><input type = "text" placeholder = "E-mail" name = "email_cad" class = "required">
			</div>
			<input type = "submit" id = "bt-cad-finder" value = "Crie sua Conta"><br>
			<div class="termos"> 
				<p style = "font-size: 12px; line-height: 14px;">
				Leia o <a href="http://www.pricefinder.com.br/termos-de-uso" id="termo_uso">Termo de uso</a> e a <br /><a href="http://www.pricefinder.com.br/politica-de-privacidade" id="politica_privacidade">Pol&iacute;tica de Privacidade</a>
				Aceito receber email do PriceFinder
				</p>
			</div>
		</form>
		<div id = "resposta_ajax_cad" class = "resposta_ajax">
			<div id = "content-resposta-ajax-lg">
				<img src="http://www.mytreedb.com/uploads/mytreedb/loader/ajax_loader_gray_350.gif" alt="High quality AJAX loader gray progress - Size 350x350" width="64" height="64">
			</div>
		</div>
	</div>
</div>	