<?php
include("php/sesion.php");
include("header.php");
 ?>
 <section id="form">
   <form action="crearPreguntas.php" class="contact_form" method="post">
     <ul>
       <li>
         <h2>Crear Encuesta</h2>
       </li>
       <li>
         <label for="email">Encuesta:</label>
         <input type="text" name="titulo" placeholder="Encuesta" required>
       </li>
       <li>
         <label for="preguntas">N&uacute;mero de preguntas:</label>
         <input type="number" name="preguntas" placeholder="preguntas" min="0" max="5" required>
       </li>
       <li>
         <input type="submit" class="submit" value="Crear" />
       </li>
     </ul>
 </section>
 <?php
 include("footer.php");
  ?>
