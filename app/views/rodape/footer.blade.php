@section('footer')

<div class="container" style="width: 100%;">
<div class="row" id="foot">
	<div class="container" id="linha_foot">
		<div class="wrapper_block">
			<div id="fb-root"></div>
			<div class="row" id="margin-foot">
				<div class = "cont-footer">
					<div class="submenu">
						<span class="titulo_rodape">Pricefinder</span>
						<ul>
							<li><a href="/quem-somos" class="normal">Quem Somos</a></li>
							<li><a href="/termos-de-uso" class="normal">Termos de Uso</a></li>
							<li><a href="/politica-de-privacidade" class="normal">Pol&iacute;tica de Privacidade</a></li>
							<li><a href="/faq" class="normal">FAQ</a></li>
						</ul>
					</div>
					<div class="submenu">
						<span class="titulo_rodape">Voc&ecirc;</span> 
						<ul>
							<li><a href="/compra-garantida" class="normal">Compra Garantida</a></li>
							<li><a href="/principais_lojas" class="normal">Principais Lojas</a></li>
							<li><a href="/fale-conosco" class="normal">Fale Conosco</a></li>
							<li><a href="/atendimento-lojista" class="normal">Atendimento ao Lojista</a></li>
						</ul>
					</div>
					<div class="submenu">
						<span class="titulo_rodape">Produtos | Empresas</span>
						<ul>
							<li><a href="/anuncie_gratis" class="normal">Anuncie Grátis</a></li>
							<li><a href="/banners" class="normal">Banners</a></li>
							<li><a href="/destaque_loja" class="normal">Destaque Loja</a></li>
							<li><a href="/#" class="normal">Links Patrocinados</a></li>
							<li><a href="/email-marketing" class="normal">E-mail Marketing</a></li>
						</ul>
					</div>
					<div class="submenu">
						<span class="titulo_rodape">Divulgue e Ganhe</span>
						<ul style="border-right: none;">
							<li><a href="http://www.finderfly.com.br" class="normal">Finderfly</a></li>
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
							<div style = "display: inline-block;
width: 209px;">
								<span> Genero: </span>
								<input type="radio" name="genero" value="F" style="margin-left: 5px;"/>
								<span>Feminino</span>
								<input type="radio" name="genero" value="M" checked="checked" style="margin-left: 5px;"/>
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
</div>
<div id = "copyright" class = "row">
							<div class="col-sm-12"> 
								<span style = "font-weight:bold;font-size:12px; display: inline-block; margin-bottom: 5px">Copyright 2011-2014 Pricefinder Servi&ccedil;os Ltda.</span><br>
								O conte&uacute;do desse site &eacute; de uso exclusivo, proibida sob as penas da lei sua reprodu&ccedil;&atilde;o ou utiliza&ccedil;&atilde;o
							</div>
						</div>
</div>
</div>
@stop