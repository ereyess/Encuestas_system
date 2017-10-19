<?php
include("header.php");
isset($_POST["email"]);
    $email = $_POST["email"];
 ?>
 <section id="form">
   <form class="contact_form" action="php/control.php" method="post">
     <ul>
       <li>
         <h2>Iniciar Sesion</h2>
       </li>
       <h5>Email</h5>
       <li>
         <input type="email" name ="email" placeholder="Email" value="<?php echo $email ?>" required/>
       </li>
       <h5>Contraseña</h5>
       <li>
         <input type="password" name="password" placeholder="Password" required/>
       </li>
       <?php
       if (isset($_POST["email"])) {
         echo "Email incorrecto";
       } else {
         if(isset($_POST["password"])) {
           echo "Contraseña incorrecta";
         }
       }
        ?>
        <li>
          <input type="submit" class="submit" value="Inicar">
        </li>
        <a id="paginas1" href="javascript:window.history.back();">&laquo; Volve Atras</a>
     </ul>
   </form>
 </section>
 <?php
    include("footer.php")
  ?>
