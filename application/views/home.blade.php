@extends('template')
@section('title')
NEXAPP
@endsection
@section('content')
<div class="main ">
	<a href="{{base_url()}}home/smp" class="info">
		<div class="view second-effect">
			<img src="{{base_url()}}assets/images/signature.png" />
	        <div class="mask">
				<button class="btn btn-info" style="margin-top: -30px;margin-left:-10px;"><i class="glyphicon glyphicon-eye-open"> MATERI</i></button>
			</div>
		</div>
	</a>

	<a href="{{base_url()}}home/esq" class="info">
		<div class="view second-effect">
			<img src="{{base_url()}}assets/images/download.png" />
			<div class="mask">
				<button class="btn btn-info" style="margin-top: -30px;margin-left:-10px;"><i class="glyphicon glyphicon-eye-open"> ESQ</i></button>
			</div>
		</div>	
	</a>

	<a href="{{base_url()}}home/ice" class="info">
		<div class="view second-effect">
			<img src="{{base_url()}}assets/images/ice_break.jpg" />
			<div class="mask">
				<button class="btn btn-info" style="margin-top: -30px;margin-left:-10px;"><i class="glyphicon glyphicon-eye-open"> ICE BREAK</i></button>
			</div>
		</div>
	</a>

	<a href="#" class="info">
		<div class="view second-effect">
			<img src="{{base_url()}}assets/images/Exam-Plus.png" />
			<div class="mask">
				<button class="btn btn-info" style="margin-top: -30px;margin-left:-10px;"><i class="glyphicon glyphicon-eye-open"> EXAM SIMULATION</i></button>
			</div>
		</div>
	</a>
</div>
               
@endsection
