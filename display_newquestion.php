<?php
$question_name = $_POST ['question_name'];
$question_body = $_POST ['question_body'];
$question_skills = $_POST ['question_skills'];
?>

<html>
<style>
    h1 {border: 3px solid black; text-align:center}
    h2 {text-align:center}
    form {font-size: x-large}
    html{background-color:powderblue}
</style>
<body>

<label><b>Your question name is:</b></label>
<?php
if(strlen($question_name)==0) {echo("Question name is required.");}
else if(strlen($question_name) <3) {echo("Question name must be at least 3 characters.");}
else {echo($question_name);}
?><br>


<label><b>Your question body is:</b></label>
<?php
if(strlen($question_body)==0) {echo("Question body is required.");}
else if(strlen($question_body) >500) {echo("Question body must be less than 500 characters.");}
else {echo($question_body);}
?><br>


<label><b>Your question skills are:</b></label>
<?php
if(strlen($question_skills)==0) {echo("Question skills are required.");}
else {echo($question_skills);}
?><br>

</body>
</html>