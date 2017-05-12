@extends('main.template')
@section('title')
NEXAPP
@endsection
@section('content')
<!-- Bordered panels title -->
<h1 style="font-size: 25px" align="center" class="content-group text-semibold">KISI - KISI BAHASA INGGRIS</h1>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-success panel-bordered">
			<div class="panel-heading">
				<h3 class="panel-title" align="center">BAHASA INGGRIS</h3>
			</div>
			<div class="panel-body" style="font-size: 12px">
				<ul>
					<h4><li><a href="{{base_url('main/smp/short')}}" title="">SHORT MESSAGES</a></li></h4>
					<h4><li><a href="{{base_url('main/smp/letter')}}" title="">LETTERS/EMAIL</a></li></h4>
					<h4><li><a href="{{base_url('main/smp/invite')}}" title="">INVITATION</a></li></h4>
					<h4><li><a href="{{base_url('main/smp/anoun')}}" title="">ANNOUNCEMENT</a></li></h4>
					<h4><li><a href="{{base_url('main/smp/advert')}}" title="">ADVERTISEMENT</a></li></h4>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- /bordered panels -->
@endsection