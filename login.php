<?php

	//echo $_POST["email"];
	// Defineerime mingid muutujad
	$email_error ="";
	$password_error ="";
	$first_name_error ="";
	$last_name_error ="";
	$email1_error ="";
	$email2_error ="";
	$password1_error ="";
	$password2_error ="";
	
	
	// kontrollin, kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "jah";
		
		// kas e-post on t�hi
		if(empty($_POST["email"])) {
			
			// jah oli t�hi
			$email_error = "See v�li on kohustuslik";
		}
		if(empty($_PASSWORD["password"])) {
			
			$password_error = "See v�li on kohustuslik";
		}
		if(empty($_POST["first name"])) {
			
			$first_name_error ="See v�li on kohustuslik";
		}
		if(empty($_POST["last name"])) {
			
			$last_name_error ="See v�li on kohustuslik";
		}
		if(empty($_POST["email1"])) {
			
			$email1_error = "See v�li on kohustuslik";
		}
		if(empty($_POST["email2"])) {
			
			$email2_error = "See v�li on kohustuslik";
		}
		if(empty($_PASSWORD["password1"])) {
			
			$password1_error = "See v�li on kohustuslik";
		}
		if(empty($_PASSWORD["password2"])) {
			
			$password2_error = "See v�li on kohustuslik";
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
		<input name="email" type="email" placeholder="E-post" > <?php echo $email_error ?> <br><br>
		<input name="password" type="password" placeholder="Parool"> <?php echo $password_error ?> <br><br>
		<input type="submit" value="Logi sisse"> <br><br>
	</form>
	<h2>Create user</h2>
	<form action="login.php" method="post">
		<input name="first name" type="text" placeholder="Eesnimi" > <?php echo $first_name_error ?> <br><br>
		<input name="last name" type="text" placeholder="Perekonnanimi"> <?php echo $last_name_error ?> <br><br>
		<input name="email1" type="email" placeholder="E-post" > <?php echo $email1_error ?> <br><br>
		<input name="email2" type="email" placeholder="Korda e-posti" > <?php echo $email2_error ?> <br><br>
		<input name="password1" type="password" placeholder="Parool"> <?php echo $password1_error ?> <br><br>
		<input name="password2" type="password" placeholder="Korda parooli"> <?php echo $password2_error ?> <br><br>
		<input type="submit" value="Loo konto"> <br><br>
	</form>
	
	

<p>Esialgne idee - m�tlesin, et v�iksin teha sellise lehe, kuhu iga kasutaja saab sisestada, mis filmi ta viimati vaatas ning j�tta selle kohta kommentaari. Samuti v�iks seal saada teha ka enda top 20 vaadatud filmidest ning listi filmidest, mida tulevikus kindlasti vaadata soovib.</p>
	
	
</body>

</html>