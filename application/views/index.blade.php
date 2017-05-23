@extends('template')
@section('title')
NEXAPP
@endsection
@section('content')
<div class="main ">
	<a href="{{base_url()}}home/smp/materi" class="info">
		<div class="view second-effect">
			<img src="{{base_url()}}assets/images/1-01.png" />
	        <div class="mask">
				<button name="materi" class="btn btn-info" style="margin-top: -30px;margin-left:-10px;"><i class="glyphicon glyphicon-eye-open"> SMP</i></button>
			</div>
		</div>
	</a>

	<a href="{{base_url()}}home/sma/materi_sma" class="info">
		<div class="view second-effect">
			<img src="{{base_url()}}assets/images/2-01.png" />
			<div class="mask">
				<button class="btn btn-info" style="margin-top: -30px;margin-left:-32px;"><i class="glyphicon glyphicon-eye-open"> SMA / SMK</i></button>
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
			<img src="{{base_url()}}assets/images/4-01.png" />
			<div class="mask">
				<button class="btn btn-info" style="margin-top: -30px;margin-left:-30px;"><i class="glyphicon glyphicon-eye-open"> ICE BREAK</i></button>
			</div>
		</div>
	</a>

	<a href="{{base_url()}}home/tips" class="info">
		<div class="view second-effect">
			<img src="{{base_url()}}assets/images/5-01.png" />
			<div class="mask">
				<button class="btn btn-info" style="margin-top: -30px;margin-left:-30px;"><i class="glyphicon glyphicon-eye-open"> TIPS</i></button>
			</div>
		</div>
	</a>

	
</div>
               
@endsection
