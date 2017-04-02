<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Shopping Cart</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!--<script type="text/javascript" src="js/script.js"></script>-->
		<script type="text/javascript" src="js/signup.js"></script>
		<style type="text/css">

		</style>
	</head>
	<body>
		<!--bootstrap menu bar-->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand" id="logo">Shopping Cart</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
				</ul>
			</div>
		</div>
		<p><br></p>
		<p><br></p>
		<p><br></p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8" id="alert_msg">
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="panel panel-primary">
						<div class="panel-heading">Customer Sign Up Form</div>
						<form id="signup_form" method="post">
						<div class="panel-body">
							 <div class="row">
								<div class="col-md-6">
									<label for="fname">First Name</label>
									<input type="text" name="fname" id="fname" class="form-control">
								</div>
								<div class="col-md-6">
									<label for="lname">Last Name</label>
									<input type="text" name="lname" id="lname" class="form-control">
								</div>
							 </div>
							 <div class="row">
								<div class="col-md-6">
									<label for="email">Email</label>
									<input type="email" name="email" id="email" class="form-control">
								</div>
								<div class="col-md-6">
									<label for="password">Password</label>
									<input type="password" name="password" id="password" class="form-control">
								</div>
							 </div>
							 <div class="row">
								<div class="col-md-6">
									<label for="rpassword">Re-enter Password</label>
									<input type="password" name="rpassword" id="rpassword" class="form-control">
								</div>
								<div class="col-md-6">
									<label for="mobile">Mobile</label>
									<input type="text" name="mobile" id="mobile" class="form-control">
								</div>
							 </div>
							 <div class="row">
								<div class="col-md-6">
									<label for="address1">Address Line1</label>
									<input type="text" name="address1" id="address1" class="form-control">
								</div>
								<div class="col-md-6">
									<label for="address2">Address Line2</label>
									<input type="text" name="address2" id="address2" class="form-control">
								</div>
							 </div>
						</div>
						<div class="panel-footer"><center><button id="signup" class="btn btn-success btn-md">Sign Up</button></center></div>
						</form>
					</div>
				</div>
				<div class="col-md-2" id="demo"></div>
			</div>
		</div>
	</body>
</html>