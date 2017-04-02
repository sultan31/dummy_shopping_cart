<?php session_start();?>
<?php include 'config.php';?>
<?php
	//user login script goes here
	
	if(isset($_POST['user']))
	{
		$email = mysql_real_escape_string($_POST['user_email']);
		
		$password = mysql_real_escape_string($_POST['user_pass']);
		
		$select = "SELECT * FROM user_info WHERE email LIKE '%$email%' AND password LIKE '%$password%'";
		
		$run_select = mysql_query($select);
		
		$count = mysql_num_rows($run_select);
		
		if($count == 1)
		{
			$row = mysql_fetch_array($run_select);
			
			$_SESSION['uid'] = $row['user_id'];
				
			$_SESSION['name'] = $row['first_name'];
			
			echo "you are login now";
		}
	}
?>