<?php
		
	// muuutujad errorite jaoks
	$email_error = "";
	$password_error = "";
	$create_email_error = "";
	$create_password_error = "";
	$create_fname_error = "";
	$create_lname_error = "";
	$create_age_error = "";
	// muutujad väärtuste jaoks
	$email = "";
	$password = "";
	$create_email = "";
	$create_password = "";
	$create_fname = "";
	$create_lname = "";
	$create_age = "";
	
	//Kontrollin kas keegi vajutas login
	if(isset($_POST["login"])){
		if ( empty($_POST["email"]) ) {
			$email_error = "See väli on kohustuslik";
		}
		if ( empty($_POST["password"]) ) {
			$password_error = "See väli on kohustuslik";
		}
			
	}		
	
	//Kontrollin kas keegi vajutas registreeru
	if(isset($_POST["create"])){
		if ( empty($_POST["create_fname"]) ) {
			$create_fname_error = "See väli on kohustuslik";
		}
		
		if ( empty($_POST["create_lname"]) ) {
			$create_lname_error = "See väli on kohustuslik";
		}
		
		if ( empty($_POST["create_age"]) ) {
			$create_age_error = "See väli on kohustuslik";
		}else{
			if(strlen($_POST["create_age"]) != int) {
				$create_age_error = "Peab olema number!";
			}
		}
		
		if ( empty($_POST["create_email"]) ) {
			$create_email_error = "See väli on kohustuslik";
		}
		
		if ( empty($_POST["create_password"]) ) {
			$create_password_error = "See väli on kohustuslik";
		} else {
			if(strlen($_POST["create_password"]) < 8) {
				$create_password_error = "Peab olema vähemalt 8 tähemärki pikk!";
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
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
	<input name="email" type="email" placeholder="E-post"> <?php echo $email_error;?> <br> <br> 
	<input name="password" type="password" placeholder="Parool"> <?php echo $password_error;?> <br> <br> 
	<input type="submit" value="Logi sisse"> <br> <br>
	</form>
	
	
	
	<h2>Create user</h2>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
	<input name="create_fname" type="text" placeholder="Eesnimi" value="<?php echo $create_fname; ?>"> <?php echo $create_fname_error; ?><br><br>
	<input name="create_lname" type="text" placeholder="Perekonnanimi" value="<?php echo $create_lname; ?>"> <?php echo $create_lname_error; ?><br><br>
	<input name="create_age" type="int" placeholder="Vanus" value="<?php echo $create_age; ?>"> <?php echo $create_age_error; ?><br><br>


	<input name="create_email" type="email" placeholder="E-post" value="<?php echo $create_email; ?>"> <?php echo $create_email_error; ?><br><br>
  	<input name="create_password" type="password" placeholder="Parool"> <?php echo $create_password_error; ?> <br><br>
  	<input type="submit" value="Registreeru">
	</form>
</body>

</html>