<?php
	
	//echo $_POST["username"]; 

	$username_error ="";
	$email_error ="";
	$password_error ="";
	$firstname_error ="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
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
		
	}

?>
<html>
	<head>
		<title>Top Kek</title>
	</head>

	<body>
		<h1>Top Kek</h1>
		
		<form action="login.php" method="post">
			<input name="username" type="text" placeholder="Nimi"><?php  echo $username_error; ?><br /><br />
			<input name="email" type="email" placeholder="E-mail"><?php  echo $email_error; ?><br /><br />
			<input name="firstname" type="text" placeholder="Eesnimi"><?php  echo $firstname_error; ?><br /><br />
			<input name="password" type="password" placeholder="Password"><?php  echo $password_error; ?><br /><br />
			<input type="submit" value="topkek">
		</form>
	</body>

</html>