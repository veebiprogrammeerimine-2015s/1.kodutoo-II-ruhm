<?php

	//echo $_POST["email"];
	
	//defineerime muutujad
	$email_error = "";
	$create_email_error = "";
	$password_error = "";
	$create_password_error = "";
	$create_password_again_error = "";
	$firstname_error = "";
	$lastname_error = "";
	//kontrollin kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//echo "jah";
		if(isset($_POST["login"])){
			
			if( empty($_POST["email"]) ) {
				
				//jah oli tühi
				$create_email_error = "E-post on kohustuslik!";
			}
			//Kas parool on tühi
			if( empty($_POST["password"]) ) {
				
				//jah oli tühi
				$password_error = "Parool on kohustuslik!";
			
			}
			
			
			
		}
		if(isset($_POST["create"])){
		//Kas epost on tühi
			if( empty($_POST["create_email"]) ) {
				
				//jah oli tühi
				$email_error = "E-post on kohustuslik!";
			}
			
			if( empty($_POST["_create_password"]) ) {
				
				//jah oli tühi
				$create_password_again_error = "Parool on kohustuslik!";
			
			}
			if( empty($_POST["create_password_again"]) ) {
				
				//jah oli tühi
				$create_password_error = "Parool on kohustuslik!";
			
			}
			
			if( empty($_POST["firstname"]) ) {
				
				//jah oli tühi
				$firstname_error = "Eesnimi on kohustuslik!";
			
			}
			
			if( empty($_POST["lastname"]) ) {
				
				//jah oli tühi
				$lastname_error = "Perekonnanimi on kohustuslik!";
			
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
		<form action="login.php" method="post"> 
			<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?> <br><br>
			<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?> <br><br>
			<input type="submit" value="Logi sisse"> <br><br>
		</form>
		<h2>Create user</h2>
		<form action="login.php" method="post"> 
			<input name="create_email" type="email" placeholder="E-post"> <?php echo $create_email_error; ?> <br><br>
			<input name="create_password" type="password" placeholder="Parool"> <?php echo $create_password_error; ?> <br><br>
			<input name="create_password_again" type="password" placeholder="Parool uuesti"> <?php echo $create_password_again_error; ?> <br><br>
			<input name="firstname" type="text" placeholder="Eesnimi"> <?php echo $firstname_error; ?> <br><br>
			<input name="lastname" type="text" placeholder="Perekonnanimi"> <?php echo $lastname_error; ?> <br><br>
			<input type="submit" value="Registreeru"> <br><br>
		</form>
	</body>

</html>

MVP idee

Minu mvp idee oli teha lehekülg, kus kasutajad saavad korraldada enda turniire. Eelkõige mõtlesin seda 
teha just erinevatel arvutimängudele ehk e-spordiks. Kuna olen ise natukene e-spordiga seotud nii fännina kui ka väikest viisi
ise mängijana (mitte midagi tõsist, vaid hobikorras meelelahutamiseks). Kuna nö e-spordi alasid on palju ja nende reeglid
ja formaadid erinevad siis esialgu kaasaksin ainult Counter Strike: Global Offensive. Selle mänguga on mul kõige suurem
kogemus ja arusaamine erinevatest e-spordi formaatidest. Mida leht endast kujutaks oleks esmaste plaanide kohaselt see, et
kasutajad saavad registreerud ja korraldada enda turniir kergelt. Paneksin erinevad formaadid kiirvalikutena ja näiteks tühjad välja
2 tiimi liikmete jaoks. Mittekohustuslik auhinna väli võiks ka olla. Kui võimalik siis lisaksin näiteks mingisuguse timeri erinevate 
turniiride algusaegadeni jne. See on praegu kõik, hetkel pähe tuleb, aga eks kui uusi asju teeme tekkib veel mõtteid.
