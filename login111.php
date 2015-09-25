<!DOCTYPE html>
<?php


	//echo $_POST["email"];
	
	//defineerime muutujad
	$email_error = "";
	$password_error = "";
	$firstname_error = "";
	$lastname_error = "";
	$age_error = "";
	$location_error = "";
	
	
	//kontrollin kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		
		// kontrollin mis nuppu vajutati
		if(isset($_POST["Sisselogimine"])){
			
			// ********************
			// *** LOGIN NUPP *****
			// ********************
	
			
			//echo "jah";
			
			//Kas epost on tühi
			if( empty($_POST["email"]) ) {
				
				//jah oli tühi
				$email_error = "E-post on kohustuslik!";
			}
			
			
			//Kas parool on tühi
			if( empty($_POST["password"]) ) {
				
				//jah oli tühi
				$password_error = "Parool on kohustuslik!";
			
			}
			
		
		}elseif(isset($_POST["create"])){ 

					
			// ********************
			// *** CREATE NUPP ****
			// ********************
		
		
		
			if( empty($_POST["email"]) ) {
				
				//jah oli tühi
				$email_error = "E-post on kohustuslik!";
			
			}
			//Kas parool on tühi
			if( empty($_POST["password"]) ) {
				
				//jah oli tühi
				$password_error = "Parool on kohustuslik!";
			}
			if( empty($_POST["firstname"]) ) {
				
				//jah oli tühi
				$firstname_error = "Eesnimi on kohustuslik!";
			
			}
			if( empty($_POST["lastname"]) ) {
				
				//jah oli tühi
				$lastname_error = "Perekonnanimi on kohustuslik!";
			
			}
			if( empty($_POST["age"]) ) {
				
				//jah oli tühi
				$age_error = "Vanus on kohustuslik!";
			}
			
			if( empty($_POST["location"]) ) {
				
				//jah oli tühi
				$location_error = "Vanus on kohustuslik!";
			
			}
		}
		
	}
?>

<html>

<head>
			<title> Oliver Rahula </title>
</head>
	
<body>

	<br><br>
	<pre align="center" style="font-size: 120%">
MVP idee oleks luua algeline automüügiportaal, kuhu saab huviline sisestada nii enda müügikuulutuse, kui ka jälgida juba üles pandud kuulutusi. 
Kõlab nagu reklaamis. Kuulutusse peaks siis saama lisada erinevaid parameetereid, kaasarvatud üles laadida pilte. 
Inspiratsiooniks oleksid selliseid portaalid nagu:

<a href="http://www.auto24.ee">Auto24</a>,
<a href="http://www.mobile.de/">Mobile</a>, 
<a href="http://www.autowereld.nl/">Autowereld</a>;

Kuna ise puutun antud lehekülgedega päris tihti kokku, siis on mulle silma hakanud nende puudused, 
või siis küljed, mida ma ise teeksin teisiti - a'la kuidas kasutajal oleks mugavam portaali kasutada. 
Ma ei ole nüüd päris kindel, kui kaugele me selle kursuse jooksul jõuame, aga kui leht peaks kursuse lõpuks valmis olema 
ja iseenesest konkureerima nende kolmega, siis ma arvan, et idee iseenesest on seda väärt. Vähemalt endale pakuks huvi.

	</pre>


	<br>
	<h2 align="center">Sisselogimine</h2>
  
  
<form action="login111.php" method="post" align="center">
	
    <input name="email" type="email" placeholder="E-post" > <?php echo $email_error; ?> <br><br>
	<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?> <br><br>
	<input name="login" type="submit" placeholder="Logi sisse" > <br><br>	
	
</form>
	
	<br><br>
	<br><br>
	<h2 align="center">Registreerimine</h2>
	
	
<form action="login111.php" method="post" align="center">	

		<input name="email" type="email" placeholder="E-post"> <?php echo $email_error; ?> <br><br>
		<input name="password" type="password" placeholder="Parool"> <?php echo $password_error; ?> <br><br>
		<input name="firstname" type="name" placeholder="Eesnimi"> <?php echo $firstname_error; ?> <br><br>
		<input name="lastname" type="name" placeholder="Perekonnanimi" > <?php echo $lastname_error ?> <br><br>
		<input name="age" type="age" placeholder="Vanus" > <?php echo $age_error ?> <br><br>
		<input name="location" type="location" placeholder="Asukoht" > <?php echo $location_error ?> <br><br>
		<input name="create" type="submit" placeholder="Sisesta" > <br><br>
		
</form>
	

</body>


</html>
