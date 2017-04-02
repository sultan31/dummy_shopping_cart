$(document).ready(function(){
	
	$("#signup").click(function(event){
		
		event.preventDefault();
		
		//alert("welcome to jalgaon");
		
		//console.log(101);
		
		$.ajax({
			
			url:"register.php",
			
			method:"post",
			
			data:$("#signup_form").serialize(),
			
			success:function(data)
			{
				$("#alert_msg").html(data);
			}
		});
		clearinputs();
		
		function clearinputs()
		{
			$("#signup_form").serialize('');
		}
	});
	
	/*add to cart goes hare*/
	
	$("body").delegate("#p","click",function(event){
		
		event.preventDefault();
		
		var p_id = $(this).attr("pid");
		
		$.ajax({
			
			url:"action.php",
			
			method:"post",
			
			data:{addTocart:1,product_id:p_id},
			
			success:function()
			{
				
			}
		});
	});
});