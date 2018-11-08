<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>


<main>
    <h1>Registration Form</h1>

    <form action="display_registration.php" method="post">

        <div id="data">
            <label>First Name:</label>
            <input type="text" name="first_name"><br>

            <label>Last Name</label>
            <input type="text" name="last_name"><br>

            <label>Birthday</label>
            <input type="date" name="birthday"><br>

            <label>Email Address:</label>
            <input type="text" name="email_address"><br>

            <label>Password:</label>
            <input type="password" name="password"><br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Register"><br>
        </div>
    </form>

</main>
</body>
</html>