@section('footer')

<div class="container-foot">
<div id="foot">
	<div class="linha_foot margin-top-foot">
		<div class="wrapper_foot">
			<div id="fb-root"></div>
				<div class = "cont-footer">
					<div class="submenu">
						<span class="titulo_rodape">PriceFinder</span>
						<ul>
							<li><a href="http://pricefinder.com.br/quem-somos" class="normal">Quem Somos</a></li>
							<li><a href="http://pricefinder.com.br/termos-de-uso" class="normal">Termos de Uso</a></li>
							<li><a href="http://pricefinder.com.br/politica-de-privacidade" class="normal">Pol&iacute;tica de Privacidade</a></li>
							<li><a href="http://pricefinder.com.br/faq" class="normal">FAQ</a></li>
						</ul>
					</div>
					<div class="submenu">
						<span class="titulo_rodape">Consumidor</span> 
						<ul>
							<li><a href="http://pricefinder.com.br/compra-garantida" class="normal">Compra Garantida</a></li>
							<li><a href="http://pricefinder.com.br/principais_lojas" class="normal">Principais Lojas</a></li>
							<li><a href="http://pricefinder.com.br/fale-conosco" class="normal">Fale Conosco</a></li>
							
						</ul>
					</div>
					<div class="submenu">
						<span class="titulo_rodape">Anuncie</span>
						<ul>
							<li><a href="http://pricefinder.com.br/anuncie_gratis" class="normal">Anuncio Grátis</a></li>
							<li><a href="http://pricefinder.com.br/banners" class="normal">Banners</a></li>
							<li><a href="http://pricefinder.com.br/destaque_loja" class="normal">Destaque Loja</a></li>
							<li><a href="http://pricefinder.com.br/busca_patrocinada" class="normal">Busca Patrocinada</a></li>
							<li><a href="http://pricefinder.com.br/email-marketing" class="normal">E-mail Marketing</a></li>
							<li><a href="http://pricefinder.com.br/atendimento-lojista" class="normal"><strong>Atendimento ao Lojista</strong></a></li>
						</ul>
					</div>
					<div class="submenu">
						<span class="titulo_rodape">Produtos e Serviços</span>
						<ul style="border-right: none;">
							<li><a href="http://www.finderstore.com.br" class="normal">FinderStore - Loja Virtual</a></li>
							<li><a href="http://www.finderpay.com.br" class="normal">FinderPay - Meio de Pagamento</a></li>
							<li><a href="http://www.finderfly.com.br" class="normal">FinderFly - Programa de Afiliados</a></li>
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
					{{ Form::open(array('url' => '/newlet','name'=>'newlet', 'id'=>'form_news')) }}
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
								<span>Copyright 2011-2014 PriceFinder Servi&ccedil;os Ltda.</span><br>
								O conte&uacute;do desse site &eacute; de uso exclusivo, proibida sob as penas da lei sua reprodu&ccedil;&atilde;o ou utiliza&ccedil;&atilde;o
							</div>
						</div>
</div>
</div>
@stop