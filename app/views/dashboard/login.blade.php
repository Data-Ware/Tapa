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

			@if($errors->any())
			<div class="alert alert-warning alert-dismissable">
				<button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{ implode('', $errors->all('<li class="error">:message</li>')) }}
			</div>
			@endif

			<div class="row well col-md-4 col-md-offset-4" style="margin-top:20px;">
				<form class="form-horizontal" method="POST">
					<fieldset>
						<legend>Please login</legend>
						<div class="control-group">
							<label class="control-label" for="username">User Name</label>
							<div class="controls">
								<input id="username" name="username" type="text">
							{{--	<p class="help-block">Please enter registration name.</p>--}}
							</div>
						</div>


						<div class="control-group">
							<label class="control-lable" for="password">Password</label>
							<div class="controls">
								<input id="password" name="password" type="password">
								<p class="help-block">Please enter password</p>
							</div>
							
						</div>
					</fieldset>

					<div class="form-actions">
						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span> Login</button>
					</div>
				</form>

			</div>
		</div>    <!-- /.container-fluid -->
	</div>    <!-- /.container -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>

