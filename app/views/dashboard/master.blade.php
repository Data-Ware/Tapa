<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>

	<!--Bootstrap CSS & JS-->
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	{{HTML::style("/images/css/style.css")}}


</head>
<body>

<div class="container">
@include('dashboard.nav')
<div class="container-fluid">
@include('dashboard.sidebar')


@yield('content')
</div>    <!-- /.container-fluid -->
</div>    <!-- /.container -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>

