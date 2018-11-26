$(function(){
	$("#submitForm").on("click", function(){
		$validation = validateForm();
		if($validation == true)
		{
			$.ajax(
			{	
				url: "models/saveContact.php",
				method: "POST",	
				data: 
				{
					strName: $("#name").val(),
					strEmail: $("#email").val(),
					strPhone: $("#phone").val(),
					strMessage: $("#description").val()
				},				
				success: function(result)
				{
					$(".alertMsg").css({
						display: "block",
						backgroundColor: "#cae9f3"
					}).html('Thank you! See you soon.');;
					$("#contactForm")[0].reset();
				},
				error: function(result)
				{
					$(".alertMsg").css({
						display: "block",
						backgroundColor: "#fad3e4"
					}).html('Sorry! Please try later again.');
				}
			});
		}
	return false;
	});
});