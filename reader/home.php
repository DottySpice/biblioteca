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

        <link rel="stylesheet" href="../css/styles-nav-bar.css" type="text/css">
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">    
    </head>

    <body class="home">
        <?php include "../resources/vertical-header-reader.php"?> 

        <div class="container">
            <div class="m-50 vh-100 row justify-content-center align-items-center">
                <div class="col-auto text-center">
                    <h1 class="h1-large home-text">Welcome!</h1>
                    <h3 class="user-text" ><?php echo $_SESSION['name'];?></h3>
                </div> 
            </div> 
        </div>    
    </body>
</html>