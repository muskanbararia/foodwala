<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>
<script src="assets/validate.js"></script>
<script type="text/javascript">

	function submitLogin(){
	  if(validateLogin("login")){

		// console.log("Hellpo");
		// console.log($("#myLogin").serialize());
			$.post('login.php', $("#myLogin").serialize(), function(data){
				if(data == 0){

					$('#login_2').modal("hide");
					alertify.alert("Login Failed","Username or Password is incorrect",function(){
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
				alertify.alert("You must provide a username");
				$("#name").focus();
				return false;
			}
			if($("#password").val() === ''){
				alertify.alert("You must provide a password");
				$("#password").focus();
				return false;
			}
			return true;
	}



	function validateRegister(){
			
			return true;
	}


	
</script>


