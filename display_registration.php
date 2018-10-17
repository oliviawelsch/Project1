<?php
$first_name = $_POST ['first_name'];
$last_name = $_POST ['last_name'];
$birthday = $_POST ['birthday'];
$email_address = $_POST ['email_address'];
$password = $_POST ['password'];
?>

<html>
<body>

<label><b>Your first name is:</b></label>
<?php
if(strlen($first_name)==0) {echo("First name is required.");}
else {echo($first_name);}
?><br>

<label><b>Your last name is:</b></label>
<?php
if(strlen($last_name)==0) {echo("Last name is required.");}
else {echo($last_name);}
?><br>

<label><b>Your birthday is:</b></label>
<?php
if(strlen($birthday)==0) {echo("Birthday is required.");}
else {echo($birthday);}
?><br>

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