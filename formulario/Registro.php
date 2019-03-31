<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../public/css/registro.css" rel="stylesheet">
	<link href="../public/css/resetRe.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	
	<title>Formulario</title>
</head>
<body>
	<video src="../public/video/registro.mp4" autoplay loop muted></video>
	

	<div class="container">
		<div class="form_top">
			<h2>Formulario <span>Registro</span></h2>
		</div>		
		<form class="form_reg" action="proceso.php" method="POST" enctype="multipart/form-data">
			<input class="input"  name="Nombre" type="text" placeholder="&#128100;  Nombre" required autofocus>
            <input class="input"  name="Email" type="email" placeholder="&#9993;  Email" required>
            <input class="input"  name="Telefono" type="text" placeholder="&#128222;  Telefono" required>
            <input class="input"  name="Direccion" type="text" placeholder="&#10169;  Dirección" required>
            <input class="input"  name="Edad" type="text" placeholder="&#x026A5;;  Edad" required>
            <input class="input"  name="Universidad" type="text" placeholder="&#x026EA;  Universidad" required>
			<textarea class="input" name="Comentario" placeholder="Deje algun comentario...."></textarea>
            <div class="btn_form">
            	<input class="btn_submit" type="submit" value="REGISTRAR">
            	<input class="btn_reset" type="reset" value="LIMPIAR">	
            </div>
		</form>

	</div>
	
</body>
</html>