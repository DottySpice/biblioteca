<?php 
include "includes/user.php";
include_once "includes/connectionDB.php";

session_start();

//Se crea el objeto de 'User'
$user = new User();
$error = false;

// Comprobar email y password, no sean vacios
if(!empty($_POST['email']) && !empty($_POST['password'])){
    //Se busca el email y password usando la funcion indicada
    if($user -> userExists($_POST['email'], $_POST['password']))
    {
        $email = $_POST['email'];
        $user -> setUser($email);

        //Se guardan los datos del usuario en 'SESSION"
        $_SESSION['name'] = $user -> getNombre(). " ". $user -> getLastName();
        $_SESSION['idUser'] = $user -> getIdUser(); 
        $_SESSION['userType'] = $user -> getUserType();

        //switch para comprobar tipo de usuario
        switch ($_SESSION['userType']) {
            case 1:
                header ('location: reader/home.php');
                break;
            case 2:
                header ('location: admin/home.php');
                break;
            default:
                break;
        }
    }
    else{
        $error = true;
    }
}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Home</title>

        <link rel="stylesheet" href="css/styles.css " type="text/css"> 
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">     
    </head>

    <body> 
        
        <?php include "resources/header-home.php"?>
        
        <div class="container-home">
            <div class="container-form-login">
                <!--  Formulario para inicio de sesion-->
                <form method="post" action="login.php">
                    <div class="mb-4 text-center">
                        <h1>Login Screen</h1>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"">Email address</label>
                        <input name="email" type="email" class="form-control" placeholder="user@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" placeholder="***************">
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>      
                    <div class="mb-3">
                        <?php if($error){ echo '<div class="alert alert-danger" role="alert"> Incorrect Password or Email. </div>';}?> 
                        <div class="form-text">
                            <a href="recover-password.php">Forgotten password?</a>
                        </div>
                    </div >
                    <div class="mb-3">
                        <div class="form-text">
                            <a href="sing-in.php"> Not yet sing in?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>      
    </body>
</html>