<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="public/css/sesion.css" rel="stylesheet">
	

	<title>Formulario</title>
</head>
<body >
	
	<div class="container">
		<div class="form_top">
			<h2 id="text">Inicia <span>Sesión</span></h2>
		</div>		
		<form class="form_reg" action="modelos/Accesession.php" method="POST" enctype="multipart/form-data">
			<input class="txt"  name="mail" id="mail" type="text" placeholder="&#128100;  Username" required autofocus>
            <input class="txt"  name="pass" id="pass" type="password" placeholder="&#x1F512;  Password" required>
            <br><br>
            <input class="btn_submit" type="submit" value="INICIAR" id="logeo" name="logeo"
            </div>
		</form>

	</div>
	
</body>
</html>