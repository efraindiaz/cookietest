<?php 

	$nombre = $_POST['nombre'];
	//echo $_POST['nombre'];

	setcookie('miGalleta', $nombre,time()+4800);


 ?>