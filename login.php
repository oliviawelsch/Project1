<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<main>
    <h1>Login Form</h1>

<form action="display_login.php" method="post">

    <div id="data">
        <label>Email Address:</label>
        <input type="text" name="email_address"><br>

        <label>Password:</label>
        <input type="text" name="password"><br>
    </div>

    <div id="buttons">
        <label>&nbsp;</label>
        <input type="submit" value="Log In"><br>
    </div>
</form>

</main>
</body>
</html>