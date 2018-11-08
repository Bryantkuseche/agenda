<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php 
include ("menu.html"); //Inclusion de archivo de Menu
include ("conexion.php"); //Inclusion de conexion a la BD
?>
<table width="600" border="1" align = "center">
<tr>
<th scope="col">CEDULA</th>
<th scope="col">NOMBRE</th>
<th scope="col">APELLIDO</th>
<th scope="col">DIRECCION</th>
<th scope="col">EMAIL</th>
<th scope="col">TELEFONO</th>
<th scope="col">SEXO</th>
<th scope="col">NACIONALIDAD</th>
<th scope="col">CIUDAD</th>
</tr>
<?php 
$sql="SELECT * FROM usuarios"; //Sentencia SQL para la consulta
$result = mysqli_query($link, $sql); //ejecuto la consulta
while ($ver=mysqli_fetch_array($result)) //mysqli_fetch_array() devuelve un arreglo con las variables de

{ ?>

<tr>
<td><?php print $ver [0]; ?></td> <!-- Mostrando valores de del arreglo -->
<td><?php print $ver [1]; ?></td>
<td><?php print $ver [2]; ?></td>
<td><?php print $ver [3]; ?></td>
<td><?php print $ver [4]; ?></td>
<td><?php print $ver [5]; ?></td>
<td><?php print $ver [6]; ?></td>
<td><?php print $ver [7]; ?></td>
<td><?php print $ver [8]; ?></td>
</tr> <?php } ?>
</table>
</body>
</html>
