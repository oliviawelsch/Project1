<?php
require "database.php";
$id = $_GET["userid"];


$query = "SELECT * FROM questions WHERE ownerid = :id;"
$statement = $db->prepare($query);
$statement->bindValue(":id", $id);
$statement->execute();
$questions = $statement->fetchAll();
$statement->closeCursor();

?>