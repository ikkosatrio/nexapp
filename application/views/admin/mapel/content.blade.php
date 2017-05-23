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
							<li><a href="{{base_url('superuser/mapel')}}">Mapel</a></li>
							<li class="active">{{ ($type=="create") ? 'Tambah Data Mapel' : 'Perbarui Data Mapel' }}</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Tambah data Mapel</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" id="form_mapel" action="{{ ($type=='create') ? base_url('superuser/mapel/created') : base_url('superuser/mapel/updated/'.$mapel->id_mapel) }}" method="post">
								<fieldset class="content-group">
									{{-- <legend class="text-bold">Basic inputs</legend> --}}

									<div class="form-group">
										<label class="control-label col-lg-2">Nama Mata Pelajaran</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="nm_mapel" value="{{ ($type=='create') ? '' : $mapel->nm_mapel }}" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Jenjang</label>
										<div class="col-lg-10">
										<select required class="select-search" name="jenjang">
											<optgroup label="Pilih Jenjang">
												<option value="">Pilih</option>
												@foreach ($jenjang as $result)
													<option 
														@if ($type=='update')
														{{ ($mapel->id_jenjang==$result->id_jenjang) ? "selected" : "" }} 
														@endif
														value="{{$result->id_jenjang}}">{{$result->nm_jenjang}}
													</option>
												@endforeach
											</optgroup>
										</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Jumlah Soal</label>
										<div class="col-lg-10">
											<input type="number" class="form-control" name="jumlah_soal" value="{{ ($type=='create') ? '' : $mapel->jumlah_soal }}" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Waktu Pengerjaan</label>
										<div class="col-lg-10">
											<input type="number" class="form-control" placeholder="satuan menit" name="waktu" value="{{ ($type=='create') ? '' : $mapel->waktu }}" required>
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
	$("#form_mapel").submit(function(e){
			e.preventDefault();
			var formData = new FormData( $("#form_mapel")[0] );

			$.ajax({
				url: 		$("#form_mapel").attr('action'),
				type: 	"POST",
				data:  		new FormData(this),
          		processData: false,
          		contentType: false,
				beforeSend: function(){
					blockMessage($('#form_mapel'),'Please Wait , {{ ($type =="create") ? "Menambahkan Mapel" : "Memperbarui Mapel" }}','#fff');		
				}
			})
			.done(function(data){
				$('#form_mapel').unblock();
				sweetAlert({
					title: 	((data.auth==false) ? "Opps!" : '{{ ($type =="create") ? "Mapel Di Buatkan" : "Mapel Di Perbarui" }}'),
					text: 	data.msg,
					type: 	((data.auth==false) ? "error" : "success"),
				},
				function(){
					if(data.auth!=false){
						redirect("{{base_url('superuser/mapel')}}");		
						return;
					}
				});
			})
			.fail(function() {
			    $('#form_mapel').unblock();
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