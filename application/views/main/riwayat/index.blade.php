@extends('main.template')
@section('js')
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/js/pages/datatables_basic.js"></script>
@endsection
@section('content')
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Datatables</span> - Basic</h4>

				<ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="{{base_url('main')}}">Home</a></li>
					<li><a href="#">Riwayat</a></li>
				</ul>
			</div>

			{{-- <div class="heading-elements">
				<div class="heading-btn-group">
					<a href="#" class="btn btn-link btn-float has-text text-size-small"><i class="icon-bars-alt text-indigo-400"></i><span>Statistics</span></a>
					<a href="#" class="btn btn-link btn-float has-text text-size-small"><i class="icon-calculator text-indigo-400"></i> <span>Invoices</span></a>
					<a href="#" class="btn btn-link btn-float has-text text-size-small"><i class="icon-calendar5 text-indigo-400"></i> <span>Schedule</span></a>
				</div>
			</div> --}}
		</div>
	</div>

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Basic datatable -->
				<div class="panel panel-flat">
					<div class="panel-heading">
						<h5 class="panel-title">Riwayat</h5>
						<div class="heading-elements">
							<ul class="icons-list">
		                		<li><a data-action="collapse"></a></li>
		                		<li><a data-action="reload"></a></li>
		                		<li><a data-action="close"></a></li>
		                	</ul>
	                	</div>
					</div>

					<div class="panel-body">
						Riwayat Hasil Belajar Anda
					</div>

					<table class="table datatable-basic">
						<thead>
							<tr>
								<th>Mata Pelajaran</th>
								<th>Jenis</th>
								<th>Hasil</th>
								<th>Tanggal</th>
							</tr>
						</thead>
						<tbody>
						@foreach ($riwayat as $result)
							<tr>
								<td>{{$result->nm_mapel}}</td>
								<td><span class="label label-success">{{$result->jenis}}</span></td>
								<td>{{$result->hasil}}</td>
								<td>{{tgl_indo($result->tgl)}}</td>
							</tr>
						@endforeach

						</tbody>
					</table>
				</div>
				<!-- /basic datatable -->
			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
@endsection