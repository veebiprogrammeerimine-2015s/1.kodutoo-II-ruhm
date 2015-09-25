<?php

//echo $_POST["email"];


$email_error="";
$parool_error="";
//kontrollin kas keegi vajutas nuppu
if($_SERVER["REQUEST_METHOD"]=="POST"){

echo "jah";

if(empty($_POST["email"])){
$email_error = "See väli on kohustuslik";
}


if(empty($_POST["Parool"])){
$parool_error = "See väli on kohustuslik";
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
 <h2><a href="http://www.tlu.ee">Already a Member?</a></h2>




<h2> Create User </h2>
 
 
<input type="Kasutajanimi" placeholder="Kasutajanimi">
<input type="Parool" placeholder="Parool">
<input type="Email" placeholder="Email"><br><br>
<input type="submit" value="Registeeri"><br><br>
 
 


</body>
</html>