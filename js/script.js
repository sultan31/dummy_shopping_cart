$(document).ready(function(){
	cat();
	brands();
	products();
	/* function for requesting categories*/
	function cat()
	{
		$.ajax({
			
			url:"action.php",
			
			method:"POST",
			
			data:{category:1},
			
			success:function(data)
			{
				$("#get_category").html(data);
			}
		});
	}
	
	/* function for requesting brands*/
	function brands()
	{
		$.ajax({
			
			url:"action.php",
			
			method:"POST",
			
			data:{brand:1},
			
			success:function(data)
			{
				$("#get_brands").html(data);
			}
		});
	}
	
	/* function for getting product from database*/
	
	function products()
	{
		$.ajax({
			
			url:"action.php",
			
			method:"POST",
			
			data:{product:1},
			
			success:function(data)
			{
				$("#get_products").html(data);
			}
		});
	}
	
	
	/* display here products category wise*/
	$("body").delegate(".cats","click",function(event){
		
		event.preventDefault();
		
		var cat_id = $(this).attr('id');
		
		$.ajax({
			
			url:"action.php",
			
			method:"post",
			
			data:{get_selected_category:1,category_id:cat_id},
			
			success:function(data)
			{
				$("#get_products").html(data);
			}
		});
	});
	
	/* display here products brands wise*/
	
	$("body").delegate(".brands","click",function(event){
		
		event.preventDefault();
		
		var bid = $(this).attr('id');
		
		$.ajax({
			
			url:"action.php",
			
			method:"post",
			
			data:{get_selected_brand:1,brand_id:bid},
			
			success:function(data)
			{
				$("#get_products").html(data);
			}
		});
	});
	
	
	/* display products search wise*/
	
	$("#search_btn").click(function(){
		
		var key = $("#search").val();
		if(key!="")
		{
			$.ajax({
			
				url:"action.php",
			
				method:"post",
			
				data:{search:1,keyword:key},
			
				success:function(data)
				{
					$("#get_products").html(data);
				}
			});
		}
		clearInputs();
		function clearInputs()
		{
			$("#search").val("");
		}
	});
	
	
	$("#login").click(function(event){
		
		event.preventDefault();
		
		var email = $("#email").val();
		
		var pass = $("#password").val();
		
		$.ajax({
			
			url:"login.php",
			
			method:"post",
			
			data:{user:1,user_email:email,user_pass:pass},
			
			success:function(data)
			{
				if(data == "you are login now")
				{
					window.location.href = "profile.php";
				}
			}
		});
	});
		
		
	
});