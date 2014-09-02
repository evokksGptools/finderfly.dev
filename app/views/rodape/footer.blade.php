@section('footer')

<div class="container-foot">
<div class="row" id="foot">
	<div class="linha_foot margin-top-foot">
		<div class="wrapper_foot">
			<div id="fb-root"></div>
				<div class = "cont-footer">
					<div class="submenu">
						<span class="titulo_rodape">Pricefinder</span>
						<ul>
							<li><a href="http://pricefinder.com.br/quem-somos" class="normal" target="_blank">Quem Somos</a></li>
							<li><a href="http://pricefinder.com.br/termos-de-uso" class="normal" target="_blank">Termos de Uso</a></li>
							<li><a href="http://pricefinder.com.br/politica-de-privacidade" class="normal" target="_blank">Pol&iacute;tica de Privacidade</a></li>
							<li><a href="http://pricefinder.com.br/faq" class="normal" target="_blank">FAQ</a></li>
						</ul>
					</div>
					<div class="submenu">
						<span class="titulo_rodape">Consumido</span> 
						<ul>
							<li><a href="http://pricefinder.com.br/compra-garantida" class="normal" target="_blank">Compra Garantida</a></li>
							<li><a href="http://pricefinder.com.br/principais_lojas" class="normal" target="_blank">Principais Lojas</a></li>
							<li><a href="http://pricefinder.com.br/fale-conosco" class="normal" target="_blank">Fale Conosco</a></li>
							
						</ul>
					</div>
					<div class="submenu">
						<span class="titulo_rodape">Produtos e Serviços</span>
						<ul>
							<li><a href="http://pricefinder.com.br/anuncie_gratis" class="normal" target="_blank">Anuncio Grátis</a></li>
							<li><a href="http://pricefinder.com.br/atendimento-lojista" class="normal" target="_blank">Atendimento ao Lojista</a></li>
							<li><a href="http://pricefinder.com.br/banners" class="normal" target="_blank">Banners</a></li>
							<li><a href="http://pricefinder.com.br/destaque_loja" class="normal" target="_blank">Destaque Loja</a></li>
							<li><a href="http://pricefinder.com.br/#" class="normal" target="_blank">Links Patrocinados</a></li>
							<li><a href="http://pricefinder.com.br/email-marketing" class="normal" target="_blank">E-mail Marketing</a></li>
						</ul>
					</div>
					<div class="submenu">
						<span class="titulo_rodape">Divulgue e Ganhe</span>
						<ul style="border-right: none;">
							<li><a href="#" class="normal" target="_blank">Finderstore - Loja Virtual</a></li>
							<li><a href="http://www.finderpay.com.br" class="normal" target="_blank">Finderpay - Meio de Pagamento</a></li>
							<li><a href="/" class="normal" target="_blank">Finderfly - Programa de Afiliados</a></li>
						</ul>
					</div>

					<div class="fb-like-box"
					data-href="https://www.facebook.com/pricefinder.com.br"
					data-width="200px" data-height="180px" data-colorscheme="light"
					data-show-faces="true" data-header="false" data-stream="false"
					data-show-border="false" style="float:right">
				</div>
			</div>
			<div class="grid-newlet">
				<div class="newlet">
					{{ Form::open(array('url' => '/','name'=>'newlet', 'id'=>'form_news')) }}
					<div class="newlet-cont">
						<div class="tt-news">
							Newsletter
						</div>
						<div class="label-news">
							<span>Receba as novidades sobre nossos servi&ccedil;os.</span>
							<div style = "display: inline-block;width: 230px;">
								<span> Genero: </span>
								<input type="radio" name="genero" value="F"/>
								<span>Feminino</span>
								<input type="radio" name="genero" value="M" checked="checked"/>
								<span>Masculino</span>
							</div>
						</div>
						<div class="input-tex news">
							<input placeholder="Insira seu Email" type="text" id="text_newlet" name="email_newlet" />
						</div>
						<div class="input-submit news">
							<button id="input_newlet" type="submit" class="bt-envia-form">Enviar</button>
						</div>
					</div>
					{{ Form::close() }}
				</div>
			</div>
	</div>
</div>
<div id = "copyright" class = "row">
							<div class="col-sm-12"> 
								<span>Copyright 2011-2014 Pricefinder Servi&ccedil;os Ltda.</span><br>
								O conte&uacute;do desse site &eacute; de uso exclusivo, proibida sob as penas da lei sua reprodu&ccedil;&atilde;o ou utiliza&ccedil;&atilde;o
							</div>
						</div>
</div>
</div>
@stop