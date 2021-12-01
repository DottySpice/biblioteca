<?php 
    session_start();

    if(isset($_POST['updateAccount'])){
        updateAccount();
    }

    if(isset($_POST['singUser'])){
        singUser();
    }

    //Funcion para actualizar Cuenta
    function updateAccount(){
        $idUser = $_GET['idUser'];
        $password = hash('sha512',trim($_POST['password']));
        $firstName = trim($_POST['firstName']);
        $lastName = trim($_POST['lastName']);
        $gender = trim($_POST['gender']);
        $idTown = trim($_POST['town']);
        $address = trim($_POST['address']);
        $email = trim($_POST['email']);

        include "connectionDB.php";
        $query = "UPDATE usuario 
        SET FirstName='$firstName',LastName='$lastName',Gender='$gender',Email='$email',Password='$password',Adress='$address',IdTown='$idTown' 
        WHERE IdUser = $idUser";

        $_SESSION['name']=$firstName." ".$lastName;

        $result = mysqli_query($connection,$query);

           //mandar ventanas js para confirmacion de updates
        switch ($_SESSION['userType']) {
            case 1:
                if(!$result){
                    header("Location: ../reader/edit-account.php?m=1");
                }
                header("Location: ../reader/edit-account.php?m=2");
                break;
            case 2:
                if(!$result){
                    header("Location: ../admin/edit-account.php?m=1");
                }
                header("Location: ../admin/edit-account.php?m=2");
                break;
            default:
                break;
        }
    } 

        //Funcion para registrar Cuenta
        function singUser(){
            include "connectionDB.php";

            $email = trim($_POST['email']);
            //Para comprobar si el email ya esta asociado o no
            $query = "SELECT * from usuario WHERE email = '$email'";
            $r = mysqli_query($connection, $query);
        
            if(mysqli_num_rows($r) > 0){
                //Mandar a hedar con un error de usuario existente
                header("location: ../sing-in.php?m=3");
            }
            else{
                //Se pasan los datos obtenidos del post a variables
                $password = hash('sha512',trim($_POST['password']));
                $firstName = trim($_POST['firstName']);
                $lastName = trim($_POST['lastName']);
                $gender = trim($_POST['gender']);
                $CURP = trim($_POST['CURP']);
                $idTown = trim($_POST['town']);
                $address = trim($_POST['address']);
                $birth = Date("Y-m-d");
        
                //Se ejecuta el query para insertar el nuevo usuario
                $query = "INSERT INTO usuario(FirstName, LastName, Gender, Email, Password, CURP, Adress, IdTown, Birth, UserType) VALUES 
                ('$firstName','$lastName','$gender','$email','$password','$CURP','$address','$idTown','$birth',1)";
                $r = mysqli_query($connection,$query);
                //Resultado exitoso, o no
                if($r){
                    //Mandar a hedader con error de que se registro con exito
                    header("location: ../sing-in.php?m=1");
                }
                else{
                    //Se manda a header con un 'Erorr Intentelo de nuevo mas tarde'
                    header("location: ../sing-in.php?m=2");
                }
            }
        } 

?>