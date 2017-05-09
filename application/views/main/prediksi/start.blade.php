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
			<div class="sidebar sidebar-main sidebar-default sidebar-separate">
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
								<div class="col-xs-6">
									<button class="btn bg-teal-400 btn-block btn-float btn-float-lg" type="button"><i class="icon-git-branch"></i> <span>Branch</span></button>
									<button class="btn bg-purple-300 btn-block btn-float btn-float-lg" type="button"><i class="icon-mail-read"></i> <span>Messages</span></button>
								</div>
								
								<div class="col-xs-6">
									<button class="btn bg-warning-400 btn-block btn-float btn-float-lg" type="button"><i class="icon-stats-bars"></i> <span>Statistics</span></button>
									<button class="btn bg-blue btn-block btn-float btn-float-lg" type="button"><i class="icon-people"></i> <span>Users</span></button>
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
					You can use sidebar categories as separate widgets. To use, add <code>.sidebar-separate</code> class to the sidebar container.
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
					@foreach ($soal as $key => $result)
						{{-- expr --}}
					<div class="panel-body">
							<div class="row">
									<label class="control-label col-lg-3">Soal No {{$key+1}}</label>
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
										<li><input type="radio" name="" value="">{{$result->pilihA}}</li>
										<li><input type="radio" name="" value="">{{$result->pilihB}}</li>
										<li><input type="radio" name="" value="">{{$result->pilihC}}</li>
										<li><input type="radio" name="" value="">{{$result->pilihD}}</li>
									</ul>
								</div>
							</div>	
					</div>
					<div class="panel-body">
						<a href="{{base_url('main/prediksi/start/'.$result->id_mapel)}}"><button type="button" class="btn btn-primary pull-left" style="margin-right: 10px">Sebelumnya</button></a>
						<a href="{{base_url('main/prediksi/start/'.$result->id_mapel)}}"><button type="button" class="btn btn-primary pull-right" style="margin-right: 10px">Selanjutnya</button></a>
					</div>
				</div>
					@endforeach
			</div>
			
			<!-- /main content -->
			@endsection