<?php
require "database.php";
$email_address = $_POST ['email_address'];
$password = $_POST ['password'];
?>

<html>
<head>
    <link rel="stylesheet" href="login.css">
</head>

<body>

<label><b>Your email address is:</b></label>
<?php
if(strlen($email_address)==0) {echo("Email is required.");}
else if(strpos($email_address,'@')==True){echo("$email_address");}
else echo("Email format not valid (must contain @ sign).");
?><br>


<label><b>Your password is:</b></label>
<?php
if(strlen($password)==0) {echo("Password is required.");}
else if(strlen($password) <8) {echo("Password must be at least 8 characters.");}
else {echo($password);}
?><br>

</body>
</html>