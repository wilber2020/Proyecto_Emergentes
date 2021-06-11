<?php
	require_once __DIR__ . '/vendor/autoload.php';
	$nombreAl = $_POST["nombresA"];
	$apellidoAl = $_POST["apellidosA"];
	$fechaAl = $_POST["fechaNA"];
	$sexoAl = $_POST["sexo"];

	$nombreR = $_POST["nombresR"];
	$apellidoR = $_POST["apellidosR"];
	$direccionR = $_POST["direccionR"];
	$telefonoR = $_POST["telefonoR"];
	$duiR = $_POST["duiR"];
	$sexoR = $_POST["sexoR"];
	$departamentoR = $_POST["deparR"];
	$municipioR = $_POST["municipioR"];
	$caserioR = $_POST["caserioR"];
	$direccionR = $_POST["direccionR"];

	$grado = $_POST["grado"];
	$seccion = $_POST["seccion"];
	$conteo = $_POST["contadorA"];
	
	$collection = (new MongoDB\Client)->escuela->grados;
	$collection1 = (new MongoDB\Client)->escuela->matricula;
	$collection2 = (new MongoDB\Client)->escuela->responsable;
	$collection3 = (new MongoDB\Client)->escuela->residenciaAlumno;



	$dTo= array('grado'=>$grado,'seccion'=>$seccion);
	$aca=$collection->find($dTo);
	
	foreach ($aca as $uno) {
		$usua=$uno["codigoUsuario"];
	}

	$collection1->insertOne(array(
		'codigoAlumno' => $conteo,
		'nombre' => $nombreAl,
     	'apellido' => $apellidoAl,
     	'fechaNacimiento' => $fechaAl,
     	'sexo' =>$sexoAl,
     	'grado' => array(
     		'grado' => $grado,
     		'seccion'=> $seccion,
     		'codigo' => $usua
     	)
     	
	));

	$collection2->insertOne(array(
		'codigoAlumno' => $conteo,
		'nombre' => $nombreR,
 		'Apellido' => $apellidoR,
 		'direccion' => $direccionR,
 		'telefono' => $telefonoR,
 		'dui' => $duiR,
 		'sexo'=>$sexoR 
	));

	$collection3->insertOne(array(
		'codigoAlumno' => $conteo,
		'deartamento'=>$departamentoR,
		'municipio'=>$municipioR,
		'caserio'=>$caserioR,
		'direccion'=>$direccionR
	));

	header("Location:matricula.php");
?>