@section('contato')

<div class="container" id = "contato">
	<div class="row">


		<div class="col-sm-12 col-md-12">
			<div class="title-box">
				<h1 class="title">Contato</h1>
			</div>
			<p style = "margin-bottom: 0px;">
				Cadastre-se no FinderFly e tenha acesso a diversos formatos em nossa plataforma e ganhe dinheiro com seu site, rede social, ou publicidade.<br><br></p>
				{{ Form::open(array('url'=>'#','name'=>'form-contato','class'=>'form1')) }}
					<div>
						{{ Form::text('seu_email', '', array('placeholder'=>'Seu e-mail*','class'=>'input-text'))  }}
						{{ Form::text('confirme_email', '', array('placeholder'=>'Confirme seu e-mail*','class'=>'input-text'))  }}
					</div>
					
					<div>
						{{ Form::text('senha', '', array('placeholder'=>'Senha*','class'=>'input-text'))  }}
						{{ Form::text('confirme_senha', '', array('placeholder'=>'Conformação de Senha*','class'=>'input-text'))  }}
					</div>
					<select name = "paises" class = "select2">
						@include('contents.paises')
					</select>
					{{ Form::select('plataforma', array('a'=>'A','b'=>'B')) }}
					{{ Form::text('documento','', array('placeholder'=>'Documento','class'=>'input-text-doc')) }}
					{{ Form::textarea('text','',array('class'=>'text-area-cont','placeholder'=>'Mensagem')) }}
					<p style="float: left; margin-top: 10px;">*Campos Obrigatórios</p>
					{{ Form::submit('Enviar', array('class'=>'bt-enviar')) }}
				{{ Form::close() }}
				<img src="../img/finderfly/Img-019.png" style="float: right; border:1px solid grey; border-radius:5px">

			<div class="clearfix"></div>
		</div>
	</div>
</div>
@stop