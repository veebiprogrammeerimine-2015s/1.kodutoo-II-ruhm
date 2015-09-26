

<?php
	
	//ma tahaksin tegeleda kunstitarbete e-poega, kus on registreerimissüsteem, 
	//tarbete nimikiri, iga tarbete kirjeldus, on võimalik tarbed tellida, ja tellimise vorm
	
	
	//Defineerime muutujad vigased
	$email_error = "";
	$password_error = "";
	$createuserlogin_error = "";
	$createuseremail_error = "";
	$createuserpassword_error = "";
	$createuseradress_error = "";
	$createusertelephone_error = "";
	//Defineerime muutujad õiged
	$email = "";
	$password = "";
	$createuserlogin = "";
	$createuseremail = "";
	$createuserpassword = "";
	$createuseradress = "";
	$createusertelephone = "";
	
	
	//kontrollin kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		//kas epost on tühi
		if(empty($_POST["email"])){
			$email_error = "See väli on kohustuslik";
		}
		
		
		//kas parool on tühi
		if(empty($_POST["password"])){
			$password_error = "See väli on kohustuslik";
		}
		
		
		//kas kasutajanime loomine on tühi
		if(empty($_POST["create_login"])){
			$createuserlogin_error = "See väli on kohustuslik";
		}
	
		//kas emaili loomine on tühi
		if(empty($_POST["create_email"])){
			$createuseremail_error = "See väli on kohustuslik";
		}
	
		
		//kas parooli loomine on tühi
		if(empty($_POST["create_password"])){
			$createuserpassword_error = "See väli on kohustuslik";
		}
	
		
		//kas aadressi loomine on tühi
		if(empty($_POST["create_adress"])){
			$createuseradress_error = "See väli on kohustuslik";
		}
	
	
		//kas telefoni loomine on tühi
		if(empty($_POST["create_telephone"])){
			$createusertelephone_error = "See väli on kohustuslik";
		}
		
		
	}
?>
<html>
<head>
	<title>Login page</title>
</head>

<body>
	<h2>Login</h2>
	<form action="login.php" method="post">
		<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?><br><br>
		<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?><br><br>
		<input type="submit" value="Logi sisse"><br><br>
	
	<h2>Create User</h2>
	<form action="login.php" method="post">
		<input name="create_login" type="text" placeholder="Kasutaja nimi"> <?php echo $createuserlogin_error; ?><br><br>
		<input name="create_email" type="email" placeholder="E-post"> <?php echo $createuseremail_error; ?><br><br>
		<input name="create_password" type="password" placeholder="Parool"> <?php echo $createuserpassword_error; ?><br><br>
		<input name="create_adress" type="text" placeholder="Aadress"> <?php echo $createuseradress_error; ?><br><br>
		<input name="create_telephone" type="telephone" placeholder="Telefon"> <?php echo $createusertelephone_error; ?><br><br>
		<input type="submit" value="Registreeri"><br><br>
	
	

</body>

</html>