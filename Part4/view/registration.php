<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../registration.css">
</head>
<body>
<div class="container">

<main>
    <h2>Registration Form</h2>

    <form class="form-horizontal" action="display_registration.php" method="post">
        <input type="hidden" name="action" value="register">
        <div class="form-group">
            <label class="control-label col-sm-2" for="first_name">First Name:</label>
            <div class="col-sm-10">
                <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter Your First Name">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="last_name">Last Name:</label>
            <div class="col-sm-10">
                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter Your Last Name">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="birthday">Birthday:</label>
            <div class="col-sm-10">
                <input type="date" name="birthday" class="form-control" id="birthday" placeholder="Enter Your Birthday">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="email_address">Email Address:</label>
            <div class="col-sm-10">
                <input type="text" name="email_address" class="form-control" id="email_address" placeholder="Enter Your Email Address">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password:</label>
            <div class="col-sm-10">
                <input type="text" name="password" class="form-control" id="password" placeholder="Enter Your Password">
            </div>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Register"><br>
        </div>
    </form>

</main>
</div>
</body>
</html>