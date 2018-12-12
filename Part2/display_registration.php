<?php
require "database.php";

$first_name = $_POST ['first_name'];
$last_name = $_POST ['last_name'];
$birthday = $_POST ['birthday'];
$email_address = $_POST ['email_address'];
$password = $_POST ['password'];

$query = "INSERT INTO accounts
             (email, fname, lname, birthday, password)
         VALUES (:email_address,:first_name, :last_name, :birthday, :password)";

$statement = $db->prepare($query);
$statement->bindValue(':email_address', $email_address);
$statement->bindValue(':first_name', $first_name);
$statement->bindValue(':last_name', $last_name);
$statement->bindValue(':birthday', $birthday);
$statement->bindValue(':password', $password);
$statement->execute();
$id = $db->lastInsertId();
$statement->closeCursor();


header("Location: displayquestions.php?userid=$id&fname=$first_name&lname=$last_name");
?>

<html>

<head>
    <link rel="stylesheet" href="registration.css">
</head>

<body>

<label><b>First Name:</b></label>
<?php
if(strlen($first_name)==0) {echo("First name is required.");}
else {echo($first_name);}
?><br>

<label><b>Last Name:</b></label>
<?php
if(strlen($last_name)==0) {echo("Last name is required.");}
else {echo($last_name);}
?><br>

<label><b>Birthday:</b></label>
<?php
if(strlen($birthday)==0) {echo("Birthday is required.");}
else {echo($birthday);}
?><br>

<label><b>Email Address:</b></label>
<?php
if(strlen($email_address)==0) {echo("Email is required.");}
else if(strpos($email_address,'@')==True){echo("$email_address");}
else echo("Email format not valid (must contain @ sign).");
?><br>

<label><b>Password:</b></label>
<?php
if(strlen($password)==0) {echo("Password is required.");}
else if(strlen($password) <8) {echo("Password must be at least 8 characters.");}
else {echo($password);}
?><br>

</body>
</html>