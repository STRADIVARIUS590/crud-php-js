<?php

include_once 'Database.php';
var_dump($_GET);
$pdo = Database::connect();
$sql = 'INSERT INTO personas (id, nombre, apellido, edad) VALUES (:id, :nombre , :apellido , :edad )';
$statement = $pdo->prepare($sql);

$statement ->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
$statement ->bindParam(':nombre', $_GET['name'], PDO::PARAM_STR);
$statement ->bindParam(':apellido', $_GET['lastname'], PDO::PARAM_STR);
$statement ->bindParam(':edad', $_GET['age'], PDO::PARAM_INT);

if($statement->execute()){
    //echo '<h1>fqwerherwqw</h1';
}else{
    ///error al insertar
}

?>
