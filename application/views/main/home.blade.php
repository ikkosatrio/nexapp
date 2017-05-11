@extends('main.template')
@section('content')
<div class="page-header">
	<div class="page-header-content">
		<div class="page-title">
			<h4><i class="icon-display position-left"></i> <span class="text-semibold">Selamat Datang</span> - di {{$config->name}}</h4>
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
				<h6 class="content-group text-semibold">
					Menu
				</h6>
				<div class="row">
					<div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
						<div class="thumbnail">
							<div class="thumb">
								<img src="{{base_url()}}assets/main/images/placeholder.jpg" alt="">
								<div class="caption-overflow">
									<span>
										<a href="#" data-toggle="modal" data-target="#modal_materi" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
									</span>
								</div>
							</div>

							<div class="caption">
								<h6 class="no-margin"><a href="#" data-toggle="modal" data-target="#modal_materi" class="text-default">Materi</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
							</div>
						</div>
					</div>

					<div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
						<div class="thumbnail">
							<div class="thumb">
								<img src="{{base_url()}}assets/main/images/placeholder.jpg" alt="">
								<div class="caption-overflow">
									<span>
										<a href="{{base_url('main/ice')}}" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
									</span>
								</div>
							</div>

							<div class="caption">
								<h6 class="no-margin"><a href="#" class="text-default">Ice Break</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
							</div>
						</div>
					</div>

					<div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
						<div class="thumbnail">
							<div class="thumb">
								<img src="{{base_url()}}assets/main/images/placeholder.jpg" alt="">
								<div class="caption-overflow">
									<span>
										<a href="{{base_url('main/esq')}}" data-popup="lightbox" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
									</span>
								</div>
							</div>

							<div class="caption">
								<h6 class="no-margin"><a href="#" class="text-default">Esq</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
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
								<h6 class="no-margin"><a href="#" data-toggle="modal" data-target="#modal_simulasi" class="text-default">Simulasi</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
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
								<h6 class="no-margin"><a href="#" class="text-default">Tips</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
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
								<h6 class="no-margin"><a href="#" class="text-default">About Us</a> <a href="#" class="text-muted"><i class="icon-three-bars pull-right"></i></a></h6>
							</div>
						</div>
					</div>
				</div>
			<!-- /main content -->
			<!-- Modal -->
<div id="modal_materi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PILIH JENJANG PENDIDIKAN</h4>
      </div>
      <div class="modal-body" align="center" >
					<div class="panel panel-flat">
						<div class="panel-body">
							<div class="tabbable">
								<ul class="nav nav-tabs nav-tabs-highlight">
								
									<li><a href="#highlight-tab1" data-toggle="tab" class="legitRipple">SMP</a></li>
									<li><a href="#highlight-tab2" data-toggle="tab" class="legitRipple">SMA</a></li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane" id="highlight-tab1">
											<a href="{{base_url('main/smp/bindo')}}"><button type="submit" class="btn btn-primary legitRipple">BAHASA <i class="icon-arrow-right14 position-right"></i></button></a>

											<a href="{{base_url('main/smp/matematika')}}"><button type="submit" class="btn btn-primary legitRipple">MATEMATIKA <i class="icon-arrow-right14 position-right"></i></button></a>

											<a href="{{base_url('main/smp/bing')}}"><button type="submit" class="btn btn-primary legitRipple">BAHASA INGGRIS <i class="icon-arrow-right14 position-right"></i></button></a>

											<a href="{{base_url('main/smp/ipa')}}"><button type="submit" class="btn btn-primary legitRipple">IPA <i class="icon-arrow-right14 position-right"></i></button></a>
									</div>
									<div class="tab-pane" id="highlight-tab2">
											<a href="{{base_url()}}"><button type="submit" class="btn btn-primary legitRipple">Matematika <i class="icon-arrow-right14 position-right"></i></button></a>
									</div>
								</div>
							</div>
						</div>
					</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
			@endsection