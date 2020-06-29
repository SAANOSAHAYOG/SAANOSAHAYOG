<!DOCTYPE html>
<html>
	<head>
		<title>SAANO SAHAYOG</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<!-- Stylesheet -->
    	<link rel="stylesheet" type="text/css" href="{{ url('public/saanosahayog/css/style.css') }}">
    	
	</head>
	@include('saanosahayog.includes.header')
	<body>
  			@yield('content')
		@include('saanosahayog.includes.footer')
	</body>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

</html>