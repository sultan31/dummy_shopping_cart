<?php session_start();?>
<?php include 'config.php';?>
<?php
	//get categories from database
	if(isset($_POST['category']))
	{
		$cat_query = mysql_query("SELECT * FROM categories");
		
		if(mysql_num_rows($cat_query)>0)
		{
			echo "<div class='nav nav-pills nav-stacked'>
					<li class='active'><a href='#'>Categories</a></li>";
			while($cat_row = mysql_fetch_array($cat_query))
			{
				$cid =$cat_row['cat_id'];
				$ctitle =$cat_row['cat_title'];
				echo "<li><a href='#' class='cats' id='$cid'>$ctitle</a></li>";
			}
			echo "<div>";
		}
	}
	
	//get brands from database
	if(isset($_POST['brand']))
	{
		$brand_query = mysql_query("SELECT * FROM brands");
		
		if(mysql_num_rows($brand_query)>0)
		{
			echo "<div class='nav nav-pills nav-stacked'>
					<li class='active'><a href='#'>Brands</a></li>";
			while($brand_row = mysql_fetch_array($brand_query))
			{
				$brand_id =$brand_row['brand_id'];
				$brand_title =$brand_row['brand_title'];
				echo "<li><a href='#' class='brands' id='$brand_id'>$brand_title</a></li>";
			}
			echo "<div>";
		}
	}
	
	//get products from database
	if(isset($_POST['product']))
	{
		$product_query = mysql_query("SELECT * FROM products ORDER BY RAND() LIMIT 0,9");
		
		if(mysql_num_rows($product_query)>0)
		{
			while($product_row = mysql_fetch_array($product_query))
			{
				$pid = $product_row['product_id'];
				$product_cat = $product_row['product_cat'];
				$product_brand = $product_row['product_brand'];
				$product_title = $product_row['product_title'];
				$product_price = $product_row['product_price'];
				$product_image = $product_row['product_image'];
				
				echo "
					<div class='col-md-4'>
								<div class='panel panel-info'>
									<div class='panel-heading'>$product_title</div>
									<div class='panel-body'><img src='images/$product_image' width='200' height='150'></div>
									<div class='panel-heading'>$product_price
										<button pid = '$pid' id='p' style='float:right;' class='btn btn-danger btn-xs'>AddToCart</div>
								</div>
					</div>
				";
			}
		}
	}
	
	/* get products categories wise or brands wise or search wise*/
	
	if(isset($_POST['get_selected_category']) || isset($_POST['get_selected_brand']) || isset($_POST['search']))
	{
		
		if(isset($_POST['get_selected_category']))
		{
			
			$id = $_POST['category_id'];
		
			$sel = mysql_query("SELECT * FROM products WHERE product_cat = '$id'");
		}
		else if(isset($_POST['get_selected_brand']))
		{
			$id = $_POST['brand_id'];
			
			$sel = mysql_query("SELECT * FROM products WHERE product_brand='$id'");
		}
		else
		{
			$keyword = $_POST['keyword'];
			
			$sel = mysql_query("SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'");
		}
		
		if(mysql_num_rows($sel)>0)
		{
			while($product_row = mysql_fetch_array($sel))
			{
				$pid = $product_row['product_id'];
				$product_cat = $product_row['product_cat'];
				$product_brand = $product_row['product_brand'];
				$product_title = $product_row['product_title'];
				$product_price = $product_row['product_price'];
				$product_image = $product_row['product_image'];
				
				echo "
					<div class='col-md-4'>
								<div class='panel panel-info'>
									<div class='panel-heading'>$product_title</div>
									<div class='panel-body'><img src='images/$product_image' width='200' height='150'></div>
									<div class='panel-heading'>$product_price
										<button pid = '$pid' id='p' style='float:right;' class='btn btn-danger btn-xs' >AddToCart</div>
								</div>
							</div>
				";
			}
		}
	}
	
	/*add to cart here*/
	
	if(isset($_POST['addTocart']))
	{
		$product_id = $_POST['product_id'];
	}