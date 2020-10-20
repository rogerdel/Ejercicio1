<?php 
include 'conexion.php';
	
	session_start();
	if($_SESSION["ci"]){
		$ci = $_SESSION["ci"];
		$sql = "Select fotoSecion, color from login where ci = '".$ci."'";
		$res = mysqli_query($con,$sql);
		$ans = mysqli_fetch_row($res);
		
		$img = $ans[0];
		$color = $ans[1];
		echo "<img src = 'imagenes/".$img."'>";
	}
	else{
		echo "<img src = 'imagenes/perfil.png'>";
	}
				
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body <?php echo "style='background-color:$color'";?> >
