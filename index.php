<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		if(isset($_COOKIE['miGalleta'])){
			echo 'Valor de la galleta '.$_COOKIE['miGalleta'];
			echo '<br>';
		}
	 ?>
	<form action="galleta.php" method="post">
		<input type="text" name="nombre" placeholder="nombre">
		<input type="submit">
	</form>
	
</body>
</html>

