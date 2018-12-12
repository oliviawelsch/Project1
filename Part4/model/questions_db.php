<?php
class QuestionsDB
{
    public static function getusersquestions($id)
    {
        global $db;
        $query = "SELECT * FROM questions WHERE ownerid = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->execute();
        $statement->closeCursor();

        $questions = array();
        foreach($statement as $row) {
            $question = new Questions($row['title'], $row['body'], $row['skills']);
            $questions []= $question;
        }

        return $questions;
    }

    public static function getallquestions($id)
    {
        global $db;
        $query = "SELECT * FROM questions ";
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->execute();
        $statement->closeCursor();

        $questions = array();
        foreach($statement as $row) {
            $question = new Questions($row['title'], $row['body'], $row['skills']);
            $questions[] = $question;
        }

        return $questions;
    }


    public static function addnewquestion($question_name, $question_skills, $question_body, $id)
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


    public static function getquestionbyid($id)
    {
        global $db;
        $query = "SELECT * FROM questions WHERE id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->execute();
        $statement->closeCursor();

        $row = $statement->fetch();
        $question = new Questions($row['title'], $row['body'], $row['skills']);
        return $question;

    }


    public static function editquestion($question_name, $question_skills, $question_body)
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

    public static function deletequestion($id)
    {
        global $db;
        $query = "DELETE FROM questions WHERE id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->execute();
        $statement->closeCursor();

    }
}

?>