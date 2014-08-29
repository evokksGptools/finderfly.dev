@section('formatos')
<div class="container" id = "formatos">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="title-box">
				<h1 class="title">Formatos</h1>
			</div>
			<p class="bottom-padding">Publishers e anunciantes que utilizam a Plataforma Lomadee contam com um leque variado de opções para a veiculação de campanhas publicitárias. Conheça abaixo os formatos que o programa oferece:</p><br>
		</div>
		<div class="col-sm-6 col-md-6">
			<div class="panel-group one-open" id="accordion">
				<div class="panel panel-default active">
					<div class="panel-heading">
						<div class="panel-title formats" data-img="img1">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
								Links
							</a>
						</div>
					</div>
					<div id="collapse1" class="panel-collapse collapse in">
						<div class="panel-body">
							São utilizados de forma sutil e atuam muito bem como publicidade, ocupando pouco espaço.
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title formats" data-img="img2">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
								Display
							</a>
						</div>
					</div>
					<div id="collapse2" class="panel-collapse collapse">
						<div class="panel-body">
							Existem em diversos formatos e tamanhos. E a estratégica é muito mais válida quando anúncios gráficos e banners são populares na internet; por exemplo, com banners associados ao conteúdo e ao público.
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title formats" data-img="img3">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
								Mídia Social
							</a>
						</div>
					</div>
					<div id="collapse3" class="panel-collapse collapse">
						<div class="panel-body">
							É a divulgação, de publicidade em redes sociais como Twitter e Facebook.
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title formats" data-img="img4">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
								HotSite
							</a>
						</div>
					</div>
					<div id="collapse4" class="panel-collapse collapse">
						<div class="panel-body">
							O HotSite adota uma estratégia de comunicação diversificada: o HotSite ora possui um apelo visual mais agressivo, ora um maior apelo comercial, porém ele não entra em divergência com o site institucional da empresa.
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title formats" data-img="img5">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
								Widgets
							</a>
						</div>
					</div>
					<div id="collapse5" class="panel-collapse collapse">
						<div class="panel-body">
							O FinderFly proporciona aplicativos para a divulgação, aprimorando o desenvolvimento de plataformas interativas.
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="col-sm-6 col-md-6 formato-b">
			{{ HTML::image('img/finderfly/Img-013.png','',array('class'=>'img1 active'))  }}
			{{ HTML::image('img/finderfly/Img-014.png','',array('class'=>'img2'))  }}
			{{ HTML::image('img/finderfly/Img-015.png','',array('class'=>'img5'))  }}
			{{ HTML::image('img/finderfly/Img-016.png','',array('class'=>'img3'))  }}
			{{ HTML::image('img/finderfly/Img-017.png','',array('class'=>'img4'))  }}
		</div>
	</div>
</div>

	@stop