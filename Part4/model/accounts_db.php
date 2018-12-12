<?php

class AccountsDB{
   public static function checklogin($email_address, $password)
    {
        global $db;
        $query = "SELECT * FROM accounts WHERE email = :email and password =:password";
        $statement = $db->prepare($query);
        $statement->bindValue(":email", $email_address);
        $statement->bindValue(":password", $password);
        $statement->execute();
        $statement->closeCursor();

        $row = $statement->fetch();
        $accounts = new Account($row['email'], $row['password']);

        if ($accounts != NULL) {
            return $accounts;
        } else {
            return FALSE;
        }
    }

    public static function addnewuser($first_name, $last_name, $birthday, $email_address, $password)
    {
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
        $statement->closeCursor();

        $accounts = array();
        foreach($statement as $row){
            $account = new Account($row['email_address'], $row['first_name'], ['last_name'], ['birthday'], ['passowrd']);
            $accounts[] = $account;
        }


    }

}
?>