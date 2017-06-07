

	function submitLogin(){
	  if(validateLogin("login")){

			$.post('login.php', $("#myLogin").serialize(), function(data){
				if(data == 0){

					$('#login_2').modal("hide");
					alertify.alert("<span class='icon_close_alt' style='vertical-align:middle; color:#e10000; '></span> Login Failed","Username or Password is incorrect",function(){
						$('#login_2').modal("show");
					});
				} else if (data == 1){
					window.location.reload();	
				}
			});
		}
	}
	function submitRegister(){
	  if(validateRegister("register")){

			$.post('register.php', $("#myRegister").serialize(), function(data){

				if(data == 0){
					$('#register').modal("hide");
					alertify.alert("Registration Failed", "Please try again",function(){
						$('#register').modal("show");
					});
				} else if (data == 1){
					$('#register').modal("hide");
					alertify.alert("Registration Success", "You have been successfully registered",function(){
						$('#login_2').modal("show");
					});	
				}
			});
		}
	}

	function validateLogin(){
			if($("#name").val() === ''){
				$("#name").focus();
				return false;
			}
			if($("#password").val() === ''){
				$("#password").focus();
				return false;
			}
			return true;
	}



	function validateRegister(){
			
			return true;
	}