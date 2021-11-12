<?php 

session_start();

include "../resources/access-deniedR.php";

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Home Reader</title>

        <link rel="stylesheet" href="css/styles.css " type="text/css"> 
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">     
    </head>

    <body> 
        <?php //include "resources/header-home.php"?>
        
        <div class="container-home">
            <div class="container-form-login">
                <div class="mb-4 text-center">
                    <h1>Welcome!</h1>
                    <h1><?php echo $_SESSION['name']; ?></h1>
                </div>
            </div>
        </div>      
    </body>
</html>