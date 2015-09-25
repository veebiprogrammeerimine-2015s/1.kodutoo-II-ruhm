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
 

<?php

    // *********************
    // ** LOO KASUTAJA *****
    // *********************
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
				
				$stmt = $mysqli->prepare("INSERT INTO user_sample (email, password) VALUES (?, ?)");
				
				//echo $mysqli->error;
				//echo $stmt->error;
				//asendame ? märgid muutujate väärtuste
				// ss - s tähendab string iga muutuja kohta
				$stmt->bind_param("ss", $create_email, $password_hash);
				$stmt->execute();
				$stmt->close();
			}
    } // create if end
?>



<h2> Create User </h2>
 
<input text="Name" placeholder ="Name">
<input text ="Lastname" placeholder="Lastname"><br><br>
<input text="User" placeholder="User">
<input text="Password" placeholder="Password"><br><br>
<input text="Email" placeholder="Email"><br><br>
<input type="submit" value="Submit"><br><br>
 Idee kirjeldus. Lisan lehele Logimis ja registeerimis vormid, peale mida lisan lehti juurde ja mõned pildid etc.


</body>
</html>