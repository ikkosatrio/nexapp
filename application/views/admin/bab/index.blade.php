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
							<li class="active"><a href="datatable_basic.html">Bab</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Data Bab</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-heading">
							<a href="{{base_url('superuser/bab/create')}}"><button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-reading"></i></b> Tambah Bab</button></a>
						</div>
						<table class="table datatable-basic">
							<thead>
								<tr>
									<th style="width: 10%">No</th>
									<th style="width: 20%">Nama Bab</th>
									<th>Mata Pelajaran - Jenjang</th>
									<th style="width: 10%" class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
							@foreach ($bab as $key => $result)
								<tr>
									<td>{{($key+1)}}</td>
									<td><a href="{{base_url('superuser/bab/update/'.$result->id_bab)}}">{{$result->nm_bab}}</a></td>
									<td>{{$result->nm_mapel}} - {{$result->nm_jenjang}}</td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>
												{{-- {{var_dump($result)}} --}}
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="{{base_url('superuser/bab/update/'.$result->id_bab)}}"><i class="icon-pencil7"></i> Edit</a></li>
													<li><a href="javascript:void(0)" onclick="deleteIt(this)" data-url="{{base_url('superuser/bab/deleted/'.$result->id_bab)}}"><i class="icon-trash"></i> Hapus</a></li>
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