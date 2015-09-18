<?php
	
	//echo $_POST["username"]; 
	$username_error ="";
	$email_error ="";
	$password_error ="";
	$firstname_error ="";
	$lastname_error ="";
	$tel_error ="";
	$logemail_error ="";
	$logpassword_error ="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if( isset($_POST["creat"])){
		
		//echo "jah";
		
		
	
	if(empty($_POST["username"])){
		
		$username_error = "See väli on kohustuslik ";
		
		
	}
		if(empty($_POST["email"])){
		
		$email_error = "See väli on kohustuslik ";
		
		
	}
				if(empty($_POST["password"])){
		
		$password_error = "See väli on kohustuslik ";
		
		
	}
				if(empty($_POST["firstname"])){
		
		$firstname_error = "See väli on kohustuslik ";
		
		
	}
				if(empty($_POST["lastname"])){
		
		$lastname_error = "See väli on kohustuslik ";
		
		
	}
				if(empty($_POST["tel"])){
		
		$tel_error = "See väli on kohustuslik ";
		
		
	}
	
	
	}elseif( isset($_POST["login"])){
		
		
		if(empty($_POST["email"])){
		
		$logemail_error = "See väli on kohustuslik ";
		
		
	}
	
	if(empty($_POST["password"])){
		
		$logpassword_error = "See väli on kohustuslik ";
		
		
	}
		
		
		
		
		
	}
	
		
	}
?>
<html>
	<head>
		<title>Kasutaja loomis vorm</title>
	</head>

	<body>
		<h1>Kasutaja loomis vorm</h1>
		
		<form action="login.php" method="post">
			<input name="username" type="text" placeholder="Kasutajanimi" pattern=".{5,10}" required title="5 to 10 märki"><?php  echo $username_error; ?><br /><br />
			<input name="email" type="email" placeholder="E-mail"><?php  echo $email_error; ?><br /><br />
			<input name="firstname" type="text" placeholder="Eesnimi"><?php  echo $firstname_error; ?><br /><br />
			<input name="lastname" type="text" placeholder="Perekonnanimi"><?php  echo $lastname_error; ?><br /><br />
			<input name="tel" type="tel" pattern="[0-9]{10}" placeholder="Telefoni number"><?php  echo $tel_error; ?><br /><br />
			<input type="text" placeholder="Amet"><br /><br />
			<input name="password" type="password" placeholder="Password" pattern=".{8,16}" required title="8 kuni 16 märki"><?php  echo $password_error; ?><br /><br />
			<input type="submit" value="Registreeru">
		</form>
		
		<h1>Login</h1>
		
		<form action="login.php" method="post">
			<input name="email" type="email" placeholder="E-post" > <?php echo $logemail_error; ?><br><br>
			<input name="password" type="password" placeholder="Parool" > <?php echo $logpassword_error; ?> <br><br>
			<input type="submit" value="Logi sisse" name="login"> <br><br>
		</form>
		
		
	</body>

</html>