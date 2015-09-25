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




<h2> Create User </h2>
 <h2><a href="http://www.tlu.ee">Already a Member?</a></h2>

if(isset($_POST["create"])){

			if ( empty($_POST["create_email"]) ) {
				$create_email_error = "See väli on kohustuslik";
			}else{
				$create_email = cleanInput($_POST["create_email"]);
			}

			if ( empty($_POST["create_password"]) ) {
				$create_password_error = "See väli on kohustuslik";
			} else {
				if(strlen($_POST["create_password"]) < 8) {
					$create_password_error = "Peab olema vähemalt 8 tähemärki pikk!";
				}else{
					$create_password = cleanInput($_POST["create_password"]);
				}
			}

			if(	$create_email_error == "" && $create_password_error == ""){
				echo "Võib kasutajat luua! Kasutajanimi on ".$create_email." ja parool on ".$create_password;
      }
			{
				$password_hash = hash("sha512", $create_password);
				echo "<br>";
			echo $password_hash;
			}



</body>
</html>