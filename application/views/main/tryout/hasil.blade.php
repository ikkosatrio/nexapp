@extends('main.template')
@section('js')
	<script type="text/javascript" src="{{base_url()}}assets/main/js/pages/sidebar_dual.js"></script>
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
			{{-- <div class="sidebar sidebar-main sidebar-default sidebar-separate">
				<div class="sidebar-content">

					<!-- Action buttons -->
					<div class="sidebar-category">
						<div class="category-title">
							<span>Navigasi Soal</span>
							<ul class="icons-list">
								<li><a href="#" data-action="collapse"></a></li>
							</ul>
						</div>

						<div class="category-content">
							<div class="row">
								<div class="col-xs-2">
									<a href="#step-1"><button class="btn bg-blue btn-xs" type="button"><span>1</span></button></a>
								</div>
								<div class="col-xs-2">
									<a href="#step-2"><button class="btn bg-blue btn-xs" type="button"><span>1</span></button></a>
								</div>
								<div class="col-xs-2">
									<a href="#step-3"><button class="btn bg-blue btn-xs" type="button"><span>1</span></button></a>
								</div>
								<div class="col-xs-2">
									<a href="#step-4"><button class="btn bg-blue btn-xs" type="button"><span>1</span></button></a>
								</div>
								<div class="col-xs-2">
									<a href="#step-5"><button class="btn bg-blue btn-xs" type="button"><span>1</span></button></a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div> --}}
			<!-- /secondary sidebar -->
			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Info alert -->
				<div class="alert alert-info alert-styled-left alert-arrow-left alert-component">
					<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
					<h6 class="alert-heading text-semibold">Pembahasan</h6>
						Nilai and adalah = {{$jawab['nilai']}}
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
					<form action="{{base_url('main')}}" method="post" accept-charset="utf-8">
						@php
							$no = 1;
						@endphp						
					@foreach ($no_soal as $hasil)
					@foreach ($soal as $key => $result)
						@if ($hasil == $result->id_soal)
					<div class="panel-body">
							<div class="row">
									<label class="control-label col-lg-3">Soal No {{$no}}</label>
								<div class="col-lg-12">
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
					@php
						$no++;
					@endphp
					@endif
					@endforeach
					@endforeach
					<div class="panel-footer">
						{{-- <a href="{{base_url('main/prediksi/start/'.$result->id_mapel)}}"><button type="button" class="btn btn-primary pull-left" style="margin-right: 10px">Sebelumnya</button></a> --}}
						<button type="submit" class="btn btn-primary pull-right" style="margin-right: 10px">Selesai</button>
					</div>
					</form>
				</div>
			</div>
			
			<!-- /main content -->
			@endsection