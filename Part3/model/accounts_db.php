<?php

function checklogin($email_address, $password){
    global $db;
    $query = "SELECT * FROM accounts WHERE email = :email and password =:password";
    $statement = $db->prepare($query);
    $statement->bindValue(":email", $email_address);
    $statement->bindValue(":password", $password);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();

    $id=$user['id'];

    if ($id != NULL ){return $id;} else{return FALSE;}
}

function addnewuser ($first_name, $last_name, $birthday, $email_address, $password){
    global $db;
    $query = "INSERT INTO accounts
             (email, fname, lname, birthday, password)
         VALUES (:email_address,:first_name, :last_name, :birthday, :password)";

    $statement = $db->prepare($query);
    $statement->bindValue(':email_address', $email_address);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':birthday', $birthday);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $id = $db->lastInsertId();
    $statement->closeCursor();

    return $id;

}


?>