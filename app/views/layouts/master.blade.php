<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	@section('title')
		Veloscape - a Curating Cities project
	@show
	</title>
    @section('head')
    <link rel="shortcut icon" href=" {{ URL::asset('img/favicon.ico') }}">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet"></link>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>

    {{ HTML::style('css/style.css') }}
	@show
</head>
<body>
    @yield('header')
    @yield('body')
    @yield('footer')
</body>
</html>

