@extends('admin.template')
@section('title')
Dashboard - Administrasi
@endsection
@section('style')
	
@endsection
@section('corejs')
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/pages/form_inputs.js"></script>
@endsection
@section('content')
	<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{base_url('superuser')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="{{base_url('superuser/jenjang')}}">Jenjang</a></li>
							<li class="active">{{ ($type=="create") ? 'Tambah Data Jenjang' : 'Perbarui Data Jenjang' }}</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Tambah data Jengjang</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" id="form_jenjang" action="{{ ($type=='create') ? base_url('superuser/jenjang/created') : base_url('superuser/jenjang/updated/'.$jenjang->id_jenjang) }}" method="post">
								<fieldset class="content-group">
									{{-- <legend class="text-bold">Basic inputs</legend> --}}

									<div class="form-group">
										<label class="control-label col-lg-2">Nama Jengjang Pendidikan</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="nm_jenjang" value="{{ ($type=='create') ? '' : $jenjang->nm_jenjang }}" required>
										</div>
									</div>
								</fieldset>

								<div class="text-right">
									<button type="submit" class="btn btn-primary">{{ ($type=='create') ? 'Simpan' : 'Edit' }} <i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</form>
						</div>
					</div>
					<!-- /form horizontal -->

					
					<!-- Footer -->
					{{-- <div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div> --}}
					<!-- /footer -->

				</div>
			</div>
@section('script')
	<script type="text/javascript">
	$("#form_jenjang").submit(function(e){
			e.preventDefault();
			var formData = new FormData( $("#form_jenjang")[0] );

			$.ajax({
				url: 		$("#form_jenjang").attr('action'),
				method: 	"POST",
				data:  		new FormData(this),
          		processData: false,
          		contentType: false,
				beforeSend: function(){
					blockMessage($('#form-blog'),'Please Wait , {{ ($type =="create") ? "Menambahkan Jenjang" : "Memperbarui Jenjang" }}','#fff');		
				}
			})
			.done(function(data){
				$('#form-blog').unblock();
				sweetAlert({
					title: 	((data.auth==false) ? "Opps!" : '{{ ($type =="create") ? "Jenjang Di Buatkan" : "Jenjang Di Perbarui" }}'),
					text: 	data.msg,
					type: 	((data.auth==false) ? "error" : "success"),
				},
				function(){
					if(data.auth!=false){
						redirect("{{base_url('superuser/jenjang')}}");		
						return;
					}
				});
			})
			.fail(function() {
			    $('#form_jenjang').unblock();
				sweetAlert({
					title: 	"Opss!",
					text: 	"Ada Yang Salah! , Silahkan Coba Lagi Nanti",
					type: 	"error",
				},
				function(){
					
				});
			 })
			
		})
	</script>
	
@endsection
@endsection