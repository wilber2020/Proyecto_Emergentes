<?php  
  require_once __DIR__ . '/vendor/autoload.php';
  $usuario=$_POST["usua"];
  $contra=$_POST["contra"];


  $archivo = file('black_list.txt');
  $encontrado=0;

  /*foreach ($archivo as $linea) {
    if(strpos($usuario,trim($linea))!==false)
      {
       $encontrado=1;
       break;
     }
  }*/
  if ($encontrado==1) {
/* echo "<html  >";
    echo "<head>";
    echo "</head>";
    echo '<body style="background-color: #252850"><br><br><br><br><br><br><br>';
    echo '<center><h2 class="h1 mb-3 font-weight-normal text-white">ERROR</h2></center>';
    echo '<center><div class="col-sm-7">';
    echo '<center><h2 class="h2 mb-3 font-weight-normal text-white">Las palabras que usted utilizo no son permitidas en el sistema. Por favor le pedimos se auntentique de nuevo.<BR> Gracias!</h2></center>' ;
    echo "<center><a href='login.php' title='regresar' ><button class='btn btn-danger'>Regresar al login</button></a></center>";
    echo "</div>";
    echo "</body >";
    echo "</html>"; */
    
  }else{
  $docente = (new MongoDB\Client)->escuela->usuario;
  //$modificada=sha1(md5($contra));
  $consulta = array('nomUsuario'=>$usuario,'contrasena'=>$contra);
  $consulta1 =array('nomUsuario'=>$usuario);

  $dat= $docente->findOne($consulta);
  $otr = $docente->find($consulta1);

  foreach ($otr as $key ) {
    $cargo = $key['tipoUsuario'];
    $codigo = $key['codigoUsuario'];
  }

  session_start();
  $_SESSION["xswA/:azb"]="null";
  $_SESSION['cod']='null';

  if (!empty($dat)) {
  //  fclose($archivo);
    if($cargo=="Administrador"){
      $_SESSION["xswA/:azb"]="azyb145ps";
      header("Location: index.php");
    } elseif ($cargo=="Docente") {
      $_SESSION['cod']="$codigo";
       $_SESSION["xswA/:azb"]="azyb145ps";
      header("Location: indexDocente.php");
    }
  }else{
    unset($_SESSION["xswA/:azb"]);
    session_destroy();
    header("Location: login.php");
  }
}
?>
