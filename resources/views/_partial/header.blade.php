<nav class="navbar">
	<div class="jumbotron">
		<div class="container text-center">
			@if (Auth::guest())
				<h2>Register dengan social media</h2>
					<button onclick="window.location='/login/facebook';" class="btn btn-block btn-social btn-facebook">
						<i class="fa fa-facebook"></i>Sign up with Facebook
					</button>
					<button onclick="window.location='/login/twitter';" class="btn btn-block btn-social btn-twitter">
						<i class="fa fa-twitter"></i>Sign up with Twitter
					</button>
				</div>
			@else
				<h2>SARDUMOMENT</h2>
				<h5>Upload Fotomu Bersama sari gandum</h5>
				<strong>menangkan emas berlian beserta isi dunia</strong>
				<br>
				<br>
				<a href="#" class="btn btn-primary btn-lg">
					<span class="glyphicon glyphicon-upload">
					</span>
					Upload Foto mu sekarang!
				</a>
			@endif
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="btn-group" role="group">
				<button type="button" class="btn btn-default">Gallery</button>
				<button type="button" class="btn btn-default">Mekanisme</button>
				<button type="button" class="btn btn-default">Syarat & Ketentuan</button>
			</div>
			@if(Auth::check())
				<div class="btn-group pull-right" role="group" aria-label="...">
					<img src="{{Auth::user()->avatar}}" alt="..." class="img">
					<button type="button pull-right" class="btn btn-default">{{Auth::user()->nama}}</button>
				</div>
			@endif
			<div class="span"></div>
		</div>
</nav>

