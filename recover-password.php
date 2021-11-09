<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Home</title>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/styles.css">      
    </head>
    
    <body> 
        <?php include "resources/header-home.php"?> 

        <div class="container-home">
            <div class="container-form-login">
                <form>
                    <div class="mb-4 text-center">
                        <h1>Recover Password</h1>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"">Enter Associate Emial</label>
                        <input type="email" class="form-control" placeholder="user@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Captcha</label>
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-primary">Send Email</button> 
                    </div>      
                    <div class="mb-1 form-text">
                        <p>We will send you a new password to your associated email.</p>
                    </div >
                    <div class="mb-1 form-text">
                        <a href="index.html">Long in</a>
                    </div >
                </form>
            </div>
        </div>      
    </body>
</html>