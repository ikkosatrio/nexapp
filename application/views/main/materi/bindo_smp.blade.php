@extends('main.template')
@section('title')
NEXAPP
@endsection
@section('content')
<!-- Bordered panels title -->
<h1 align="center" class="content-group text-semibold">KISI - KISI BAHASA INDONESIA</h1>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-success panel-bordered">
			<div class="panel-heading">
				<h3 class="panel-title" align="center">BAHASA INDONESIA</h3>
			</div>
			<div class="panel-body" style="font-size: 12px">
				<ul>
					<h4><li><a href="{{base_url('main/smp/nonsastra')}}" name="nonsastra" title="">MEMBACA NON-SASTRA</a></li></h4>
					<h4><li><a href="{{base_url('main/smp/sastra')}}" name="sastra" title="">MEMBACA SASTRA</a></li></h4>
					<h4><li><a href="{{base_url('main/smp/menulis')}}" title="">MENULIS TERBATAS</a></li></h4>
					<h4><li><a href="{{base_url('main/smp/menyunting')}}" title="">MENYUNTING KATA, KALIMAT, DAN PARAGRAF</a></li></h4>
					<h4><li><a href="{{base_url('main/smp/tanda_baca')}}" title="">MENYUNTING EJAAN DAN TANDA BACA</a></li></h4>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- /bordered panels -->
@endsection