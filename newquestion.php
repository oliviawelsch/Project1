<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Question Form</title>
    <link rel="stylesheet" href="newquestion.css">
</head>
<body>


<main>
    <h1>Question Form</h1>

    <form action="display_newquestion.php" method="post">
        <input type="hidden" name="userid" value="<?php echo $_GET["userid"]?>">
        <div id="data">
            <label>Question Name</label>
            <input type="text" name="question_name"><br>

            <label>Question Skills (separate by comma)</label>
            <input type="text" name="question_skills"><br>

            <label>Question Body</label>
            <input type="text" name="question_body"><br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Submit"><br>
        </div>
    </form>

</main>
</body>
</html>