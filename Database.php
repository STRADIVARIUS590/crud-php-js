<?php
class Database 

//


//

{

  
/*
  CODIGO DE LA CONEXION A LA BASE DE DATOS
*/
private static $dbName;// = 'prueba';// = 'prueba';  // el nombre de la base de  datos 
private static $dbHost ;//= 'localhost'; 
private static $dbUsername;//= 'root'; 
private static $dbUserPassword;//= 'root'; // poner su contraseña

private static $cont = null;


public function __construct() {
  die('Init-Función no permitida');
}

public static function connect() {
  // Permitir solo una conexión para la totalidad del acceso
  if ( null == self::$cont )

  {
  try{
    $contenido = parse_ini_file('.env', false);
    self::$dbName = $contenido['DB_NAME']; 
    self::$dbHost = $contenido['DB_HOST'];
    self::$dbUsername = $contenido['DB_USER'];
    self::$dbUserPassword = $contenido['DB_PASSWD'];

    
    // include_once 'loadEnv.php';
    
     self::$cont = new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
  }
  catch(PDOException $e){
    die($e->getMessage());
  }
} 
return self::$cont;
}
public static function disconnect()
{
self::$cont = null;
}
}
 