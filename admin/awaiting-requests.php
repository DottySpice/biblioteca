<?php 
session_start();

include "../resources/access-deniedA.php";

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
        <?php include "../resources/vertical-header.php"?> 
        <div class="container">
            <div class=" row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="mb-4"> List of Requests </h1> 
                    <hr size = "4">
                    <div class=" border-table shadow-table"> 
                    <table class="table table-striped table-hover table-border ">
                        <thead class="table-header header-color">
                            <tr>
                                <th>Loan Date</th>
                                <th>Full name</th>
                                <th>ISBN Requested</th>
                                <th>Approved</th>
                                <th>Deadline Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-light">
                                <td>Fecha de solicitud solicitada</td>
                                <td>Nombre completo</td>
                                <td>ISBN requerida (icono para mostrar info del libro)</td>
                                <td>Control para ver si se acepta o no</td>
                                <td>Si es si, se seleciiona la fecha de entrega</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div> 
            </div> 
        </div>    
    </body>
</html>