@extends('main.template')
@section('style')
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-countdown/2.0.2/jquery.countdown.min.css">
@endsection
@section('js')
	<script type="text/javascript" src="{{base_url()}}assets/main/js/pages/sidebar_dual.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countdown/2.0.2/jquery.plugin.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countdown/2.0.2/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countdown/2.0.2/jquery.countdown-id.min.js"></script>
@endsection
@section('content')
	<div class="page-header">
		<div class="page-header-content" style="margin-top: 30px">
			{{-- <div class="page-title">
				<h4><i class="icon-display position-left"></i> <span class="text-semibold">Prediksi</h4>
			</div> --}}
		</div>
	</div>
	<!-- /page header -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">
			<!-- Main content -->
			<div class="sidebar sidebar-main sidebar-default sidebar-separate">
				<div class="sidebar-content">

					<!-- Action buttons -->
					<div class="sidebar-category">
						<div class="category-title">
							<span>Sisa Waktu</span>
							<ul class="icons-list">
								<li><a href="#" data-action="collapse"></a></li>
							</ul>
						</div>

						<div class="category-content">
							<div class="row">
								<div class="col-xs-12">
									<div id="waktu" style="height: 50px">
										
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /secondary sidebar -->
			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Info alert -->
				<div class="alert alert-info alert-styled-left alert-arrow-left alert-component">
					<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
					<h6 class="alert-heading text-semibold">Pemberiatahuan</h6>
					Jawab Soal dengan benar dan tepat, jangan tergesa-gesa, baca doa dan percaya diri adalah kunci sukses. Selamat Mengerjakan.
			    </div>
			    <!-- /info alert -->


				<!-- Sidebars overview -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Soal</h5>
						<div class="heading-elements">
							{{-- <ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul> --}}
	                	</div>
					</div>
					{{-- {{var_dump($soal)}} --}}
					<form action="{{base_url('main/tryout/jawab')}}" name="formSoal" id="formSoal" method="post" accept-charset="utf-8">
					@foreach ($soal as $key => $result)
						{{-- expr --}}
					<div class="panel-body">
							<div class="row">
									<label class="control-label col-lg-3">Soal No {{$key+1}}</label>
								<div class="col-lg-12">
								<input type="text" name="no_soal[]" style="display: none" value="{{$result->id_soal}}">
									<div class="well">
					                    {!!$result->isi_soal!!}
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-12">
									<ul class="list list-unstyled no-margin-bottom">
										<li><input type="radio" name="pilih{{$result->id_soal}}[]" value="A">{{$result->pilihA}}</li>
										<li><input type="radio" name="pilih{{$result->id_soal}}[]" value="B">{{$result->pilihB}}</li>
										<li><input type="radio" name="pilih{{$result->id_soal}}[]" value="C">{{$result->pilihC}}</li>
										<li><input type="radio" name="pilih{{$result->id_soal}}[]" value="D">{{$result->pilihD}}</li>
									</ul>
								</div>
							</div>	
					<div class="divider">
						<hr>
					</div>
					</div>
					@endforeach
					<div class="panel-footer">
						{{-- <a href="{{base_url('main/prediksi/start/'.$result->id_mapel)}}"><button type="button" class="btn btn-primary pull-left" style="margin-right: 10px">Sebelumnya</button></a> --}}
						<button type="submit" onclick="hapusCookies()" class="btn btn-primary pull-right" style="margin-right: 10px">Selesai</button>
						{{-- <a href="sdf"><button type="button" onclick="hapusCookies()"></button></a> --}}
					</div>
					</form>
				</div>
			</div>
			<script type="text/javascript">
				var waktu = 0
				if (localStorage.getItem("detik")!=null) {
					var waktu = localStorage.getItem("detik");
				}else{
					var waktu = {{$mapel->waktu*60}};
				}
				$('#waktu').countdown({
					 until: waktu ,
					 onExpiry: function(){
					 	localStorage.clear();
					    alert("Waktu Selesai");
					 	$('#formSoal').submit();
					 },
					 onTick: simpanCookies

				});
				function hapusCookies() { 
				   localStorage.clear();
				};
				function simpanCookies() { 
				    var periods = $('#waktu').countdown('getTimes');
				    localStorage.setItem('detik', $.countdown.periodsToSeconds(periods));
				    // alert($.countdown.periodsToSeconds(periods)); 
				};
				$(document).ready(function(){
    				localStorage.clear();
				});
			</script>
			<!-- /main content -->
			@endsection