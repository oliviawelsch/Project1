<?php
require "database.php";
$question_name = $_POST ['question_name'];
$question_skills = $_POST ['question_skills'];
$question_body = $_POST ['question_body'];

$skillsarray=(explode(",",$question_skills));
?>


<html>

<head>
    <link rel="stylesheet" href="newquestion.css">
</head>

<body>

<label><b>Question Name:</b></label>
<?php
if(strlen($question_name)==0) {echo("Question name is required.");}
else if(strlen($question_name) <3) {echo("Question name must be at least 3 characters.");}
else {echo($question_name);}
?><br>

<label><b>Your skills are:</b></label>
<?php
if(count($skillsarray)>=2) print_r($skillsarray);
else {echo("At least 2 skills are required.");}
?><br>


<label><b>Your Question is:</b></label>
<?php
if(strlen($question_body)==0) {echo("Question body is required.");}
else if(strlen($question_body) >500) {echo("Question body must be less than 500 characters.");}
else {echo($question_body);}
?><br>


</body>
</html>