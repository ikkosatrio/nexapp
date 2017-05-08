@extends('/template')
@section('title')
NEXAPP
@endsection
@section('content')
<div class="main">
	<a href="{{base_url()}}home/smp/bindo" class="info">
		<div class="view second-effect">
			<img src="{{base_url()}}assets/images/bindo.jpg" />
	        <div class="mask">
				<button class="btn btn-info" name="bindo" style="margin-top: -30px;margin-left:-50px;"><i class="glyphicon glyphicon-eye-open"> BHS INDONESIA</i></button>
			</div>
		</div>
	</a>

	<a href="{{base_url()}}home/smp/matematika" class="info">
		<div class="view second-effect">
			<img src="{{base_url()}}assets/images/math-smp.jpg" />
			<div class="mask">
				<button name="MTK" class="btn btn-info" style="margin-top: -30px;margin-left:-35px;"><i class="glyphicon glyphicon-eye-open"> MATEMATIKA</i></button>
			</div>
		</div>	
	</a>

	<a href="{{base_url()}}home/smp/bing" class="info">
		<div class="view second-effect">
			<img src="{{base_url()}}assets/images/english.jpg" />
			<div class="mask">
				<button name="bing" class="btn btn-info" style="margin-top: -30px;margin-left:-40px;"><i class="glyphicon glyphicon-eye-open"> BHS INGGRIS</i></button>
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

	<a href="#" class="info">
		<div class="view second-effect">
			<img src="{{base_url()}}assets/images/Exam-plus.png" />
			<div class="mask">
				 <button class="btn btn-info" style="margin-top: -30px;margin-left:-60px;"><i class="glyphicon glyphicon-eye-open"> EXAM SIMULATION</i></button>
			</div>
		</div>
	</a>
</div>
@endsection