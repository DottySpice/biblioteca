<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Sing In</title>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/styles.css">      
    </head>
    
    <body> 
        <?php include "resources/header-home.php"?>
        <?php include "includes/connectionDB.php"?>

        <div class="container-home">
            <div class="container-form-sing-in">
                <!-- Formulario para regisrar un nuevo usuario -->
                <form action="includes/registration.php" method="post">
                    <div class="mb-4 text-center">
                        <h1>Registration form</h1>
                    </div>
                    <div class="mb-3">
                        <div class="input-group mb-4">
                            <span class="input-group-text">First Name</span>
                            <input name="firstName" type="text" class="form-control" placeholder="Guillermo" required>
                            <span class="input-group-text">Last Name</span>
                            <input name="lastName" type="text" class="form-control" placeholder="Sierra Rivera" required>
                            <span class="input-group-text">Gender</span>
                            <select name="gender" type="text" class="form-select" >
                                <option selected>Select Your Gender</option>
                                <option value="F">Female</option>
                                <option value="M">Male</option>
                                <option value="O">Other</option>
                            </select>
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text">Date of birth</span>
                            <input name="birth" type="date" class="form-control" required>
                            <span class="input-group-text">CURP</span>
                            <input name="CURP" type="text" class="form-control" required>
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text">Email</span>
                            <input name="email" type="email" class="form-control" placeholder="example@gmail.com" required>
                            <span class="input-group-text">Password</span>
                            <input name="password" type="password" class="form-control" placeholder="************" required>
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text">Town</span>
                            <select name ="town" class="form-select" >
                                <option >Select Your Town</option>
                                <?php
                                $r = "SELECT * FROM town";
                                $query = mysqli_query($connection,$r);

                                while ($values = mysqli_fetch_array($query)) {
                                    echo '<option value= "'.$values['IdTown'].'" >'.$values['TownName'].'</option>';
                                }
                                ?>
                            </select>
                            <span class="input-group-text">Address</span>
                            <input name="address" type="text" class="form-control" required>
                        </div>
                        <div class="input-group mb-2 form-text">
                            <p class="text-danger">All Fields Are Required*</p>
                        </div>
                        <div class="mb-3 form-text row">
                            <button type="submit" class="btn btn-primary" name="singUser">Sign In</button>
                        </div>
                        <!-- Div para mostrar mensajes -->
                        <div class="mb-1">
                        <?php
                            if(isset ($_GET['m']))
                            {
                                switch($_GET['m']){
                                    case 1: echo '<div class="alert alert-success" role="alert"> Successful registration, please login </div>';
                                    break;
                                    case 2: echo '<div class="alert alert-danger" role="alert"> Oops, there was an error please try again later </div>';
                                    break;
                                    case 3: echo '<div class="alert alert-danger" role="alert"> Oops, email already registered </div>';
                                    break;
                                } 
                            }
                        ?>
                        </div>
                        <div class="mb-3">
                            <a href="index.php">Long in</a>
                        </div>
                    </div>          
                </form>
            </div>
        </div>      
    </body>
</html>