<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Laravel</title>

	{!! HTML::style('css/app.css') !!}
	{!! HTML::style('css/font-awesome.min.css')!!}
	{!! HTML::style('css/bootstrap-social.css') !!}

	<!-- Fonts -->
	{!! HTML::style('//fonts.googleapis.com/css?family=Roboto:400,300') !!}
	@yield('head')
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	@yield('header')

	@yield('content')

	@yield('section')
	
	@yield('footer')


	<!-- Scripts -->
	{!! HTML::script('js/jquery.min.js')!!}
	{!! HTML::script('js/bootstrap.min.js') !!}
	@yield('bottom')
</body>
</html>
