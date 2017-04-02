<?php session_start();?>
<?php
	if(!isset($_SESSION['uid']))
	{
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Shopping Cart</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
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
					<li style="padding:10px;"><input type="text" name="search" id="search" class="form-control" size="40"></li>
					<li style="padding:10px;"><button id="search_btn" class="btn btn-primary">Search</button></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
						<div class="dropdown-menu" style="width:400px;">
							<div class="panel panel-success">
								<div class="panel-heading">
									<div class="row">
										<div class="col-md-3">Sr NO</div>
										<div class="col-md-3">Product Image</div>
										<div class="col-md-3">Product Name</div>
										<div class="col-md-3">Price</div>
									</div>
								</div>
								<div class="panel-body"></div>
								<div class="panel-footer"></div>
							</div>
						</div>
					</li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['name'];?></a>
						<ul class="dropdown-menu">
							<li><a href="#" style="text-decoration:none;color:blue;"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
							<li class="divider"></li>
							<li><a href="#" style="text-decoration:none;color:blue;">Change Password</a></li>
							<li class="divider"></li>
							<li><a href="logout.php" style="text-decoration:none;color:blue;">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!--menu bar end here-->
		<p><br></p>
		<p><br></p>
		<p><br></p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-2">
					<div id="get_category"></div>
					<!--<div class="nav nav-pills nav-stacked">
						<li class="active"><a href="#">Categories</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Categories</a></li>
					</div>-->
					<div id="get_brands"></div>
					<!--<div class="nav nav-pills nav-stacked">
						<li class="active"><a href="#">Brands</a></li>
						<li><a href="#">brand</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Categories</a></li>
						<li><a href="#">Categories</a></li>
					</div>-->
				</div>
				<div class="col-md-8">
					<div class="panel panel-info">
						<div class="panel-heading">Products</div>
						<div class="panel-body">
							<div id="get_products">
								<!-- here we get all products with jquery ajax method -->
							</div>
						</div>
						<div class="panel-footer">&copy;2017</div>
					</div>
				</div>
				<div class="col-md-1">
				</div>
			</div>
		</div>
	</body>
</html>