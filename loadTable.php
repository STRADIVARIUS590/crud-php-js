<?php

include_once 'Database.php';
function getData(){
    $pdo = Database::connect();
    $query = 'SELECT id, nombre, apellido, edad FROM personas';
    $sql = $pdo -> prepare($query);
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $sql->execute();
    Database::disconnect();
    $htmlTable = "<table id = 'table'> <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Edad</th>
    <th>Delete</th>
    <th>Edit</th>
    </tr>";
    while($row = $sql->fetch()){
        $htmlTable = $htmlTable."<tr><td>".$row['id']."</td>
                                    <td>".$row['nombre']."</td>
                                    <td>".$row['apellido']."</td>
                                    <td>".$row['edad']."</td>
                                    <td><button class='btn btn-danger delete' id='".$row['id']."'>Borrar</button></td>
                                    <td><button class='btn btn-success edit' id='".$row['id']."' >Editar</button></td>
                                </tr>";
    }
    echo $htmlTable."</table>";
}
getData();
Database::disconnect();
?>