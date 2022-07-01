<?php

include_once 'Database.php';
$pdo = Database::connect();
$sql = 'UPDATE personas SET nombre= ?, apellido=?, edad=? WHERE id = ?';
$statement = $pdo->prepare($sql);
$statement ->bindValue(1, $_GET['name']);
$statement ->bindValue(2, $_GET['lastname']);
$statement ->bindValue(3, $_GET['age']);
$statement ->bindValue(4, $_GET['id']);

if($statement->execute()){
 echo include('loadTable.php');  // esto pone una fila con un '1' en el hmtl de la tabla 
}else{
    ///error  
}
Database::disconnect();
?>