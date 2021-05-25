<?php
include_once('Conexion.php');
$id = $_GET['id'];
$Eliminar = 'DELETE FROM detalles WHERE id=?';
$SenEliminar = $pdo->prepare($Eliminar);
$SenEliminar -> execute(array($id));
header('location:index.php');