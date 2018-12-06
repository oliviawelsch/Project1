<?php

function getusersquestions ($id)
{
    global $db;
    $query = "SELECT * FROM questions WHERE ownerid = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(":id", $id);
    $statement->execute();
    $questions = $statement->fetchAll();
    $statement->closeCursor();
    return $questions;
}

function getallquestions ($id)
{
    global $db;
    $query = "SELECT * FROM questions ";
    $statement = $db->prepare($query);
    $statement->bindValue(":id", $id);
    $statement->execute();
    $questions = $statement->fetchAll();
    $statement->closeCursor();
    return $questions;
}


function addnewquestion ($question_name, $question_skills, $question_body, $id)
{
    global $db;
    $query = "INSERT INTO questions
             (ownerid, title, body, skills)
         VALUES (:userid,:question_name, :question_body, :question_skills)";

    $statement = $db->prepare($query);
    $statement->bindValue(':userid', $id);
    $statement->bindValue(':question_name', $question_name);
    $statement->bindValue(':question_body', $question_body);
    $statement->bindValue(':question_skills', $question_skills);
    $statement->execute();
    $statement->closeCursor();
}


function getquestionbyid ($id)
{
    global $db;
    $query = "SELECT * FROM questions WHERE id = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(":id", $id);
    $statement->execute();
    $questions = $statement->fetch();
    $statement->closeCursor();
    return $questions;
}


function editquestion ($question_name, $question_skills, $question_body)
{
    global $db;
    $query = "UPDATE questions SET title = :question_name, skills = :question_skills, body = :question_body WHERE id = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(":question_name", $question_name);
    $statement->bindValue(":question_skills", $question_skills);
    $statement->bindValue(":question_body", $question_body);
    $statement->execute();
    $statement->closeCursor();

}

function deletequestion ($id)
{
    global $db;
    $query = "DELETE FROM questions WHERE id = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(":id", $id);
    $statement->execute();
    $statement->closeCursor();

}

?>