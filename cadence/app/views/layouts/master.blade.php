<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	@section('title')
		Veloscape - a Curating Cities project
	@show
	</title>
    @section('head')
    <link rel="shortcut icon" href=" {{ URL::asset('img/favicon.ico') }}">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/jquery.nouislider.min.css') }}
    {{ HTML::script('js/jquery.nouislider.all.min.js') }}
	@show
</head>
<body>
    @section('header')
    @show
    @yield('body')
    @yield('footer')
</body>
</html>

