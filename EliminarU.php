<?php  
	require_once __DIR__ . '/vendor/autoload.php';
	$dato = $_GET["id"];

$collection = (new MongoDB\Client)->escuela->usuario;

$collection->deleteMany(['dui' => $dato]);

header("Location:usuario.php");
?>