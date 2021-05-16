<?php 

require_once __DIR__ . '/vendor/autoload.php';
$id = $_GET["id"];
//echo "$id";
$collection = (new MongoDB\Client)->escuela->matricula;
$arreglo = array('id' => $id);
$data = $collection->find($arreglo);

 /*foreach ($data as $key) {
 	echo "<div><input type='text' value='".$key['']."'></div>";
 }*/
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>República de Alemania</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">
  </head>
  <body>
    <?php  
    include("disenos/imgSvg.php");
  ?>
<main>
  <?php  
    include("disenos/navbar.php");
  ?>

<div class="row">
  <center><h2 style="padding-top: 3%;">Modificar Datos de Alumnos</h2></center>
  <div class="col-md-6" style="padding-left: 15%;position: relative;top: -90px;">
        <h3 style="font-size: 18px;">Datos de Alumnos</h3>
    
     <?php 
     	foreach ($data as $key) {
      ?>
    <form class="row g-2" method="post" action="modificarAlumno.php" style="width: 900px;">
    	<div class="col-md-7">
          <input type="hidden" class="form-control" name="_id" value=<?php echo $key['_id']; ?>>
        </div>
        <div class="col-md-7">
          <label for="inputEmail4" class="form-label">Nombres</label>
          <input type="text" class="form-control" name="nombresA" value=<?php echo $key['nombre']; ?>>
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-7">
          <label for="inputPassword4" class="form-label">Apellidos *</label>
          <input type="text" class="form-control" name="apellidosA" value=<?php echo $key['apellido']; ?>>
        </div>
        <div class="col-md-5"></div>
        <div class="col-7">
          <label for="inputAddress" class="form-label">Fecha de Nacimiento *</label>
          <input type="text" class="form-control" name="fechaA" value=<?php echo $key['fechaNacimiento']; ?>>
        </div>
       

        <div class="col-7">
          <label for="inputState" class="form-label">Sexo *</label>
          <select id="sexo" name="sexo" class="form-select" value=<?php echo $key['sexo']; ?>>
            <option>Femenino</option>
            <option>Masculino</option>
          </select>
        </div>
        
        <div class="col-md-5"></div>
        <?php 
      	} 
       ?>
       <div class="col-12" style="padding-top: 3%;">
            <button type="submit" class="btn btn-primary">Modificar</button>
        </div>
      </form>
      
       
      
      <div style="padding-top: 10%;"></div>
  </div>
    </div>

</main>



    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="sidebars.js"></script>
  </body>
</html>

