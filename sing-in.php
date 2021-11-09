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

        <div class="container-home">
            <div class="container-form-sing-in">
                <form>
                    <div class="mb-4 text-center">
                        <h1>Registration form</h1>
                    </div>
                    <div class="mb-3">
                        <div class="input-group mb-4">
                            <span class="input-group-text">First Name</span>
                            <input type="text" class="form-control" placeholder="Guillermo">
                            <span class="input-group-text">Last Name</span>
                            <input type="text" class="form-control" placeholder="Sierra Rivera">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text">Date of birth</span>
                            <input type="date" class="form-control">
                            <span class="input-group-text">CURP</span>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text">Email</span>
                            <input type="email" class="form-control" placeholder="example@gmail.com">
                            <span class="input-group-text">Password</span>
                            <input type="password" class="form-control" placeholder="************">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text">Town</span>
                            <select class="form-select" >
                                <option selected>Select Your Town</option>
                                <option value="San Francisco">Celaya</option>
                                <option value="San Francisco">Guanajuato</option>
                                <option value="San Francisco">Cortazar</option>
                            </select>
                            <span class="input-group-text">Address</span>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-group mb-2 form-text">
                            <p class="text-danger">All Fields Are Required*</p>
                        </div>
                        <div class="mb-3 form-text row">
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </div >
                        <div class="mb-3">
                            <a href="index.html">Long in</a>
                        </div>
                    </div>          
                </form>
            </div>
        </div>      
    </body>
</html>