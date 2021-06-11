<?php  
	setlocale(LC_ALL,"es_ES");

	$fecha = date("d")." ".date("m")." ".date("Y");


	require_once __DIR__ . '/vendor/autoload.php';
	$tituloA = $_POST["tituloAviso"];
	$informacionA = $_POST["infoAviso"];

	$collection = (new MongoDB\Client)->escuela->avisos;
	$collection->insertOne(array(
		'titulo' => $tituloA,
		'fecha' => $fecha,
		'informacion' => $informacionA
	));

	header("Location:index.php");
?>