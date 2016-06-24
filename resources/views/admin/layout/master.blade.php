<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Dashboard</title>


@include('admin.include.stylesheet')
</head>

<body>
	<section id="container" class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		@include('admin.include.header')
		@include('admin.include.sidebar')
		<!-- <section id="main-content">
			<section class="wrapper">
			</section>
		</section>
	</section> -->

	@yield('content')
	
@include('admin.include.javascript')
	
</body>

</html>
