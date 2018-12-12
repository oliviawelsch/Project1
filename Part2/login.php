<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="container">
<main>
    <h2>Login Form</h2>

<form class="form-horizontal" action="display_login.php" method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email Address:</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Email Address" name="email_address">
    </div>
    </div>

<div class="form-group">
    <label class="control-label col-sm-2" for="'pwd">Password:</label>
    <div class="col-sm-10">
            <input type="text" class="form-control" id="pwd" placeholder="Enter Password" name="password">
    </div>
</div>


    <div id="buttons">
        <label>&nbsp;</label>
        <input type="submit" value="Log In"><br>
    </div>

</form>
</div>

</main>
</body>
</html>