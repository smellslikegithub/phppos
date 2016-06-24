<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>

	@include('includes.css')

	@include('includes.javascripts')

	

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	@include('includes.navbar')	

	@include('includes.sidebar')
			
	@yield('content')


</body>

</html>
