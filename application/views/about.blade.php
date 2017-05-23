@extends('main.template')
@section('title')
NEXAPP
@endsection
@section('content')
<!-- Bordered panels title -->
<h1 align="center" class="content-group text-semibold"></h1>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-success panel-bordered">
			<div class="panel-heading">
				<h3 class="panel-title" align="center">ABOUT US</h3>
			</div>
			<div class="panel-body" style="font-size: 12px">
				<div class="ab-w3-agile-info-text">
			   		<h4><p class="sub-text one">Siapa Kami ?</p></h4>
			     	<h2 class="title-w3">Tentang Kami</h2>
				 
				 	<h4>{!!$config->description!!}</h4>
			
					<ul style="font-size: 1.5em; list-style-type: none;">
					    <li><a href="https://www.facebook.com/{{$config->facebook}}" target="_blank"><i class="icon-facebook2" aria-hidden="true"></i> {{$config->facebook}}</li></a>
					    <li><a href="https://www.instagram.com/{{$config->instagram}}" target="_blank"><i class="icon-instagram" aria-hidden="true"></i> {{$config->instagram}}</li></a>
					    <li><a href="mailto: {{$config->email}}"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> {{$config->email}}</li></a>
					    <li><a href="tel:{{$config->phone}}"><i class="icon-phone" aria-hidden="true"></i> {{$config->phone}}</li></a>
					</ul>
			
		  		</div>
			</div>
		</div>
	</div>
</div>
<!-- /bordered panels -->
@endsection