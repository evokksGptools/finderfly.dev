<div id="trr-socialheader" class="trr-socialheader social-header sombra"></div>
<div id = "box-login">
	<div class = "cont-login-a">
		<span class = "wid-login">Acesse sua conta</span>
		<form action="/login_cake" id="form-login-cake" method="POST" name = "form-login" class = "wid-login" >
			<div class = "div-login-spc">
				<span id = "lg-img-email"></span><input type = "email" placeholder = "E-mail" name = "u" class="required form">
			</div>
			<div class = "div-login-spc">
				<span id = "lg-img-senha"></span><input type = "password" placeholder = "Senha" name = "p" style = "margin-top: 1px;" class="required form"><input type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" name = "ip_address">
			</div>
			<input type = "button" id = "bt-entrar-finder" value = "Entrar no FinderFly" onclick="loginCake('/login_cake', 'resposta_ajax_lg'); return false" /><br>
			<span class = "txt-cont-login" style="display: none">
				<input type = "checkbox" value = "conectado" id = "check-conect"><span>Manter-me conectado</span><span>Esqueceu a senha</span>
			</span>
		</form>
		<div id = "resposta_ajax_lg" class = "resposta_lg">
			<div id = "content-resposta-ajax-lg-ck">
				<img src="http://www.mytreedb.com/uploads/mytreedb/loader/ajax_loader_gray_350.gif" alt="High quality AJAX loader gray progress - Size 350x350" width="64" height="64">
			</div>
		</div>
	</div>
	<div class = "cont-login-b">
		<span class = "wid-login">Cadastre-se gr&aacute;tis</span>
		<form action = "/envia_cadastro_lg" method = "GET" class = "wid-cad" onsubmit="enviaCadastro('/envia_cadastro_lg', 'resposta_ajax_cad'); return false;" name = "form-cad">
			<div class = "div-login-spc">
				<span id = "lg-img-name"></span><input type = "text" placeholder = "Nome" name = "nomecad" class = "required">
			</div>
			<div class = "div-login-spc">
				<span id = "lg-img-email"></span><input type = "text" placeholder = "E-mail" name = "emailcad" class = "required">
			</div>
			<input type = "submit" id = "bt-cad-finder" value = "Crie sua Conta"><br>
			<div class="termos"> 
				<p style = "font-size: 12px; line-height: 14px;">
				Leia o <a href="http://www.pricefinder.com.br/termos-de-uso" id="termo_uso">Termo de uso</a> e a <br><a href="http://www.pricefinder.com.br/politica-de-privacidade" id="politica_privacidade">Pol&iacute;tica de Privacidade</a><br />
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