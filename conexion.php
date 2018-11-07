<?php
//Archivo que nos permite conectarnos a la BD

$link = mysqli_connect("localhost","root",""); //Aqui hacemos conexion con la BD, le pasamos la ubicacion (localhost), el usuario (default:root), y la clave si tenemos
mysqli_select_db($link,"php1"); //Aqui llamamos a la bd creada en phpmyadmin, colocamos lo anterior y le decimos el nombre de la BD (php1)

?>