<?php  
	require_once __DIR__ . '/vendor/autoload.php';
	$dato = $_GET["id"];

$collection = (new MongoDB\Client)->escuela->matricula;



/*foreach ($numero as $key) {
	echo "<div><h1>".$key["nombre"]."</h1></div>";
}*/

$collection->deleteMany(['_id' => new MongoDB\BSON\ObjectID($dato)]);

header("Location:alumnos.php");
?>