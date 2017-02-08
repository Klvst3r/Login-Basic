<?php
	$conn = @mysql_connect("localhost","dev","desarrollo") or die("No se encontró el servidor");
	mysql_select_db("login-basic",$conn)or die("No se encontró la base de datos");
?>