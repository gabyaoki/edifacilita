$(function(){
	$("#subMorador").on("click", function(){
		$validation = validateForm();
		if($validation == true)
		{
			$.ajax(
			{	
				url: "models/saveMorador.php",
				method: "POST",	
				data: 
				{
					name: $("#name").val(),
					email: $("#email").val(),
					phone: $("#phone").val(),
					phone2: $("#phone2").val(),
					password: $("#password").val(),
					dob: $("#dob").val(),
					code: $("#aCode").val()
				},				
				success: function(result)
				{
					if(result==true) {
						window.location = 'confirm.php';
					} else {
						window.location = 'formMorador.php?error=true';
					}
				},
				error: function(a, b, error)
				{
					console.log(error);
				}
			});
		}
	return false;
	});


	$("#subCondo").on("click", function(){
		$validation = validateForm();
		const checkReg = $("#checkReg").is(':checked');
		if($validation == true && checkReg)
		{
			$.ajax(
			{	
				url: "models/saveCondo.php",
				method: "POST",	
				data: 
				{
					name: $("#name").val(),
					endereco: $("#endereco").val(),
					email: $("#email").val(),
					sindico: $("#sindico").val(),
					phone: $("#phone").val(),
					phone2: $("#phone2").val(),
					password: $("#password").val()
				},				
				success: function(result)
				{
					if(result==true) {
						window.location = 'formSindico.php';
					}
				},
				error: function(a, b, error)
				{
					console.log(error);
				}
			});
		}
	return false;
	});
    
    $("#subSindico").on("click", function(){
		$validation = validateForm();
		if($validation == true)
		{
			$.ajax(
			{	
				url: "models/saveSindico.php",
				method: "POST",	
				data: 
				{
					name: $("#name").val(),
					email: $("#email").val(),
					phone: $("#phone").val(),
					phone2: $("#phone2").val(),
					password: $("#password").val(),
					dob: $("#dob").val()
				},				
				success: function(result)
				{
					if(result==true) {
						window.location = 'formCondoPay.php';
					} else {
						window.location = 'formMorador.php?error=true';
					}
				},
				error: function(a, b, error)
				{
					console.log(error);
				}
			});
		}
	return false;
	});

	$("#subGratis").on("click", function(){
		$.ajax(
		{	
			url: "models/saveCondoPay.php",
			method: "POST",	
			data: 
			{
				plan: $("#plan").val(),
			},				
			success: function(result)
			{
				if(result==true) {
					window.location = 'confirmCondo.php';
				} else {
					console.log(result);
				}
			},
			error: function(a, b, error)
			{
				console.log(error);
			}
		});
	return false;
	});
    
    $("#subPremium").on("click", function(){
		$.ajax(
		{	
			url: "models/saveCondoPay.php",
			method: "POST",	
			data: 
			{
				plan: $("#plan2").val(),
			},				
			success: function(result)
			{
				if(result==true) {
					window.location = 'confirmCondo.php';
				} else {
					console.log(result);
				}
			},
			error: function(a, b, error)
			{
				console.log(error);
			}
		});
	return false;
	});
});