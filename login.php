<?php

	//echo $_POST["email"];

//defineerime muutujad
	$email_error = "";
	$password_error = "";
	$first_name_error = "";
	$last_name_error = "";
	
	//kontrollin kas keegi vajutas nuppu
	if($_SERVER ["REQUEST_METHOD"] == "POST") {
		
		
		
		//kas e-post on tyhi
		if( empty($_POST["email"])) {
			//jah oli tyhi
			$email_error = "See väli on kohustuslik";
			
		}
		if( empty($_POST["password"])) {
			//jah oli tyhi
			$password_error = "See väli on kohustuslik";
			
		}
		
		if( empty($_POST["first name"])) {
			//jah oli tyhi
			$first_name_error = "See väli on kohustuslik";
			
		}
		
		if( empty($_POST["last name"])) {
			//jah oli tyhi
			$last_name_error = "See väli on kohustuslik";
			
		}
	}
	
?>
<html>
<head>
	<title> Login page</title>
</head>
<body>
	<h2>Login</h2>
	<form action="login.php" method="post">
	<input name="email" type="email" placeholder="E-post"><?php echo $email_error ?> <br><br>
	<input name="password"type="password" placeholder="Parool" ><?php echo $password_error ?> <br><br>
	<input type="submit" value="Logi sisse"> <br><br>
	</form>
	<h2> Konto loomine</h2>
	<form action="login.php" method="post" >
	<input name="first_name" type="text" placeholder="Eesnimi"><?php echo $first_name_error ?> <br><br>
	<input name="lastname" type="text" placeholder="Perekonnanimi"><?php echo $last_name_error ?> <br><br>
	<input name="email" type="email" placeholder="E-post"><?php echo $email_error ?> <br><br>
	<input name="password" type="password" placeholder="Parool"><?php echo $password_error ?> <br><br>
	<input type="submit" value="Registreeri">
	</form>
	<br><br>
	<p>Mvp ideeks mõtlesin teha mingi veebirakenduse disc golfi jaoks. Ma pole päris kindel, kuidas ja kas seda teha saab, aga esialgne mõte oli, et kasutaja saaks sisestada, mis on raja par ja siis sisestada mitu viset tal endal ketta korvi saamiseks kulus. Samuti võiks rakendus näidata ka üldskoori, kus on summeeritud kõikide radade par ning enda skoor. Loodetavasti midagi sellist sobiks!?</p>
	
	
</body>

</html>