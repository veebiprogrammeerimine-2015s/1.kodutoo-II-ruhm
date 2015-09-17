<?php

	//echo $_POST["email"];
	
	//Defineerime muutuja
	$email_error ="";
	$password_error = "";
	
	//kontrollin, kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {

		echo "jah";
	
		//kas e-post on tühi
		if ( empty($_POST["email"])	) {
			
			//jah oli tühi
			$email_error = "See väli on kohustuslik";
	
	}

	// kas parool on tühi
			if ( empty($_POST["password"]) ) {
			$password_error = "See väli on kohustuslik";
		} else {
			
			//Parool pole tühi
			if(strlen($_POST["password"]) < 6) {
				
				$password_error = "Parool peab olema vähemalt 6 tähemärki pikk.";
			}		
		}
	}
	
	
	
?>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<h2>Logi sisse</h2>
	<form action="login.php" method="post">
	<input name="email" type="email" placeholder="E-post" > <?php echo $email_error ?>	<br><br>
	<input name="password" type="password" placeholder="Parool" > <?php echo $password_error ?>	<br><br>
	<input type="submit" value="Logi sisse" >	<br><br>
	</form>
	
	
	<h2>Tee kasutaja</h2>
	<form action="login.php" method="post" >
	<input name="email" type="email" placeholder="Email ">*<?php echo $email_error ?><br><br>
	<input name="pass" type="password" placeholder="Parool ">*<?php echo $password_error ?><br><br>
	<input name="name" type="first_name" placeholder="Eesnimi">*<br><br>
	<input name="name" type="last_name" placeholder="Perekonnanimi">*<br><br>
	<input name="date" type="age" placeholder="Vanus">*<br><br>
	<input type="submit" value="Registeeri">
	</form>
	MVP idee
	Idee seisneb selles, et inimesed, kes käivad jõusaalis, saaks mugavalt oma järgida oma toitumist.
	 Koostaks kalkulaatori(vanus, rasvaprotsent, kui palju liigutakse nädalas) ja vastavalt oma soovidele(kaalu kaotus/massi suurendamine) näeks inimene, kuidas toiteväärtust muuta ja kuidas õigesti süüa.
	 Et asja natuke omamoodi luua, siis võiks olla lisa võimalus, et koostab päeva ja hiljem nädalaplaani ja lisab sellele kõrvale retseptid, et poest lihtsam asju osta oleks ja saaks täpselt toitumisnõuded ära täita.
</body>
</html>