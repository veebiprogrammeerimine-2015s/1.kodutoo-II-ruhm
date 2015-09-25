<?php
	
	//echo $_POST["email"];
	
	//Defineerime muutujad
	$email_error = "";
	$password_error = "";
	$name_error = "";
	
	//kontrollin kas keegi vajutas nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		
		// kontrollin mis nuppu vajutati
		if(isset($_POST["login"])){
			
			// ********************
			// *** LOGIN NUPP *****
			// ********************
			
			// kas e-post on t�hi
			if( empty($_POST["email"]) ) {
				
				// jah oli t�hi
				$email_error = "See v�li on kohustuslik";
				
			}
			
			// kas parool on t�hi
			if( empty($_POST["password"]) ) {
				
				// jah oli t�hi
				$password_error = "See v�li on kohustuslik";
				
			}
		
		
		} elseif(isset($_POST["create"])){
		
			// ********************
			// *** CREATE NUPP ****
			// ********************
			
			// kas e-post on t�hi
			if( empty($_POST["name"]) ) {
				
				// jah oli t�hi
				$name_error = "See v�li on kohustuslik";
			}
			if( empty($_POST["name"]) ) {
				
				// jah oli t�hi
				$name_error = "See v�li on kohustuslik";				
			}
		
		}
		
		
	}

?>
<?php
	$page_title = "Login leht";
	$file_name = "login.php";
?>
<?php require_once("../header.php"); ?>
	<h2>Login</h2>
	<form action="login.php" method="post">
		<input name="email" type="email" placeholder="E-post" > <?php echo $email_error; ?><br><br>
		<input name="password" type="password" placeholder="Parool" > <?php echo $password_error; ?> <br><br>
		<input name="login" type="submit" value="Logi sisse" > <br><br>
	</form>
	
	
	<h2>Create user</h2>
	<form action="login.php" method="post">
		<input name="name" type="text" placeholder="Eesnimi Perenimi" > <?php echo $name_error; ?><br><br>
		<input name="sugu" type="text" placeholder="Sugu" > <?php echo $name_error; ?><br><br>
		<input name="create" type="submit" value="Loo kasutaja" > <br><br>
	</form>
	 
<?php require_once("../footer.php"); ?>