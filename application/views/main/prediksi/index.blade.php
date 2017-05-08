@extends('main.template')
@section('content')
<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-display position-left"></i> <span class="text-semibold">Prediksi</h4>
			</div>
		</div>
	</div>
	<!-- /page header -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">
<!-- Main content -->
			<div class="content-wrapper">

				<!-- Image grid -->
				<div class="row">
					<div class="col-lg-3">
					</div>
					<div class="col-lg-6">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h6 class="panel-title">Prediksi Soal<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
								<div class="heading-elements">
									<ul class="icons-list">
				                		<li><a data-action="collapse"></a></li>
				                		<li><a data-action="reload"></a></li>
				                		<li><a data-action="close"></a></li>
				                	</ul>
			                	</div>
							</div>

							<div class="panel-body">
								<div class="form-group">
									<label class="control-label col-lg-3">Jenjang</label>
									<label class="control-label col-lg-9">{{$mapel->nm_jenjang}}</label>
								</div>
								<div class="form-group">
									<label class="control-label col-lg-3">Mapel</label>
									<label class="control-label col-lg-9">{{$mapel->nm_mapel}}</label>
								</div>
								<div class="form-group">
									<label class="control-label col-lg-3">Jumlah Soal</label>
									<label class="control-label col-lg-9">{{$mapel->jumlah_soal}}</label>
								</div>
								<div class="form-group">
									<label class="control-label col-lg-3">Waktu</label>
									<label class="control-label col-lg-9">{{$mapel->waktu}} menit</label>
								</div>
							</div>
							<div class="panel-footer">
								<a href="{{base_url('main/prediksi/start/'.$mapel->id_mapel)}}"><button type="button" class="btn btn-primary pull-right" style="margin-right: 10px">Mulai</button></a>
								<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
							</div>
						</div>
					</div>
					<div class="col-lg-3">
					</div>
				</div>
			<!-- /main content -->
			@endsection