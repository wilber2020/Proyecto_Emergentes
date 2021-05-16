<?php 
	require_once __DIR__ . '/vendor/autoload.php';
	$id = $_POST["_id"];
	$nombreA = $_POST["nombresA"];
	$apellidoA = $_POST["apellidosA"];
	$fechaA = $_POST["fechaA"];
	$sexo = $_POST["sexo"];
	

	
	
	$collection = (new MongoDB\Client)->escuela->matricula;

	$condicion = array('_id' => new MongoDB\BSON\ObjectID($id));
	$nuevoDato = array('$set' => array(
		'nombre' => $nombreA,
		'apellido' =>$apellidoA,
		'fechaNacimiento' =>$fechaA,
		'sexo' => $sexo,
		
		
		
	));
	$collection->updateOne($condicion,$nuevoDato);

	header("Location:alumnos.php");

 ?>