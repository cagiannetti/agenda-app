<!DOCTYPE html>
<html lang="es"> 
<head>
	<title>Lab. Aplicaciones - EEST 2</title> 
	<meta charset="utf-8" /> <!-- mapa de caracteres -->
	<meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Responsive -->
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
		
		//recibimos la accion por GET
		$accion = $_GET['accion'];
		
		/* evaluamos la acction y generamos variables para cada datos,
		   luego en el form utilizamos el atributo value para asignar estos valores por defecto a cada caja de texto */
		if($accion=="agregar"){
			$id = "";
			$nombre = "";
			$fecha = "";
			$domicilio = "";
			$tel = "";
			$mail = "";
		}else{
			$id = $_GET['id'];
			$nombre = $_GET['nombre'];
			$fecha = $_GET['fecha'];
			$domicilio = $_GET['domicilio'];
			$tel = $_GET['tel'];
			$mail = $_GET['mail'];
		}	

	?>
	
	<form action="backend.php" method="GET">
		<fieldset>
			<legend>Datos del Contacto</legend>
			
			<label for="id" class="oculto">id</label>
			<input type="text" class="oculto" name="id" value="<?php echo $id; ?>" readonly="readonly">
			
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" value="<?php echo $nombre; ?>" autofocus>
			
			<label for="fecha">Fecha de nacimiento</label>
			<input type="date" name="fecha" value="<?php echo $fecha; ?>">
			
			<label for="domicilio">Domicilio</label>
			<input type="text" name="domicilio" value="<?php echo $domicilio; ?>">
			
			<label for="tel">Teléfono</label>
			<input type="tel" name="tel" value="<?php echo $tel; ?>">
			
			<label for="mail">Email</label>
			<input type="mail" name="mail" value="<?php echo $mail; ?>">
			
			<label for="accion" class="oculto">Accion</label>
			<input type="text" class="oculto" name="accion" value="<?php echo $accion; ?>" readonly="readonly">
				
			<input type="submit" value="Guardar" />
		</fieldset>
	</form>

	</div>
</body>
</html>

	
</body>
</html>