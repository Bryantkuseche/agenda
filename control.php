<!DOCTYPE html>
<html>
<head>
	<title>Estructuras de control</title>
</head>
<body>
	<div>
		<ol>
			<li>Estructura de control IF-ELSE <br>
			<?php
			$usuario="Seb5";
			$clave="r0ckb@nd15";
			if($usuario==="Seb5"&& $clave==="r0ckb@nd15"){
				echo "Bienvenido al sistema ", $usuario ,"<br>";
			}
			else {
				echo "Usuario o clave invalidos, intente nuevamente <br>";
			}
			?>
			</li>
			<li>Estructura de control IF-ELSE-ELSEIF <br>
				<?php
					$usuario = "LH44";
					$clave = "you-are-amazing-fans";
					$creador = True;
					if($usuario == "LH44" && $clave == "you-are-amazing-fans" && $creador == True){
						echo "Bienvenido al panel de creacion ", $usuario , "<br>";
					}
					elseif($usuario = "LH44" && $clave == "you-are-amazing-fans" && $creador == False){
						echo "Bienvenido al panel de consulta ", $usuario , "<br>";
					}
				?>
			</li>
			<li>Estructura de control WHILE <br>
				<?php
					$multiplo = 2;
					$contador = 1;
					while ($contador <= 10){
						echo $multiplo , " x " , $contador, " = " , $multiplo * $contador , "<br>";
						$contador++;
					}
				?>
			</li>
			<li> Estructura de control DO-WHILE <br>
				<?php
					$contador = 1;
					do {
						echo $contador ," ";
						$contador++;
					}
					while($contador <= 11)
				?>
			</li>
			<li>Estructur de control FOR <br>
				<?php
					$contador = 1;
					for($i=5;$i>=1;$i--){
						$contador = $contador * $i;
					}
					echo $contador , " ";
				?>
			</li>
			<li>
				<?php
					$sueldo = 1800.00;
					$opcion = 1;
					while($opcion<=4){
						switch($opcion){
							case 1:
								echo "Sueldo base: ", $sueldo, "<br>";
							break;
							case 2:
								echo "Bono de productividad: ", $sueldo * 0.15, "<br>";
							break;
							case 3:
								echo "Deduccion por SSO: ", $sueldo * 0.05, "<br>";
							break;
							default:
								echo "Finalizado";
						}
						$opcion++;
					}
				?>
			</li>

		</ol>
	</div>

</body>
</html>
