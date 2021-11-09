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
                <form>
                    <div class="mb-4 text-center">
                        <h1>Login Screen</h1>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"">Email address</label>
                        <input type="email" class="form-control" placeholder="user@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="***************">
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-primary">Login</button> 
                    </div>      
                    <div class="mb-3">
                        <div class="form-text">
                            <a href="recover-password.html">Forgotten password?</a>
                        </div>
                    </div >
                    <div class="mb-3">
                        <div class="form-text">
                            <a href="sing-in.html"> Not yet sing in?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>      
    </body>
</html>