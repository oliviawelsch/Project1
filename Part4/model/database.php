<?php
$username = 'ow9';
$password = 'aQjbzsFNW';
$hostname = 'sql1.njit.edu';
$dsn = "mysql:host=$hostname;dbname=$username";
try {
    $db = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
    exit('ERROR');
    echo "Connection failed: " . $e->getMessage();
}
?>
