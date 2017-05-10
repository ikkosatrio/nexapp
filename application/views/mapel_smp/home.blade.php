@extends('main.template')
@section('content')
<div class="page-container">

		<!-- Page content -->
		<div class="page-content">
<!-- Main content -->
			<div class="content-wrapper">

				<!-- Image grid -->
				<h6 class="content-group text-semibold">
					Menu
				</h6>
				<div class="row">
					<div class="col-lg-2 col-md-4 col-sm-6 col-xs-6"></div>
					<div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
						<div class="thumbnail">
							<div class="thumb">
								<img src="{{base_url()}}assets/main/images/placeholder.jpg" alt="">
								<div class="caption-overflow">
									<span>
										<a href="{{base_url('main/smp/bindo')}}" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
									</span>
								</div>
							</div>

							<div class="caption">
								<h6 class="no-margin"><a href="#" data-toggle="modal" data-target="#modal_materi" class="text-default">BAHASA INDONESIA</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
							</div>
						</div>
					</div>

					<div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
						<div class="thumbnail">
							<div class="thumb">
								<img src="{{base_url()}}assets/main/images/placeholder.jpg" alt="">
								<div class="caption-overflow">
									<span>
										<a href="{{base_url('main/smp/matematika')}}" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
									</span>
								</div>
							</div>

							<div class="caption">
								<h6 class="no-margin"><a href="#" class="text-default">MATEMATIKA</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
							</div>
						</div>
					</div>

					<div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
						<div class="thumbnail">
							<div class="thumb">
								<img src="{{base_url()}}assets/main/images/placeholder.jpg" alt="">
								<div class="caption-overflow">
									<span>
										<a href="{{base_url()}}assets/main/images/placeholder.jpg" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
									</span>
								</div>
							</div>

							<div class="caption">
								<h6 class="no-margin"><a href="#" class="text-default">BAHASA INGGRIS</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
							</div>
						</div>
					</div>

					<div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
						<div class="thumbnail">
							<div class="thumb">
								<img src="{{base_url()}}assets/main/images/placeholder.jpg" alt="">
								<div class="caption-overflow">
									<span>
										<a href="#" data-toggle="modal" data-target="#modal_simulasi" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
									</span>
								</div>
							</div>

							<div class="caption">
								<h6 class="no-margin"><a href="#" data-toggle="modal" data-target="#modal_simulasi" class="text-default">IPA</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
							</div>
						</div>
					</div>
				</div>
			<!-- /main content -->
@endsection