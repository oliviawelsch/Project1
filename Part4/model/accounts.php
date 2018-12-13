<?php
class Accounts {
    private $id;
    private $email;
    private $fname;
    private $lname;
    private $birthday;
    private $password;

    public function _construct($id, $email, $fname = null, $lname = null, $birthday = null, $password = null){
        $this->id = $id;
        $this->email = $email;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->birthday =$birthday;
        $this->password = $password;
    }

    public function getID(){
        return $this->id;
    }

    public function setID($value){
        $this->id = $value;
    }



    public function getEmail(){
        return $this->email;
    }

    public function setEmail($value){
        $this->email = $value;
    }



    public function getFname(){
        return $this->fname;
    }

    public function setFname($value){
        $this->fname = $value;
    }




    public function getLname(){
        return $this->lname;
    }

    public function setLname($value){
        $this->Lname = $value;
    }




    public function getBirthday(){
        return $this->birthday;
    }

    public function setBirthday($value){
        $this->birthday = $value;
    }




    public function getPassword(){
        return $this->password;
    }

    public function setPassword($value){
        $this->password = $value;
    }
}