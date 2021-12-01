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
                                    <th>Id Loan</th>
                                    <th>Loan Date</th>
                                    <th>Full name</th>
                                    <th>ISBN Requested</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include "../includes/connectionDB.php";
                                    $sql = "SELECT L.*,B.*, CONCAT(U.FirstName,' ',U.LastName) fullName, T.TownName as town
                                    from loan L join usuario U on L.IdUser = U.IdUser
                                    join book B on L.ISBN = B.ISBN
                                    join town T on U.IdTown = T.IdTown
                                    where L.IdUser =  U.IdUser";
                                    $query = mysqli_query($connection,$sql);
                                    
                                    foreach ($query as $renglon) {
                                        if($renglon['Status'] == 0){
                                ?>
                                <tr class="table-light">
                                    <td><?php echo $renglon['IdLoan']; ?></td>
                                    <td><?php echo $renglon['LoanDate']; ?></td>
                                    <td><?php echo $renglon['fullName']; ?></td>
                                    <td><?php echo $renglon['ISBN']; ?></td>
                                    <td>
                                        <!-- Boton para Informacion (Usar Modal)--> 
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalInfo<?php echo $renglon['IdLoan']; ?>">Info</button> 
                                        <!-- Boton para modificar (Usar Modal)-->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalConfirm<?php echo $renglon['IdLoan']; ?>">Authorize?</button> 
                                    </td>
                                </tr>
                                <?php include('../includes/modals/modals-request.php'); ?>
                            </tbody>
                            <?php }} ?>
                        </table>
                    </div>
                </div> 
            </div> 
        </div>   
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="../includes/js/alerts.js" ></script> 
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>