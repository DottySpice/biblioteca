<?php
class User {

    var $name;
    var $lastName;
    var $idUser;
    var $userType;
    var $gender;
    var $email;
    var $password;
    var $adress;
    var $idTown;
    
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

    //Se 'setea' el usuario a las variables correspondientes con email
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
    
    public function setUserById($IdUser)
    {
        include "connectionDB.php";
        $sql = "SELECT * from usuario where IdUser = '$IdUser'";
        $query = mysqli_query($connection,$sql);

        foreach ($query as $currentUser) {
            $this -> name = $currentUser['FirstName'];
            $this -> lastName = $currentUser['LastName'];
            $this -> idUser = $currentUser['IdUser'];
            $this -> gender = $currentUser['Gender'];
            $this -> email = $currentUser['Email'];
            $this -> password = $currentUser['Password'];
            $this -> adress = $currentUser['Adress'];
            $this -> idTown = $currentUser['IdTown'];
        }
    }

    //Funciones para obtener los valores del usuario
    public function getNombre(){return $this -> name; }
    public function getLastName(){return $this -> lastName; }
    public function getIdUser(){return $this -> idUser; }
    public function getUserType(){return $this -> userType; }
    public function getGender(){return $this -> gender; }
    public function getEmail(){return $this -> email; }
    public function getPassword(){return $this -> password; }
    public function getAdress(){return $this -> adress; }
    public function getIdTown(){return $this -> idTown; }
}
?>
