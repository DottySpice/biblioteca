<?php 
//Comprobacion de si existe la sesion, y evitar accesos prohibidas para readers
if(!isset($_SESSION['name'])){
    header("location: ../index.php?m=200");
}
else{
	if($_SESSION['userType'] != 1){
		header("location: ../index.php?m=200");
	}
}

?>