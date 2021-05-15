<?php
	require_once __DIR__ . '/vendor/autoload.php';
	$nombreU = $_POST["nombresU"];
	$apellidoU = $_POST["apellidosU"];
	$fechaU = $_POST["fechaU"];
	$duiU = $_POST["duiU"];
	$telefonoU = $_POST["telefonoU"];
	$nombreUsuario =$_POST["nombreUsu"];
	$contrasenaU = $_POST["contrasenaU"];
	$sexoU = $_POST["sexoUsu"];
	$tipoUsua = $_POST["tipoUsu"];
	$estadoUsua = $_POST["estadoUsu"];

	$depaUsua = $_POST["dep"];
	$munUsua = $_POST["mun"];
	$caseUsua = $_POST["case"];
	$direcUsua = $_POST["direccion"];
	
	$grado = $_POST["gradoU"];
	$seccion = $_POST["seccionU"];

	$collection = (new MongoDB\Client)->escuela->usuario;

	$collection->insertOne(array(
     	'nombre' => $nombreU,
     	'apellido' => $apellidoU,
     	'fechaNacimiento' => $fechaU,
     	'dui' => $duiU,
		'telefono' => $telefonoU,
		'nomUsuario'=> $nombreUsuario,
		'contrasena' => $contrasenaU,
		'sexo' => $sexoU,
		'tipoUsuario' => $tipoUsua,
		'estadoCivil' => $estadoUsua,
		'residencia'=>array(
			'departamento' => $depaUsua,
			'municipo' => $munUsua,
			'caserio' => $caseUsua,
			'direccion'=> $direcUsua
		), 
     	'grado'=>array(
     		'grado'=>$grado,
     		'seccion'=>$seccion,
     	)
	));

	header("Location:usuario.php");
?>