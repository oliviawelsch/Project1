<html>
<body>

<?php?
$email_address = filter_input(INPUT_POST,'email_address')
$password = filter_input(INPUT_POST,'password')
?>


<label>Your email address is:</label>
<span><?php echo htmlspecialchars($email_address); ?></span><br>


<label>Your password is:</label>
<span><?php echo htmlspecialchars($password); ?></body></span>

</body>
</html>