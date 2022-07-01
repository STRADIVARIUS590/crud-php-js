<?php

echo '<h1>delete</h1>';
include_once 'Database.php';
var_dump($_GET);
$pdo = Database::connect();
$sql = 'DELETE FROM personas WHERE id = :id';
$statement = $pdo->prepare($sql);

$statement ->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
 

if($statement->execute()){
    //echo '<h1>fqwerherwqw</h1';
    
}else{
    ///error
}

Database::disconnect();
?>