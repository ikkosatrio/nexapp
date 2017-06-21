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

	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/editors/wysihtml5/wysihtml5.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/editors/wysihtml5/toolbar.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/editors/wysihtml5/parsers.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/editors/wysihtml5/locales/bootstrap-wysihtml5.ua-UA.js"></script>
	{{-- <script type="text/javascript">
	var editorsmall = false;
	</script>
	<script type="text/javascript" src="{{base_url()}}assets/ckeditor2/ckeditor.js"></script>
	 --}}
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/uploaders/fileinput.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/uploader_bootstrap.js"></script>
	{{-- <script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/styling/switch.min.js"></script> --}}
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/editor_wysihtml5.js"></script>
	{{-- <script type="text/javascript" src="{{base_url()}}assets/js/pages/form_checkboxes_radios.js"></script> --}}
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
							<h5 class="panel-title">Tambah Soal Bab</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" id="form_soal" action="{{ ($type=='create') ? base_url('superuser/soal/created/'.$bab->id_bab) : base_url('superuser/soal/updated/'.$soal->id_soal) }}" method="post">
								<fieldset class="content-group">
									{{-- <legend class="text-bold">Basic inputs</legend> --}}

									<div class="form-group">
										<label class="control-label col-lg-2">Nama Bab</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" readonly name="nm_bab" value="{{ ($type=='create') ? $bab->nm_bab : $bab->nm_bab }}" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Mata Pelajaran/Jenjang</label>
										<div class="col-lg-10">
										<select required class="select-search" disabled name="mapel">
											<optgroup label="Pilih Jenjang">
												<option value="">Pilih</option>
												@foreach ($mapel as $result)
													<option 
														@if ($type=='update' or $type=='create')
														{{ ($bab->id_mapel==$result->id_mapel) ? "selected" : "" }} 
														@endif
														value="{{$result->id_mapel}}">{{$result->nm_mapel}} - {{$result->nm_jenjang}}
													</option>
												@endforeach
											</optgroup>
										</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-2 control-label text-semibold">File Audio:</label>
										<div class="col-lg-10">
											@if ($soal->audio!=null)
											@php
												$soal->audio = str_replace(' ', '_', $soal->audio);
											@endphp
												<audio src="{{base_url()}}assets/audio/{{$soal->audio}}" autobuffer autoloop loop controls></audio>
											@endif
											<input type="file" name="audio" class="file-input" data-show-upload="false">
											<span class="help-block">Inputan ini dikhususkan untuk soal listening atau memiliki audio jika tidak ada audio silahkan hiraukan inputan ini.<code>pastikan format file .mp3</code></span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Soal</label>
										<div class="col-lg-10">
											<textarea rows="10" cols="100" name="isiSoal" class="wysihtml5 wysihtml5-default2 form-control" placeholder="Isi Soal">{{ ($type=='create') ? '' : $soal->isi_soal }}</textarea>
										<div class="form-group">
											<label class="text-semibold">Jawaban</label>
											<div class="radio">
												<label>
													<input type="radio" name="jawaban" @if ($type=='update'){{ ($soal->jawaban=='A') ? 'checked' : '' }}@endif value="A">
													{{-- <input type="text" class="form-control" name="pilihA" value="{{ ($type=='create') ? '' : $soal->pilihA }}" placeholder="A" required=""> --}}

													A<textarea class=" wysihtml5 wysihtml5-default2 form-control form-control" placeholder="A" required="" name="pilihA">{{ ($type=='create') ? '' : $soal->pilihA }}</textarea>
												</label>
											</div>

											<div class="radio">
												<label>
													<input type="radio" name="jawaban" @if ($type=='update'){{ ($soal->jawaban=='B') ? 'checked' : '' }}@endif value="B">
													{{-- <input type="text" class="form-control" name="pilihB" value="{{ ($type=='create') ? '' : $soal->pilihB }}" placeholder="B" required=""> --}}

													B<textarea class=" wysihtml5 wysihtml5-default2 form-control form-control" placeholder="B" required="" name="pilihB">{{ ($type=='create') ? '' : $soal->pilihB }}</textarea>
												</label>
											</div>

											<div class="radio">
												<label>
													<input type="radio" name="jawaban" @if ($type=='update'){{ ($soal->jawaban=='C') ? 'checked' : '' }}@endif value="C">
													{{-- <input type="text" class="form-control" name="pilihC" value="{{ ($type=='create') ? '' : $soal->pilihC }}" placeholder="C" required=""> --}}
													C<textarea class=" wysihtml5 wysihtml5-default2 form-control form-control" placeholder="C" required="" name="pilihC">{{ ($type=='create') ? '' : $soal->pilihC }}</textarea>
												</label>
											</div>

											<div class="radio">
												<label>
													<input type="radio" name="jawaban" @if ($type=='update'){{ ($soal->jawaban=='D') ? 'checked' : '' }}@endif value="D">
													{{-- <input type="text" class="form-control" name="pilihD" value="{{ ($type=='create') ? '' : $soal->pilihD }}" placeholder="D" required=""> --}}
													D<textarea class=" wysihtml5 wysihtml5-default2 form-control form-control" placeholder="D" required="" name="pilihD">{{ ($type=='create') ? '' : $soal->pilihD }}</textarea>
												</label>
											</div>

											<div class="radio">
												<label>
													<input type="radio" name="jawaban" @if ($type=='update'){{ ($soal->jawaban=='E') ? 'checked' : '' }}@endif value="E">
													{{-- <input type="text" class="form-control" name="pilihE" value="{{ ($type=='create') ? '' : $soal->pilihE }}" placeholder="E" required=""> --}}
													E<textarea class=" wysihtml5 wysihtml5-default2 form-control form-control" placeholder="E" required="" name="pilihE">{{ ($type=='create') ? '' : $soal->pilihE }}</textarea>
												</label>
											</div>
										</div>
										</div>
										
										{{-- <div class="text-right">
							                <button style="margin-top: 10px" type="button" class="btn btn-danger" onclick="removeMateri(this)">Hapus Materi</button>
										</div> --}}
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Pembahasan</label>
										<div class="col-lg-10">
											<textarea rows="5" cols="5" name="pembahasan" class=" wysihtml5 wysihtml5-default2 form-control" placeholder="Isi PEmbahsana">{{ ($type=='create') ? '' : $soal->pembahasan }}</textarea>
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
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/editor_ckeditor.js"></script>
	<script type="text/javascript">
	// function NewMateri(){
		
	// 	var html         = 			'<div class="form-group">'+
	// 								'<label class="control-label col-lg-2">Soal</label>'+
	// 									'<div class="col-lg-10">'+
	// 										'<textarea rows="5" cols="5" name="isiMateri[]" class=" wysihtml5 wysihtml5-default form-control" placeholder="Isi Soal"></textarea>'+
	// 									'<div class="form-group">'+
	// 										'<label class="text-semibold">Jawaban</label>'+
	// 										'<div class="radio">'+
	// 											'<label>'+
	// 												'<input type="radio" name="jawaban">'+
	// 												'<input type="text" class="form-control" name="pilihA" value="" placeholder="A" required="">'+
	// 											'</label>'+
	// 										'</div>'+

	// 										'<div class="radio">'+
	// 											'<label>'+
	// 												'<input type="radio" name="jawaban">'+
	// 												'<input type="text" class="form-control" name="pilihB" value="" placeholder="B" required="">'+
	// 											'</label>'+
	// 										'</div>'+

	// 										'<div class="radio">'+
	// 											'<label>'+
	// 												'<input type="radio" name="jawaban">'+
	// 												'<input type="text" class="form-control" name="pilihC" value="" placeholder="C" required="">'+
	// 											'</label>'+
	// 										'</div>'+

	// 										'<div class="radio">'+
	// 											'<label>'+
	// 												'<input type="radio" name="jawaban">'+
	// 												'<input type="text" class="form-control" name="pilihD" value="" placeholder="D" required="">'+
	// 											'</label>'+
	// 										'</div>'+
	// 									'</div>'+
	// 									'</div>'+
										
	// 									'<div class="text-right">'+
	// 						               ' <button style="margin-top: 10px" type="button" class="btn btn-danger" onclick="removeMateri(this)">Hapus Materi</button>'+
	// 									'</div>'+
	// 									'</div>';
	// 	$("#box-materi").append(html);
	// }

	// function removeMateri(that){
	// 	$(that).parents('.form-group').remove();
	// }

	$("#form_soal").submit(function(e){
			e.preventDefault();
			var formData = new FormData( $("#form_soal")[0] );

			$.ajax({
				url: 		$("#form_soal").attr('action'),
				type: 	"POST",
				data:  		new FormData(this),
          		processData: false,
          		contentType: false,
				beforeSend: function(){
					blockMessage($('#form_soal'),'Please Wait , {{ ($type =="create") ? "Menambahkan Bab" : "Memperbarui Bab" }}','#fff');		
				}
			})
			.done(function(data){
				$('#form_soal').unblock();
				sweetAlert({
					title: 	((data.auth==false) ? "Opps!" : '{{ ($type =="create") ? "Bab Di Buatkan" : "Bab Di Perbarui" }}'),
					text: 	data.msg,
					type: 	((data.auth==false) ? "error" : "success"),
				},
				function(){
					if(data.auth!=false){
						redirect("{{base_url('superuser/soal/list/'.$bab->id_bab)}}");		
						return;
					}
				});
			})
			.fail(function() {
			    $('#form_soal').unblock();
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