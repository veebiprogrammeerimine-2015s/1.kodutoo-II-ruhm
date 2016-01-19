<?php

//echo $_POST["email"];


$email_error="";
$password_error="";

//kontrollin kas keegi vajutas nuppu
if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	
	


		if(empty($_POST["email"])){
		$email_error = "See väli on kohustuslik";
			}	
	



		if(empty($_POST["Password"])){
		$password_error = "See väli on kohustuslik";
			}
		
  }
?>


<html>

<head>
<title>Login Page </title>
</head>
<body>

<h2>Lehekülg</h2>


<h2> Login </h2>
<form action="login.php" method="POST">
<input type="email" placeholder="E-post"><?php echo  $email_error; ?>  <br><br>
<input type="password" placeholder="Parool"><?php echo $password_error; ?> <br><br>
<input type="submit" value="Logi sisse" > <br><br>
</form>

<h2> <a href="leht2.php">Not user? <br>Create User here!<br> </a> </h2>



 Idee kirjeldus. Lisan lehele Logimis ja registeerimis vormid, peale mida lisan lehti juurde , kuhu saab lisada pilte ja postitusi.




</body>
</html>