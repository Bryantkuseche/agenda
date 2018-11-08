<?php
//Incluimos el archivo para conectar con la BD
include "conexion.php";
//Sentencia SQL para insertar dentro de la BD, esta en Mayusculas la sintaxis SQL
$sql="INSERT INTO usuarios VALUES('$_POST[cedula]','$_POST[nombre]','$_POST[apellido]',
'$POST'[direccion]','$_POST[email]','$_POST[telefono]','$_POST[sexo]','$_POST[nacionalidad]','$_POST[ciudad]')";

//Ejecutar la consulta, utiliza 2 parametros, el link y la sentencia SQL
$result = mysqli_query($link, $sql);

if(!mysqli_error()){ //Para verificar si devuelve TRUE o FALSE, por defecto, devuelve true
?>
  <script> 
    alert("Se ingresó con total normalidad"); //Codigo en JS, para un Mensajito
   </script>
   <?php
   }//Cierre del IF
   else{
   ?>
      <script> 
        alert("Estamos en mantenimiento previo");
       </script>
      <?php } ?>//cierre de ELSE
      <meta http-equiv="refresh" content="0;URL=insertar.php">
