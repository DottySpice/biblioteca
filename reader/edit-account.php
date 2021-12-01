<?php 
session_start();
include "../resources/access-deniedR.php";
include "../includes/user.php";
include "../includes/connectionDB.php";

$user = new User();

//Se setea el usuario mediante el id del Session
$user -> setUserById($_SESSION['idUser']);

$name  = $user -> getNombre();
$lastName = $user -> getLastName();
$idUser = $user -> getIdUser();
$userType = $user -> getUserType();
$gender = $user -> getGender();
$email = $user -> getEmail();
$password = hash('sha512',$user -> getPassword());
$adress = $user -> getAdress();
$idTown = $user -> getIdTown();
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Home Admin</title>

        <link rel="stylesheet" href="../css/styles-nav-bar.css" type="text/css">
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">  
    </head>

    <body class="home">
        <?php include "../resources/vertical-header-reader.php"?> 
        
        <div class="container">
            <div class="m-50 vh-100 row justify-content-center align-items-center">
                <div class="col-auto text-center">
                    <div class="container-form-edit-account">
                        <form id="formUpdateAccount" action="../includes/registration.php?idUser=<?php echo $idUser?>" method="post">
                            <div class="mb-4 text-center">
                                <h1>Edit Account Info</h1>
                            </div>
                            <div class="mb-3">
                                <div class="input-group mb-4">
                                    <span class="input-group-text">First Name</span>
                                    <input name="firstName" type="text" class="form-control" value=" <?php echo $name ?>">
                                    <span class="input-group-text">Last Name</span>
                                    <input name="lastName" type="text" class="form-control" value=" <?php echo $lastName ?>">
                                    <span class="input-group-text">Gender</span>
                                    <select name="gender" type="text" class="form-select" >
                                        <option>Select Your Gender</option>
                                        <option value="F" <?php if($gender == 'F') echo 'selected'?> >Female</option>
                                        <option value="M" <?php if($gender == 'M') echo 'selected'?> >Male</option>
                                        <option value="O" <?php if($gender == 'O') echo 'selected'?> >Other</option>
                                    </select>
                                </div>
                                <div class="input-group mb-4">
                                    <span class="input-group-text">Email</span>
                                    <input name="email" type="email" class="form-control" value=" <?php echo $email ?>">
                                    <span class="input-group-text">Password</span>
                                    <input name="password" type="password" class="form-control" value=" <?php echo $password ?>">
                                </div>
                                <div class="input-group mb-4">
                                    <span class="input-group-text">Town</span>
                                    <select name ="town" class="form-select" >
                                        <option >Select Your Town</option>
                                        <?php
                                        $r = "SELECT * FROM town";
                                        $query = mysqli_query($connection,$r);

                                        while ($values = mysqli_fetch_array($query)) {
                                            $result = '<option value= "'.$values['IdTown'].'"';
                                            if ($values['IdTown'] == $idTown) {
                                                $result .= ' selected >'.$values['TownName'].'</option>';
                                            }
                                            else{
                                                $result .= '>'.$values['TownName'].'</option>';
                                            }
                                            echo $result;
                                        }
                                        ?>
                                    </select>
                                    <span class="input-group-text">Address</span>
                                    <input name="address" type="text" class="form-control" value=" <?php echo $adress ?>">
                                </div>
                                <div class="input-group mb-2 form-text">
                                    <p class="text-danger">CURP AND BIRTH ARE DISABLED*</p>
                                </div>
                                <div class="mb-3 form-text row">
                                    <button onclick="return updateAccountJS()" class="btn btn-primary" name="updateAccount" >Update</button>
                                </div>
                            </div>          
                        </form>
                    </div> 
                </div> 
            </div> 
        </div>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="../includes/js/alerts.js" ></script>     
    </body>
</html>