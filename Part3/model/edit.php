<?php
require "database.php";
$id = $_GET["userid"];
$email_address = $_GET['email'];
$question_name = $_GET ['title'];
$question_skills = $_GET ['skills'];
$question_body = $_GET ['body'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Question Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="newquestion.css">
</head>
<body>

<div class="container">
<main>
    <h2>Edit Question Form</h2>
    <form class="form-horizontal" action="display_newquestion.php?id=<?php echo $id?>" method="post">
        <input type="hidden" name="userid" value="<?php echo $_GET["userid"]?>">

        <div class="form-group">
            <label class="control-label col-sm-2" for="question_name">Question Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="question_name" name="question_name" value="<?php echo $_GET['title'];?>">
            </div>
        </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="skills">Skills: separate with commas)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="skills" value="<?php echo $_GET['skills'];?>" name="question_skills">
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-2" for="body">Question Body:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="body" value="<?php echo $_GET['body'];?>" name="question_body">
                    </div>
                </div>


        <div id="buttons">
            <input type="submit" value="Submit" value="Post"><br>
        </div>
    </form>

</main>
</body>
</html>