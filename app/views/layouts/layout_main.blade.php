<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Finderfly</title>
  <meta name="keywords" content="HTML5 Template">
  <meta name="description" content="Progressive — Responsive Multipurpose HTML Template">
  <meta name="author" content="itembridge.com">
  <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/finderfly/Favicon.ico" type="image/x-icon"/>
  
  <!-- Font -->
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic'>

  <!-- Plagins CSS -->
  <link rel="stylesheet" href="css/buttons/buttons.css">
  <link rel="stylesheet" href="css/buttons/social-icons.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jslider.css">
  <link rel="stylesheet" href="css/settings.css">
  <link rel="stylesheet" href="css/jquery.fancybox.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/video-js.min.css">
  <link rel="stylesheet" href="css/morris.css">
  <link rel="stylesheet" href="css/royalslider/royalslider.css">
  <link rel="stylesheet" href="css/royalslider/skins/minimal-white/rs-minimal-white.css">
  <link rel="stylesheet" href="css/layerslider/layerslider.css">
  <link rel="stylesheet" href="css/ladda.min.css">
  <link rel="stylesheet" href="css/datepicker.css">
  
  <!-- Theme CSS -->
  <link rel="stylesheet" href="css/price-style.css">
  <link rel="stylesheet" href="css/styles-fly.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/foot.css">
  

  <!-- Responsive CSS -->
  <link rel="stylesheet" href="css/responsive.css">
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/customizer/pages.css">
  <link rel="stylesheet" href="css/customizer/home-pages-customizer.css">

  <!-- IE Styles-->
  <link rel='stylesheet' href="css/ie/ie.css">

  
  
  <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<link rel='stylesheet' href="css/ie/ie8.css">
	<![endif]-->
</head>
<body class="fixed-header">
	<div class="page-box">
		<div class="page-box-content">
			@yield('header')
			@yield('slider')
			@yield('banner-set')
			<div class="clearfix"></div>
			<section id="main">
				<article class="content">
			@yield('publishers')
			@yield('audiencia')
			@yield('parallax')
			@yield('comissao_pagamentos')
			@yield('anunciantes')
			@yield('services')
			@yield('formatos')
			@yield('sobre_finderfly')
			@yield('contato')
			@yield('todos_anunciantes')
				</article>
			</section><!-- #main -->
			@yield('footer')
			<div class="clearfix"></div>
		</div><!-- .page-box-content -->
	</div><!-- .page-box -->
	@yield('scripts')
</body>
</html>		