<?php
include('conexion.php');

$consulta=mysqli_query($conexion,"SELECT * FROM login");
//el mysql_fetch_array() debuelve los registros de la tabla usuarios
$filas=mysqli_fetch_array($consulta);

    $usuario=$filas['email'];
    $pass=$filas['pass'];

if ($email=$_POST['email'] != $usuario) {
    $email=$_POST['email'];
    ?>
    
   <form name="formulario" method="post" action="../login.php">
      <input type="hidden" name="email" value="<?php echo $email; ?>">
    </form>
    <?php
  } else {
    if($password=$_POST['password']!=$pass) {
      ?>
    <form name="formulario" method="post" action="../login.php">
        <input type="hidden" name="password" value="<?php echo $password; ?>">
      </form>
      <<?php
    } else {
      //inicio de sesion
      session_start();
      //Declaro mis variables de sesion
      $_SESSION["autentificado"] = true;
      $_SESSION["usuario"] = $_POST['email'];

      header("Location: ../crearEncuesta.php?entrar=si");
    }
  }
 ?>
 <script type="text/javascript">
 //Redirecciona con el formulario creado
 document.formulario.submit();
 </script>
