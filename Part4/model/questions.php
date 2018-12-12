<?php
class Questions {
    private $ownerid;
    private $id;
    private $title;
    private $body;
    private $skills;

    public function _construct($title, $body, $skills, $ownerid){
        $this->title = $title;
        $this->body = $body;
        $this->skills = $skills;
        $this->ownerid = $ownerid;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($value){
        $this->title = $value;
    }



    public function getBody(){
        return $this->body;
    }

    public function setBody($value){
        $this->body = $value;
    }



    public function getSkills(){
        return $this->skills;
    }

    public function setSkills($value){
        $this->skills = $value;
    }



    public function getID(){
        return $this->id;
    }

    public function setID($value){
        $this->id = $value;
    }



    public function getOwnerid(){
        return $this->ownerid;
    }

    public function setOwnerid($value){
        $this->ownerid = $value;
    }
}

?>