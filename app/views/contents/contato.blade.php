@section('contato')

<div class="container" id = "contato">
	<div class="row">


		<div class="col-sm-12 col-md-12">
			<div class="title-box">
				<h2 class="title">Contato</h2>
			</div>
			<p style = "margin-bottom: 0px;">
				Cadastre-se no FinderFly e tenha acesso a diversos formatos em nossa plataforma e ganhe dinheiro com seu site, rede social, ou publicidade.<br><br></p>
				{{ Form::open(array('url'=>URL::current(),'name'=>'form-contato','class'=>'form1','onsubmit'=>'return validateForm()')) }}
					<div>
						{{ Form::email('seu_email', '', array('placeholder'=>'Seu e-mail*','class'=>'input-text required email')) }}
						{{ Form::email('confirme_email', '', array('placeholder'=>'Confirme seu e-mail*','class'=>'input-text required email'))  }}
					</div>
					
					<div>
						{{ Form::password('senha', array('placeholder'=>'Senha*','class'=>'input-text required'))  }}
						{{ Form::password('confirme_senha', array('placeholder'=>'Conformação de Senha*','class'=>'input-text required'))  }}
					</div>
					{{ Form::select('pais', $paises , Input::old('pais',''));}}
					{{ Form::select('plataforma', array('plataforma1'=>'Plataforma')) }}
					{{ Form::text('documento','', array('placeholder'=>'Documento','class'=>'input-text-doc required')) }}
					{{ Form::textarea('text','',array('class'=>'text-area-cont required','placeholder'=>'Mensagem')) }}
					
					<p style="float: left; margin-top: 10px;">*Campos Obrigatórios</p>

					{{ Form::submit('Enviar', array('class'=>'bt-enviar')) }}
				{{ Form::close() }}
				<img src="../img/finderfly/Img-019.png" style="float: right; border:1px solid grey; border-radius:5px">

			<div class="clearfix"></div>
		</div>
	</div>
</div>
@stop