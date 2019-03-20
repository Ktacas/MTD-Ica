<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/main.css" rel="stylesheet">
	

	<title>Formulario</title>
</head>
<body >
	
	<div class="container">
		<div class="form_top">
			<h2 id="text">Inicia <span>Sesión</span></h2>
		</div>		
		<form class="form_reg" action="validar.php" method="POST" enctype="multipart/form-data">
			<input class="input"  name="mail" type="text" placeholder="&#128100;  Username" id="txt" required autofocus>
            <input class="input"  name="pass" type="password" placeholder="&#x1F512;  Password"  id="txt" required>
            <br><br>
            <center><input class="btn_submit" type="submit" value="SIGN UP" id="txt"></center>
         	
            </div>
		</form>

	</div>
	
</body>
</html>