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
<center><h2 style="padding-top: 3%;">Matrícula</h2></center>
  <div class="col-md-6" style="padding-left: 15%;">
        <h3 style="font-size: 18px;">Datos Alumno</h3>
    <form class="row g-2" method="post" action="addMatricula.php" style="width: 900px;">
        <div class="col-md-7">
          <label for="inputEmail4" class="form-label">Nombres *</label>
          <input type="text" class="form-control" name="nombresA" placeholder="Escribe tus nombres">
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-7">
          <label for="inputPassword4" class="form-label">Apellidos *</label>
          <input type="text" class="form-control" name="apellidosA" placeholder="Escribe tus apellidos">
        </div>
        <div class="col-md-5"></div>
        <div class="col-7">
          <label for="inputAddress" class="form-label">Fecha de Nacimiento *</label>
          <input type="text" class="form-control" name="fechaNA" placeholder="##/##/####">
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Sexo *</label>
          <select id="sexo" name="sexo" class="form-select">
            <option selected>Elegir...</option>
            <option>Femenino</option>
            <option>Masculino</option>
          </select>
        </div>
        <br>
        <h3 style="padding-top: 5%;font-size: 18px;">Datos Responsable</h3>
        <div class="col-md-7">
          <label for="inputEmail4" class="form-label">Nombres *</label>
          <input type="text" class="form-control" name="nombresR">
        </div>
        <div class="col-md-5"></div>
        <div class="col-md-7">
          <label for="inputPassword4" class="form-label">Apellidos *</label>
          <input type="text" class="form-control" name="apellidosR">
        </div>
        <div class="col-md-5"></div>
        <div class="col-7">
          <label for="inputAddress" class="form-label">Dirección *</label>
          <input type="text" class="form-control" name="direccionR" placeholder="1234 Main St">
        </div>
        <div class="col-7">
          <label for="inputAddress2" class="form-label">Teléfono *</label>
          <input type="text" class="form-control" name="telefonoR" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-7">
          <label for="inputAddress2" class="form-label">DUI *</label>
          <input type="text" class="form-control" name="duiR" placeholder="Apartment, studio, or floor">
        </div>
       <br>
       <h3 style="padding-top: 5%;font-size: 18px;">Datos Complementarios</h3>
       <div class="col-md-4">
          <label for="inputState" class="form-label">Grado *</label>
          <select id="grado" name="grado" class="form-select">
            <option selected>Elegir...</option>
            <option>Primer Grado</option>
            <option>Segundo Grado</option>
            <option>Tercer Grado</option>
            <option>Cuarto Grado</option>
            <option>Quinto Grado</option>
            <option>Sexto Grado</option>
            <option>Septimo Grado</option>
            <option>Octavo Grado</option>
            <option>Noveno Grado</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Sección *</label>
          <select id="seccion" name="seccion" class="form-select">
            <option selected>Elegir...</option>
            <option>A</option>
            <option>B</option>
          </select>
        </div>
        <div class="col-12" style="padding-top: 3%;">
            <button type="submit" class="btn btn-primary">Matricular</button>
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
