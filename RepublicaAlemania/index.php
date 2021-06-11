<?php 
  session_start();
  require_once __DIR__ . '/vendor/autoload.php';
    $docente = (new MongoDB\Client)->escuela->usuario;
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
      if(!strcmp($_SESSION["xswA/:azb"], "azyb145ps")) {
     ?>
<?php  
    include("disenos/imgSvg.php");
  ?>
<main>
  <?php 
  include("disenos/navbar.php"); 
  ?>
  
  <div class="d-flex flex-column align-items-stretch bg-white" >
    
    <div class="row">
      <div class="col-md-12" style="padding-left: 25%;width: 1000px; padding-top: 5%;">
          <center><h1>BIENVENIDOS AL SISTEMA ESCOLAR</h1></center><br><br>
          <center><h1>CENTRO ESCOLAR REPUBLICA DE ALEMANIA</h1></center>
          <center><img src="Imagenes/logo.jpeg" width="600px;" height="450px;" ></center>
          <br>
      </div>
    </div>
    
  </div>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="sidebars.js"></script>
  <?php 
  }else{
    header('Location: login.php');
  }
?>
  </body>
</html>
