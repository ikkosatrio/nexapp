@extends('admin.template')
@section('title')
Dashboard - Administrasi
@endsection
@section('corejs')
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/datatables_basic.js"></script>
@endsection
@section('content')
	<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active"><a href="datatable_basic.html">Mapel</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Data Mapel</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-heading">
							<a href="{{base_url('superuser/mapel/create')}}"><button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-reading"></i></b> Tambah Mata Pelajaran</button></a>
						</div>
						<table class="table datatable-basic">
							<thead>
								<tr>
									<th>No</th>
									<th>Mata Pelajaran</th>
									<th>Jenjang</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
							@foreach ($mapel as $key => $result)
								<tr>
									<td>{{($key+1)}}</td>
									<td><a href="{{base_url('superuser/mapel/update/'.$result->id_mapel)}}">{{$result->nm_mapel}}</a></td>
									<td>{{$result->nm_jenjang}}</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>
												{{-- {{var_dump($result)}} --}}
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="{{base_url('superuser/mapel/update/'.$result->id_mapel)}}"><i class="icon-pencil7"></i> Edit</a></li>
													<li><a href="javascript:void(0)" onclick="deleteIt(this)" data-url="{{base_url('superuser/mapel/deleted/'.$result->id_mapel)}}"><i class="icon-trash"></i> Hapus</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->					

				</div>
				<!-- /content area -->

			</div>
@endsection