<?php

//echo $_POST["email"];


$email_error="";
$parool_error="";
$first_name_error="";
$last_name_error="";
$user_error="";
$password_error="";
$email_error="";
//kontrollin kas keegi vajutas nuppu
if($_SERVER["REQUEST_METHOD"]=="POST"){

echo "jah";

	if(empty($_POST["email"])){
$email_error = "See väli on kohustuslik";
}


	if(empty($_POST["Password"])){
		$parool_error = "See väli on kohustuslik";
		}

	if(empty($_POST["first_name"])){
		$first_name_error = "See väli on kohustuslik";
		}

if(empty($_POST ["last_name"])){
	$last_name_error="See väli on kohustuslik";
}	
if(empty($_POST ["user_name"])){
	$user_name_error="See väli on kohustuslik";
}
if(empty($_POST ["password"])){
	$password_error="See väli on kohustuslik";
}
if(empty($_POST ["email"])){
	$email_error="See väli on kohustuslik";
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
<input type="password" placeholder="Parool"><?php echo $parool_error; ?> <br><br>
<input type="submit" value="Logi sisse" > <br><br>
</form>

<h2> <a href="../1.kodutoo-II-ruhm/leht2">Create User </a> </h2>



 Idee kirjeldus. Lisan lehele Logimis ja registeerimis vormid, peale mida lisan lehti juurde , kuhu saab lisada pilte ja postitusi.




</body>
</html>