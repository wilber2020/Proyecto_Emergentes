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

	
	$collection = (new MongoDB\Client)->escuela->usuario;
	$collection1 = (new MongoDB\Client)->escuela->matricula;



	$dTo= array('grado.grado'=>$grado,'grado.seccion'=>$seccion);
	$aca=$collection->find($dTo);
	
	foreach ($aca as $uno) {
		$grad=$uno["_id"];
	}

	$collection1->insertOne(array(
		//'grado'=>$grad,
		//'alumno'=>array(
		//	'nombre' => $nombreAl,
	     //	'apellido' => $apellidoAl,
	     	//'fechaNacimiento' => $fechaAl,
	     //	'sexo' =>$sexoAl,
	     //	'responsable' => array(
	    //	'nombreR' => $nombreR,
	     //		'ApellidoR' => $apellidoR,
	     	//	'direccion' => $direccionR,
	     //		'telefono' => $telefonoR,
	     //		'dui' => $duiR,
	     //		'sexoR'=>$sexoR,
	     //		'residencia'=>array(
	     //			'deartamento'=>$departamentoR,
	     //			'municipio'=>$municipioR,
	     //			'caserio'=>$caserioR,
	     //			'direccion'=>$direccionR
	     	//	)

			 'nombre' => $nombreAl,
			 'apellido' => $apellidoAl,
			 'fechaNacimiento' => $fechaAl,
			 'sexo' =>$sexoAl,
			 
				 'nombreR' => $nombreR,
				 'Apellido' => $apellidoR,
				 'direccion' => $direccionR,
				 'telefono' => $telefonoR,
				 'dui' => $duiR,
			
			 'grado'=>array(
				 'grado'=>$grado,
				 'seccion'=>$seccion,
			 )
	     	
		
     	
	));

	//https://stackoverflow.com/questions/22998466/decoding-json-using-php-from-mongo
	//https://www.php.net/manual/es/function.json-decode.php
	header("Location:matricula.php");
?>


