<?php
require('model/database.php');
require('model/accounts_db.php');
require('model/questions_db.php');
require('model/accounts.php');
require('model/questions.php');


include 'view/header.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'display_login';
    }
}



if ($action == 'display_login')
{
    include ('view/login.php');
}

else if ($action == 'login')
{
    $email_address=$_POST["email_address"];
    $password=$_POST["password"];
    $userid = AccountsDB::checklogin($email_address, $password);
    echo $userid;
    if ($userid != FALSE ){
        header("Location: .?action=display_questions&userid=$userid");
    } else {
       header("Location: .?action=display_registration");
    }
}




else if ($action == 'display_registration')
{
    include ('view/registration.php');
}


else if ($action == 'register')
    {
        $first_name = $_POST ['first_name'];
        $last_name = $_POST ['last_name'];
        $birthday = $_POST ['birthday'];
        $email_address = $_POST ['email_address'];
        $password = $_POST ['password'];
        $id = AccountsDB::addnewuser($first_name, $last_name, $birthday, $email_address, $password);
        header("Location: .?action=display_questions&userid=$id");
    }



else if ($action == 'display_questions')
{
    $userid = $_GET["userid"];
    $view = $_GET["view"];
    if ($view == 'all')
        $questions= QuestionsDB::getallquestions($id);
    else $questions = QuestionsDB::getusersquestions($userid);
    include ('model/displayquestions.php');
}


else if ($action == 'display_new_question')
{
    $userid = $_GET["userid"];
    include ('view/newquestion.php');
}


else if ($action == 'create_new_question')
    {
        $question_name = $_POST ['question_name'];
        $question_skills = $_POST ['question_skills'];
        $question_body = $_POST ['question_body'];
        $id = $_POST ['userid'];
        QuestionsDB::addnewquestion($question_name, $question_skills, $question_body, $id);
        header("Location: .?action=display_questions&userid=$id");
    }


else if ($action == 'display_edit_question')
{
    $userid = $_GET["userid"];
    $questionid = $_GET["questionid"];
    $question = QuestionsDB::getquestionbyid($questionid);
    $question_name=$question->getTitle();
    $question_skills=$question->getSkills();
    $question_body=$question->getBody();
    include ('view/newquestion.php');
}


else if ($action == 'edit_question')
    {
        $id = $_POST["userid"];
        $question_name = $_POST['title'];
        $question_skills = $_POST['skills'];
        $question_body = $_POST['body'];
        QuestionsDB::editquestion($question_name, $question_skills, $question_body, $id);

        header("Location: .?action=display_questions&userid=$id");
    }



else if ($action == 'delete_question')
    {
        $id = $_POST["userid"];
        $email_address = $_POST["email"];
        QuestionsDB::deletequestion($id);

        header("Location: .?action=display_questions&userid=$id");

    }


include 'view/footer.php';


?>