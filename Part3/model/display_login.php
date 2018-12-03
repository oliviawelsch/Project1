<link rel="stylesheet" href="../view/login.css">

<?php
include "model/database.php";
$email_address = $_POST ['email_address'];
$password = $_POST ['password'];
?>


<?php
if(strlen($email_address)==0) {echo("Email is required.");}
else if(strpos($email_address,'@')==True){echo("$email_address");}
else echo("Email format not valid (must contain @ sign).");
?><br>


<?php
if(strlen($password)==0) {echo("Password is required.");}
else if(strlen($password) <8) {echo("Password must be at least 8 characters.");}
else {echo($password);}
?><br>

<?php
$query = "SELECT * FROM accounts WHERE email = :email and password =:password";
$statement = $db->prepare($query);
$statement->bindValue(":email", $email_address);
$statement->bindValue(":password", $password);
$statement->execute();
$user = $statement->fetch();
$statement->closeCursor();

$id=$user['id'];
$first_name=$user['fname'];
$last_name=$user['lname'];
?>

<?php header("Location: displayquestions.php?userid=$id&fname=$first_name&lname=$last_name");
?>

</body>
</html>