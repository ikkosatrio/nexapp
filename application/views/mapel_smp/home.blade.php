@extends('/template')
@section('title')
NEXAPP
@endsection
@section('content')
<div class="main">
	<a href="" class="info">
		<div class="view second-effect">
			<img src="{{base_url()}}assets/images/bindo.jpg" />
	        <div class="mask">
				<button class="btn btn-info" style="margin-top: -30px;margin-left:-10px;"><i class="glyphicon glyphicon-eye-open"> BHS INDONESIA</i></button>
			</div>
		</div>
	</a>

	<a href="#" class="info">
		<div class="view second-effect">
			<img src="{{base_url()}}assets/images/math-smp.jpg" />
			<div class="mask">
				<button class="btn btn-info" style="margin-top: -30px;margin-left:-10px;"><i class="glyphicon glyphicon-eye-open"> MATEMATIKA</i></button>
			</div>
		</div>	
	</a>

	<a href="#" class="info">
		<div class="view second-effect">
			<img src="{{base_url()}}assets/images/english.jpg" />
			<div class="mask">
				<button class="btn btn-info" style="margin-top: -30px;margin-left:-10px;"><i class="glyphicon glyphicon-eye-open"> INGGRIS</i></button>
			</div>
		</div>
	</a>

	<a href="#" class="info">
		<div class="view second-effect">
			<img src="{{base_url()}}assets/images/ipa.png" />
			<div class="mask">
				 <button class="btn btn-info" style="margin-top: -30px;margin-left:-10px;"><i class="glyphicon glyphicon-eye-open"> IPA</i></button>
			</div>
		</div>
	</a>
</div>
@endsection