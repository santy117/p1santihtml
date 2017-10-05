<?php


	if ($_SERVER['REQUEST_METHOD']== 'POST') {
		$metodo = $_POST;
	}
	else {
		$metodo = $_GET;
	}
$infoserver1=$_SERVER['SERVER_NAME'];
$nombre=$metodo["registro1"];
$telefono=$metodo["registro2"];
$password=$metodo["pass"];
$sexo=$metodo["genero"];
$fechanac=$metodo["fecha"];
$campovacio="No se ha rellenado este campo";
$pelicula=$metodo["nombrepeli"];
$sinopsis=$metodo["info"];
$director=$metodo["director"];
$estreno=$metodo["fechaestreno"];
$hora= $metodo["hora"];
$navegador=$metodo["navegador"];
?>

<html>
<head>
  <link rel="stylesheet" type="text/css" href="p1.css">
  </head>
<body>
	<h1>
		<p align="center">FORMULARIO DE PELICULAS</p>
		</h1>
		<br>
<?php echo("HORA : " . $hora); ?> <br>
<?php echo("NAVEGADOR : " . $navegador); ?> <br>
<?php echo("NOMBRE DEL SERVIDOR : " . $infoserver1); ?> <br>
	<table>
	<tr>
	<td>
	<div id="columnaphp">
		<table>
			<tr>
				<h2>INFORMACION PERSONAL</h2> <br><br><br>
			</tr>
			<tr>
				<?php
					if (empty($nombre)) {
  						$nombre=$campovacio;
					}
					if (empty($telefono)) {
  						$telefono=$campovacio;
					}
					if (empty($password)) {
  						$password=$campovacio;
					}
					if (empty($sexo)) {
  						$sexo=$campovacio;
					}
					if (empty($fechanac)) {
  						$fechanac=$campovacio;
					}
				?>
				<?php echo("NOMBRE: " . $nombre); ?> <br><br>
				<?php echo("TELEFONO: " . $telefono); ?> <br><br>
				<?php echo("CONTRASEÑA: " . $password); ?> <br><br>
				<?php echo("SEXO: " . $sexo); ?> <br><br>
				<?php echo("FECHA DE NACIMIENTO: " . $fechanac); ?> <br><br>
			</tr>
		</table>
	</div>
</td>
<td>
	<div id="columnaphp2">
		<h2>FOTO DE PERFIL:</h2> <br><br>
		<br> Nombre de imagen :
		<?php if(empty($_FILES['fotoperfil'])) {
			echo 'No se ha seleccionado foto de perfil';
			}else{
			echo $_FILES['fotoperfil']['name'];
		}
		?> <br>
		Tamaño de la imagen :
		<?php if(($_FILES['fotoperfil']['size']==0)) {
			echo 'No se ha seleccionado foto de perfil';
		}else{
			echo $_FILES['fotoperfil']['size'];
			echo ' bytes';
				}
		 ?> <br>
		Extension de la imagen :
		<?php if(empty($_FILES['fotoperfil'])) {
			echo 'No se ha seleccionado foto de perfil';
		}else{
			echo $_FILES['fotoperfil']['type'];
		}
		?>

	</div>
</td>
</tr>
<tr>
<td>
	<div id="columnaphp3">
		<table>
			<tr>
				<h2>PELICULA REGISTRADA: </h2><br><br><br>
			</tr>
			<tr>
				<?php
					if (empty($pelicula)) {
  						$pelicula=$campovacio;
					}
					if (empty($sinopsis)) {
  						$sinopsis=$campovacio;
					}
					if (empty($director)) {
  						$director=$campovacio;
					}
						if (empty($estreno)) {
  						$estreno=$campovacio;
					}

				?>
				<?php echo("Pelicula: " . $pelicula); ?> <br><br>
				<?php echo("Sinopsis: " . $sinopsis); ?> <br><br>
				<?php echo("Director: " . $director); ?> <br><br>
				<?php echo("Fecha de estreno: " . $estreno); ?> <br><br>
			</tr>
		</table>
	</div>
</td>

</tr>
</table>
<br>
<br>
</body>
</html>
