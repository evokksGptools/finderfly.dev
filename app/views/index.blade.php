@extends('layouts.layout_main')		

@section('header')
	@include('topo.header')
@stop

@section('slider')
	@include('slider.slider')
@stop

@section('banner-set')
	@include('contents.banner_set')
@stop

@section('publishers')
	@include('contents.publishers')
@stop

@section('audiencia')
	@include('contents.audiencia')
@stop

@section('parallax')
	@include('contents.parallax')
@stop

@section('comissao_pagamentos')
	@include('contents.comissao_pagamentos')
@stop

@section('anunciantes')
	@include('contents.anunciantes')
@stop

@section('services')
	@include('contents.services')
@stop

@section('formatos')
	@include('contents.formatos')
@stop

@section('sobre_finderfly')
	@include('contents.sobre_finderfly')
@stop

@section('contato')
	@include('contents.contato')
@stop

@section('todos_anunciantes')
	@include('contents.todos_anunciantes')
@stop
	
@section('footer')
	@include('rodape.footer')
@stop

@section('scripts')
	@include('contents.scripts')
@stop


