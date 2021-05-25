<?php
$Usuario = 'root';
$Contraseña = "";
$Bd_Host = 'mysql:host=localhost;dbname=contactos';


try{
    $pdo = new PDO($Bd_Host,$Usuario,$Contraseña);
    
}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
    
}



