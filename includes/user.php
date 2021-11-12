<?php

class User {
    
    var $name;
    var $lastName;
    var $idUser;
    var $userType;

    //Funcion para comprobar si el usuario existe, regresa un valor booleano
    public function userExists($email, $password){
        include "connectionDB.php";
        $password = hash('sha512',$password);
        $sql = "SELECT * from usuario
        where Email = '$email' and Password = '$password'";
        
        $query = mysqli_query($connection,$sql);
        $array = mysqli_num_rows($query);

        if($array){
            return true;
        }
        else{
            return false;
        }
    }

    //Se 'setea' el usuario a las variables correspondientes
    public function setUser($email)
    {
        include "connectionDB.php";
        $sql = "SELECT * from usuario where Email = '$email'";
        $query = mysqli_query($connection,$sql);

        foreach ($query as $currentUser) {
            $this -> name = $currentUser['FirstName'];
            $this -> lastName = $currentUser['LastName'];
            $this -> idUser = $currentUser['IdUser'];
            $this -> userType = $currentUser['UserType'];
        }
    }

    //Funciones para obtener los valores del usuarip
    public function getNombre(){return $this -> name; }
    public function getLastName(){return $this -> lastName; }
    public function getIdUser(){return $this -> idUser; }
    public function getUserType(){return $this -> userType; }
}

?>
