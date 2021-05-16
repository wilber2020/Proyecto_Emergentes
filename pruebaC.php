<?php  
  require_once __DIR__ . '/vendor/autoload.php';
    $alumno = (new MongoDB\Client)->escuela->matricula;

    /*$alumno->insertOne(array(
    	'_idA'=>'1',
     	'nombre' => 'Estevan Alejandro',
     	'apellido' => 'Menéndez Aguirre',
     	'fechaNacimiento' =>'24/04/2005',
     	'sexo' =>'masculino',
     	'responsable' => array(
     		'_idR'=>'1',
     		'nombre' => 'Estefani Margarita',
     		'Apellido' => 'Anselmo Aguirre',
     		'direccion' => 'San Juan 1',
     		'telefono' => '7465-8956',
     		'dui' => '02451245-8',
     	),

     ));*/

   /* $nuevo = $alumno->find();
    foreach ($nuevo as $key ) {
    	echo "<div>".$key['nombreR']."</div>";
    }*/

?>