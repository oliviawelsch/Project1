<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Questions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="displayquestions.css">
</head>

<body>
<div class="container">
    <main>

<?php
require "database.php";
$id = $_GET["userid"];
$email_address = $_GET['email'];
$first_name = $_GET ['fname'];
$last_name = $_GET ['lname'];

echo "<h1>Hello $first_name $last_name</h1>";
?>
    </main>

<aside>
<?php
global $db;
$query = "SELECT * FROM questions WHERE ownerid = :id";
$statement = $db->prepare($query);
$statement->bindValue(":id", $id);
$statement->execute();
$questions = $statement->fetchAll();
$statement->closeCursor();


if(count($questions) < 1 )
{echo "<h2>You have not asked a question yet. Use the <b>Add Question</b> button to ask your first question.</h2>";}
else {foreach ($questions as $result) {
    $question_name = $result['title']. '<br>';
    $question_skills = $result['skills']. '<br>';
    $question_body = $result['body']. '<br>';
    echo "<br> Question Title: $question_name";
    echo "<br> Skills: $question_skills";
    echo "<br> Body: $question_body";}
}

?>



</aside>

    <main>
    <form action ="newquestion.php?email=<?php echo $email_address ?>" method= "post" >
        <input type="submit" value="Add Question">
    </form>
    </main>

</div>
</body>
</html>
