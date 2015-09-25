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
<div style="background-color:blue; color:white; padding:20px;">
<h2>Lehekülg</h2>
<p> Eeny, Meeny, Miny, Mo,
Catch a nigger by his toe,
If he won't work then let him go;
Skidum, skidee, skidoo.
 </p>
</div>
<img class="irc_mi" style="margin-top: 31px;" src="http://images.sodahead.com/polls/000182383/polls_kkk_4643_222983_answer_1_xlarge.jpeg" width="350" height="332">
<a href="https://www.youtube.com/watch?v=CPMdiUOy-jo">Selgitus video</a>
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
<input type="Email" placeholder="Email">
<input type="submit" value="Registeeri"><br><br>
 
 


</body>
</html>