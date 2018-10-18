<?php
$email_address = $_POST ['email_address'];
$password = $_POST ['password'];
?>

<html>
<style>
    h1 {border: 3px solid black; text-align:center}
    h2 {text-align:center}
    form {font-size: x-large}
    html{background-color:powderblue}
</style>
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