<?php

/*
$pdo = Database::connect();
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "INSERT INTO customers (name,email,mobile) values(?, ?, ?)";
     $q = $pdo->prepare($sql);
     $q->execute(array($name,$email,$mobile));
     Database::disconnect();

 */
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