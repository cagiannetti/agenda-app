<!DOCTYPE html>
<html lang="es"> 
<head>
	<title>Lab. Aplicaciones - EEST 2</title> 
	<meta charset="utf-8" /> <!-- mapa de caracteres -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="estilos.css" />
</head>

<body>
<div class="contenedor">
		<h1>Mis Contactos</h1>
		<nav>
			<ul>
				<li><a href="index.php">Volver</a></li>
			</ul>
		</nav>

<?php
	
	//obtengo el parámetro acción de la URL: agregar-modificar-eliminar
	$accion = $_GET['accion'];

	//abrimos conexión con BD
	require ('abrir-conexion.php');

	//evaluamos las diferentes acciones solicitadas por el usuario
	switch($accion){
		case "agregar":
			//recibimos los datos desde el formulario
			$nombre = $_GET['nombre'];
			$fecha = $_GET['fecha'];
			$domicilio = $_GET['domicilio'];
			$tel = $_GET['tel'];
			$mail = $_GET['mail'];
			$consulta="INSERT INTO contactos (nombre, fecha, domicilio, tel, mail) VALUES ('$nombre', '$fecha', '$domicilio', '$tel', '$mail')";
			echo "Se insertó el nuevo contacto: $nombre $fecha $domicilio $tel $mail";
			break;
		
		case "modificar":
			//recibimos los datos desde el formulario
			$id = $_GET['id'];
			$nombre = $_GET['nombre'];
			$fecha = $_GET['fecha'];
			$domicilio = $_GET['domicilio'];
			$tel = $_GET['tel'];
			$mail = $_GET['mail'];
			$consulta="UPDATE contactos SET nombre='$nombre', fecha='$fecha', domicilio='$domicilio', tel='$tel', mail='$mail' WHERE id='$id'";
			echo "Se modificó el contacto $nombre $fecha $domicilio $tel $mail";
			break;

		case "eliminar":
			//recibimos la id del contacto a borrar
			$id = $_GET['id'];
			$consulta="DELETE FROM contactos WHERE id='$id'";
			echo "Se eliminó el contacto.";
			break;

		default:
		echo "Nunca debería entrar acá";
		break;
	}


	//ejecutamos la consulta
	$conexion->query($consulta);
	
	//cerramos la conexión con la BD
	require ('cerrar-conexion.php');


?>



</div>
</body>
</html>


