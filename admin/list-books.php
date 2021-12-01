<?php 
session_start();

include "../resources/access-deniedA.php";

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Books</title>

        <link rel="stylesheet" href="../css/styles-nav-bar.css" type="text/css">
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">    
    </head>

    <body class="home">
        <?php include "../resources/vertical-header.php"?> 

        <div class="container">
            <div class="text-center">
                <h1 class="mb-4">Books </h1>   
            </div>
            <div class=" row justify-content-center">
                <hr size = "4">
                <div class="col">
                    <h4 class="mb-4"> Add New Book </h4> 
                    <!-- Formulario para agregar nuevo libro-->
                    <form id="formAddBook" method="post" action="../includes/book.php">
                        <div class="mb-3">
                            <label class="form-label"">ISBN</label>
                            <input name="isbn"  class="form-control" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Book Name</label>
                            <input name="bookName" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Topic</label>
                            <input name="topic" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Publisher</label>
                            <input name="publisher" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Year of Edition</label>
                            <input type="date" name="yearOfEdition" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Author</label>
                            <input name="author" class="form-control" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Number of Pages</label>
                            <input name="numberOfPages" class="form-control" placeholder="">
                        </div>
                        <div class="row">
                            <button onclick="return addBookJS()" name="addBook" class="btn btn-primary">Add Book</button>
                        </div>
                        <div class="mb-2">
                        <?php
                            if(isset ($_GET['m']))
                            {
                                switch($_GET['m']){
                                    case 1: echo '<div class="alert alert-success" role="alert"> Book added successfully</div>';
                                    break;
                                    case 2: echo '<div class="alert alert-danger" role="alert"> Something went wrong, try again</div>';
                                    break;
                                } 
                            }
                        ?> 
                        </div>                   
                    </form>
                </div> 

                <div class="col-md-7 offset-md-1">
                    <h4 class="mb-4"> List of Books </h4> 
                    <div class=" border-table shadow-table"> 
                        <!-- Tabla para cargra los libros en la BD-->
                        <table class="table table-striped table-hover table-border">
                            <thead class="table-header header-color  text-center">
                                <tr>
                                    <th>ISBN</th>
                                    <th>Book Name</th>
                                    <th>Author</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "../includes/connectionDB.php";
                                $sql = "SELECT * from book ORDER BY ISBN ASC";
                                $query = mysqli_query($connection,$sql);
                                foreach ($query as $renglon) {
                                ?>
                                <tr class="table-light text-center">
                                    <td><?php echo $renglon['ISBN']; ?></td>
                                    <td><?php echo $renglon['BookName']; ?></td>
                                    <td><?php echo $renglon['Author']; ?></td>
                                    <td>
                                        <!-- Boton para modificar (Usar Modal)-->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalModify<?php echo $renglon['ISBN']; ?>">Modify</button> 
                                        <!-- Boton para Informacion (Usar Modal)-->
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalInfo<?php echo $renglon['ISBN']; ?>">Info</button> 
                                        <!-- Boton para deletar (Usar Modal)-->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete<?php echo $renglon['ISBN']; ?>">Delete</button> 
                                    </td>
                                </tr>
                                <!--Ventanas Modal para CRUD--->
                                <?php include('../includes/modals/modals-book.php'); ?>
                            </tbody>
                            <?php } ?>
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