<?php
	//echo $_POST["email"];
	
	//Defineerime muutuja
	$email_error ="";
	$password_error = "";
	$first_name_error = "";
	$last_name_error = "";
	$date_error = "";
	$cemail_error ="";
	$cpassword_error ="";
	
	
		//kas keegi vajutas nuppu
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			echo "Tegevus õnnestus!";
		
			//kas e-post on tühi
			if ( empty($_POST["email"])	) {
				//jah oli tühi
				$email_error = "Väli on kohustuslik";
			}
			// kas parool on tühi
			if ( empty($_POST["password"]) ) {
				$password_error = "Väli on kohustuslik";
			} 
			if ( empty($_POST["first_name"])	) {
				//jah oli tühi
				$first_name_error = "Väli on kohustuslik";
			}
			if ( empty($_POST["last_name"])	) {
				//jah oli tühi
				$last_name_error = "Väli on kohustuslik";
			}
			if ( empty($_POST["date"])	) {
				//jah oli tühi
				$date_error = "Väli on kohustuslik";
			}
				if ( empty($_POST["cemail"])	) {
				//jah oli tühi
				$cemail_error = "Väli on kohustuslik";
			}
				if ( empty($_POST["cpass"])	) {
				//jah oli tühi
				$cpassword_error = "Väli on kohustuslik";
		}		
	}
	
?>
<html>
<head>
	<title>Welcome</title>
</head>
	<body>
		<h2>Login</h2>
		<form action="login.php" method="post">
		<input name="email" type="email" placeholder="Email" > <?php echo $email_error ?>	<br><br>
		<input name="password" type="password" placeholder="Parool" > <?php echo $password_error ?>	<br><br>
		<input type="submit" value="Logige sisse" >	<br><br>
		</form>
		
		<h2>Create User</h2>
		<form action="login.php" method="post" >
		<input name="cemail" type="email" placeholder="Email "> <?php echo $cemail_error ?><br><br>
		<input name="cpass" type="password" placeholder="Parool "> <?php echo $cpassword_error ?><br><br>
		<input name="cpass" type="password" placeholder="Sisestage uuesti "> <?php echo $cpassword_error ?><br><br>
		<input name="first_name" type="text" placeholder="Eesnimi"> <?php echo $first_name_error ?><br><br>
		<input name="last_name" type="text" placeholder="Perekonnanimi"> <?php echo $last_name_error ?><br><br>
		<input name="date" type="age" placeholder="Vanus"> <?php echo $date_error ?><br><br>
		<input type="submit" value="Registeeruge">
		</form>
		<p>MVP ideeks on luua suhtluskeskond Eesti muskelautode huvilistele ning omanikele. Miks just neile? Sest siin riigis huvilisi ja omanike leidub, kuid nende väikese arvu tõttu puuduvad neile suunatud autoportaalid ning auto rikke korral või tuuningu soovi puhul on osi võimalik saada ainult välismaalt. Ka enamus muskelautode müügist toimub väljaspool Eesti piire. Keskond võiks võimaldada kasutajatevahelist suhtlemist ja koostööd.</p>
	
	
</body>

</html>

	</body>
</html>