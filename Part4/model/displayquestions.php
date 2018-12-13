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
if(count($questions) < 1 )
{echo "<h2>You have not asked a question yet. Use the <b>Add Question</b> button to ask your first question.</h2>";}
else {foreach ($questions as $result) {
    $question_name = $result->getTitle();
    $question_skills = $result->skills();
    $question_body = $result->getBody();
    echo "<br>Question Title: $question_name<br>";
    echo "<br> Skills: $question_skills<br>";
    echo "<br> Body: $question_body <br><br>";
    echo "<a href = 'index.php?action=display_edit_question&id=$id&title=$question_name&skills=$question_skills&body=$question_body'>Edit  </a></td>";
    echo "<a href = 'index.php?id=$id&action=delete_question'>Delete</a></td><br><br>";}
}
?>


</aside>

    <form action ="newquestion.php" method= "get" >
        <input type="hidden" name="userid" value="<?php echo $id ?>">
        <input type="hidden" name="email" value="<?php echo $email_address ?>">
        <input type="submit" value="Add Question">
    </form>

</div>
</body>
</html>
