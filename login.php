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

    <table>
        <tr>
    <div id="data">
        <td>Email Address:</td>
        <td><input type="text" name="email_address"><td>
    </tr>

        <tr>
            <td>Password:</td>
            <td><input type="text" name="password"></td>

        </tr>
        </div>
    </table>

    <div id="buttons">
        <input type="submit" value="Log In"><br>
    </div>
</form>

</main>
</body>
</html>