<?php include 'config.php';?>
<?php

	$fname = $_POST['fname'];
	
	$lname = $_POST['lname'];
	
	$email = $_POST['email'];
	
	$password = $_POST['password'];
	
	$rpassword = $_POST['rpassword'];
	
	$mobile = $_POST['mobile'];
	
	$address1 = $_POST['address1'];
	
	$address2 = $_POST['address2'];
	
	if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($rpassword) || empty($mobile) || empty($address1) || empty($address2))
	{
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
				<strong>Warning!</strong>Please fill all the fields
			</div>
		";
		exit();
	}
	
	else
	{
		if(!preg_match("/^[a-zA-Z ]*$/",$fname)) //check first name
		{
			echo "
					<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
						<strong>Warning!</strong>First name is not valid
					</div>
				";
			exit();
		}
	
		if(!preg_match("/^[a-zA-Z ]*$/",$lname)) //check larst name
		{
			echo "
					<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
						<strong>Warning!</strong>last name is not valid
					</div>
				";
			exit();
		}
	
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) //check email
		{
			echo "
					<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
						<strong>Warning!</strong>email is not valid email
					</div>
				";
			
			exit();
		}
	
		if(strlen($password) < 9)//check password
		{
			echo "
					<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
						<strong>Warning!</strong>password is weak
					</div>
				";
			exit();
		}
		if($password != $rpassword)//check confirm password
		{
			echo "
					<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
						<strong>Warning!</strong>password not match
					</div>
				";
			exit();
		}
		if(!preg_match("/^[0-9]*$/",$mobile))//check mobile number 
		{
			echo "
					<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
						<strong>Warning!</strong>mobile is not valid
					</div>
				";
			exit();
		}
		if(!(strlen($mobile)==10))//check mobile number length
		{
			echo "
					<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
						<strong>Warning!</strong>mobile must be 10 digit
					</div>
				";
			exit();
		}
		
		
		//check for existing email address in database
		
		$check_email = mysql_query("SELECT user_id FROM user_info WHERE email = '$email'");
		
		if(mysql_num_rows($check_email) > 0)
		{
			echo "
					<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
						<strong>Sorry!</strong>Email Exists Please Try With another email address
					</div>
				";
			exit();
		}
		else
		{
			
			$insert = "INSERT INTO user_info(first_name,last_name,email,password,phone,address1,address2)
						VALUES('$fname','$lname','$email','$rpassword','$mobile','$address1','$address2')";
						
			$insert_run = mysql_query($insert);
			
			if(isset($insert_run))
			{
				echo "<div class='alert alert-success'>
				<a href='#' class='close' data-dismiss='alert' aria-label='Close'>&times;</a>
				<strong>Congratulation!</strong>you have registered successfully..
			</div>";
			}
		
		}
	}
?>