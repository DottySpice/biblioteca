<?php 
session_start();
include "../resources/access-deniedR.php";
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Info Request Reader</title>

        <link rel="stylesheet" href="../css/styles-nav-bar.css" type="text/css">
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">    
    </head>

    <body class="home">
        <?php include "../resources/vertical-header-reader.php"?> 

        <div class="container">
            <div class=" row justify-content-center">
                <div class="col-auto text-center">
                    <h1 class="mb-4"> List of Request </h1> 
                    <hr size = "4">
                    <div class=" border-table shadow-table"> 
                        <table class="table table-striped table-hover table-border ">
                            <thead class="table-header header-color">
                                <tr>
                                    <th>ID Loan</th>
                                    <th>Loan Date</th>
                                    <th>Dead Line</th>
                                    <th>Return Date</th>
                                    <th>Status </th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include "../includes/connectionDB.php";
                                    $idUsuario = $_SESSION['idUser'];
                                    $sql = "SELECT L.*,B.*, CONCAT(U.FirstName,' ',U.LastName) fullName, T.TownName as town
                                    from loan L join usuario U on L.IdUser = '$idUsuario'
                                    join book B on L.ISBN = B.ISBN
                                    join town T on U.IdTown = T.IdTown
                                    where L.IdUser =  U.IdUser";
                                    $query = mysqli_query($connection,$sql);
                                    foreach ($query as $renglon) {
                                ?>
                                <tr class="table-light">
                                    <td><?php echo $renglon['IdLoan']; ?></td>
                                    <td><?php echo $renglon['LoanDate']; ?></td>
                                    <td><?php echo $renglon['DeadLineDate']; ?></td>
                                    <td><?php echo $renglon['ReturnDate']; ?></td>
                                    <td>
                                    <?php 
                                    $status= false;
                                    switch ($renglon['Status']) {
                                        case '0':
                                            echo 'Waiting for Confirmation';
                                            break;
                                        case '1':
                                            echo 'Loan Confirmed';
                                            $status = true;
                                            break;
                                                
                                        case '2':
                                            echo 'Loan Rejected';
                                            break;
                                        case '3':
                                            echo 'Loan Returned  On time';
                                            break;
                                        case '4':
                                            echo 'Loan Returned Out Of time';
                                            break;     
                                    }
                                    ?>
                                    </td>
                                    <td>
                                        <!-- Boton para Informacion (Usar Modal)--> 
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalInfoLoan<?php echo $renglon['IdLoan']; ?>">Info</button> 
                                        <?php
                                        if ($status) {
                                            echo '<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalDeliverBook'.$renglon['IdLoan'].'">Deliver Book</button>';
                                        } 
                                        ?>
                                    </td>
                                </tr>
                                <?php include('../includes/modals/modals-request.php'); ?>
                                <?php include('../includes/modals/modals-info-request.php'); ?>
                            </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div> 
            </div> 
        </div>  
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>