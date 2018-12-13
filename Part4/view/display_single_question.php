<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../displayquestions.css">
</head>

<aside>
<?php

echo "<h1>Hello $first_name $last_name</h1>";

echo "<h3><a href = 'index.php?id=$id&action=display_questions'>My Questions</a>";
echo "<h3><a href = 'index.php?action=display_questions'>All Questions</a>";
?>
</aside>

<aside>
<?php
    echo "<br>Question Title: $question_name<br>";
    echo "<br> Skills: $question_skills<br>";
    echo "<br> Body: $question_body <br><br>";
    ?>
</aside>