<?php
$nameErr = $emailErr  = $passwordErr = "";
$name = $email = $password = "";

//anna kasutajale tagasisidet kui kohustuslik väli jäi tühjaks
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
   }
   
   
   if (empty($_POST["password"])) {
     $passwordErr = "Password is required";
   } else {
     $password = test_input($_POST["password"]);
   }
     
   if (empty($_POST["email"])) {
     $email = "";
   } else {
     $email = test_input($_POST["email"]);
   }

 
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
} ?>
<h2>First homework</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   Password: <input type="text" name="password">
   <span class="error">* <?php echo $passwordErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email">
   <span class="error"><?php echo $emailErr;?></span>
   <br><br>
   
   
   <input type="submit" name="submit" value="Submit"> 
</form>



