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
							<li class="active"><a href="datatable_basic.html">Jenjang</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Data Jenjang</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-heading">
							<a href="{{base_url('superuser/jenjang/create')}}"><button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-reading"></i></b> Tambah Jengjang Pendidikan</button></a>
						</div>
						<table class="table datatable-basic">
							<thead>
								<tr>
									<th>No</th>
									<th>Jengjang Pendidikan</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
							@foreach ($jenjang as $key => $result)
								<tr>
									<td>{{($key+1)}}</td>
									<td><a href="#">{{$result->nm_jenjang}}</a></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="{{base_url('superuser/jenjang/update/'.$result->id)}}"><i class="icon-pencil7"></i> Edit</a></li>
													<li><a href="javascript:void(0)" onclick="deleteIt(this)" data-url="{{base_url('superuser/jenjang/deleted/'.$result->id)}}"><i class="icon-trash"></i> Hapus</a></li>
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