<html>
<body>

<?php
$emailErr = $passwordErr = "";
$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["email_address"])) {
$emailErr = "Email address is required";
} else {
$email = test_input($_POST["email_address"]);
}

if (empty($_POST["password"])) {
$passwordErr = "Password is required";
} else {
$email = test_input($_POST["password"]);
}

?>

Your email address is: <?php echo $_POST["email_address"]; ?><br>
Your password is: <?php echo $_POST["password"]; ?>

</body>
</html>