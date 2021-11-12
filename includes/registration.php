<?php 
include "connectionDB.php";

$email = trim($_POST['email']);

//Para comprobar si el email ya esta asociado o no
$query = "SELECT * from usuario WHERE email = '$email'";
$r = mysqli_query($connection, $query);

if(mysqli_num_rows($r) > 0){
    echo "el usuario ya existe";
}
else{
    $password = hash('sha512',trim($_POST['password']));
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $gender = trim($_POST['gender']);
    $CURP = trim($_POST['CURP']);
    $idTown = trim($_POST['town']);
    $address = trim($_POST['address']);
    $birth = Date("Y-m-d");

    $query = "INSERT INTO usuario(FirstName, LastName, Gender, Email, Password, CURP, Adress, IdTown, Birth, UserType) VALUES 
    ('$firstName','$lastName','$gender','$email','$password','$CURP','$address','$idTown','$birth',1)";

    $r = mysqli_query($connection,$query);

    if($r){
        echo "Usuario registado con exito";
    }
    else{
        echo "Algo fallo compa";
    }
}
?>