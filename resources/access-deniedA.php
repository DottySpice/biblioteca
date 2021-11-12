<?php 
//Comprobacion de si existe la sesion, y evitar accesos prohibidas para admin
if(!isset($_SESSION['name'])){
    header("location: ../index.php?m=200");
}
else{
	if($_SESSION['userType'] != 2){
		header("location: ../index.php?m=200");
	}
}

?>