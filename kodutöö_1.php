<?php
	
	//echo $_POST["email"];
	
	//Defineerime muutujad
	$email_error = "";
	$password_error = "";
	$create_email_error = "";
	$create_password_error = "";
	$create_name_error = "";
	$create_age_error = "";
	
	
	$email = "";
	$password = "";
	$create_email = "";
	$create_password = "";
	$create_age = "";
	$create_name = "";
	
	//kontrollin kas keegi vajutas nuppu
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_POST["login_nupp"])){
		
			//echo "jah";
		
			// kas e-post on tühi
			if( empty($_POST["email"]) ) {
			
			// jah oli tühi
				$email_error = "See väli on kohustuslik";
			
			}
		
			// kas parool on tühi
			if( empty($_POST["password"]) ) {
			
				// jah oli tühi
				$password_error = "See väli on kohustuslik";
			}

			
		}
		
		if(isset($_POST["create"])){
			if(empty($_POST["create_email"])){
				$create_email_error = "see väli on kohustuslik";
			}
		}
		if(isset($_POST["create"])){
			if(empty($_POST["create_password"])){
				$create_password_error = "see väli on kohustuslik";
			}
		}
		if(isset($_POST["create"])){
			if(empty($_POST["create_name"])){
				$create_name_error = "see väli on kohustuslik";
			}
		}
		if(isset($_POST["create"])){
			if(empty($_POST["create_age"])){
				$create_age_error = "see väli on kohustuslik";
			}
		}
		
		
	}
?>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	
	<h2>Login</h2>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<input name="email" type="email" placeholder="E-post" > <?php echo $email_error; ?><br><br>
		<input name="password" type="password" placeholder="Parool" > <?php echo $password_error; ?> <br><br>
		<input name="login_nupp" type="submit" value="Logi sisse" > <br><br>
	</form>
	
	
	<h2>Create user</h2>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
  	<input name="create_email" type="email" placeholder="E-post" value="<?php echo $create_email; ?>"> <?php echo $create_email_error; ?><br><br>
  	<input name="create_password" type="password" placeholder="Parool"> <?php echo $create_password_error; ?> <br><br>
	<input name="create_name" type="string" placeholder="eesnimi"> <?php echo $create_name_error; ?> <br><br>
	<input name="create_age" type="integer" placeholder="vanus"> <?php echo $create_age_error; ?> <br><br>
  	<input type="submit" name="create" value="Create user">
	</form>
	
	
	
</body>
</html>