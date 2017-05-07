@extends('admin.template')
@section('title')
Dashboard - Administrasi
@endsection
@section('style')
	
@endsection
@section('corejs')
	<script type="text/javascript" src="{{base_url()}}assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/form_inputs.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/form_select2.js"></script>
@endsection
@section('content')
	<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="{{base_url('superuser')}}"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="{{base_url('superuser/bab')}}">Bab</a></li>
							<li class="active">{{ ($type=="create") ? 'Tambah Data Bab' : 'Perbarui Data Bab' }}</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Tambah data Bab</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" id="form_bab" action="{{ ($type=='create') ? base_url('superuser/bab/created') : base_url('superuser/bab/updated/'.$bab->id_bab) }}" method="post">
								<fieldset class="content-group">
									{{-- <legend class="text-bold">Basic inputs</legend> --}}

									<div class="form-group">
										<label class="control-label col-lg-2">Nama Bab</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="nm_bab" value="{{ ($type=='create') ? '' : $bab->nm_bab }}" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Mata Pelajaran/Jenjang</label>
										<div class="col-lg-10">
										<select required class="select-search" name="mapel">
											<optgroup label="Pilih Jenjang">
												<option value="">Pilih</option>
												@foreach ($mapel as $result)
													<option 
														@if ($type=='update')
														{{ ($bab->id_mapel==$result->id_mapel) ? "selected" : "" }} 
														@endif
														value="{{$result->id_mapel}}">{{$result->nm_mapel}} - {{$result->nm_jenjang}}
													</option>
												@endforeach
											</optgroup>
										</select>
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
	$("#form_bab").submit(function(e){
			e.preventDefault();
			var formData = new FormData( $("#form_bab")[0] );

			$.ajax({
				url: 		$("#form_bab").attr('action'),
				type: 	"POST",
				data:  		new FormData(this),
          		processData: false,
          		contentType: false,
				beforeSend: function(){
					blockMessage($('#form_bab'),'Please Wait , {{ ($type =="create") ? "Menambahkan Bab" : "Memperbarui Bab" }}','#fff');		
				}
			})
			.done(function(data){
				$('#form_bab').unblock();
				sweetAlert({
					title: 	((data.auth==false) ? "Opps!" : '{{ ($type =="create") ? "Bab Di Buatkan" : "Bab Di Perbarui" }}'),
					text: 	data.msg,
					type: 	((data.auth==false) ? "error" : "success"),
				},
				function(){
					if(data.auth!=false){
						redirect("{{base_url('superuser/bab')}}");		
						return;
					}
				});
			})
			.fail(function() {
			    $('#form_bab').unblock();
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