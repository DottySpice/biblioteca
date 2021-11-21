<?php
    //Comprobacion de que 'post' fue llamado
    if(isset($_POST['addBook'])){
        addBook();
    }

    if(isset($_POST['deleteBook']))
    {
        deleteBook();
    }

    if(isset($_POST['updateBook']))
    {
        updateBook();
    }

    //funcion para eliminar libro
    function deleteBook(){
        if(isset($_GET['isbn'])){
            $isbn = $_GET['isbn'];
            $query = "DELETE FROM BOOK where ISBN = $isbn";
            include "connectionDB.php";
            $result = mysqli_query($connection,$query);
            if(!$result){
                die("Query Failed");
            }
            //Agregar un modal/ alertar para confirmar eliminacion
            header("Location: ../admin/list-books.php?m=3");
        }   
    }

    //Funcion para actualizar libro
    function updateBook(){
        $isbn = $_GET['isbn'];
        $bookName = $_POST['bookName'];
        $topic = $_POST['topic'];
        $publisher = $_POST['publisher'];
        $yearOfEdition = $_POST['yearOfEdition'];
        $author = $_POST['author'];
        $numberOfPages = $_POST['numberOfPages'];

        include "connectionDB.php";
        $query = "UPDATE book 
        SET BookName='$bookName ',Topic='$topic ',Publisher='$publisher',YearOfEdition='$yearOfEdition',Author='$author',NumberOfPages='$numberOfPages' 
        WHERE ISBN=$isbn";

        $result = mysqli_query($connection,$query);
        if(!$result){
            header("Location: ../admin/list-books.php?m=5");
        }
        header("Location: ../admin/list-books.php?m=4");
    } 

    //funcion para agregar nuevo libro
    function addBook(){
        $ISBN = $_POST['isbn'];
        $bookName = $_POST['bookName'];
        $topic = $_POST['topic'];
        $publisher = $_POST['publisher'];
        $yearOfEdition = $_POST['yearOfEdition'];
        $author = $_POST['author'];
        $numberOfPages = $_POST['numberOfPages'];

        include "connectionDB.php";
        $query = "INSERT INTO book(ISBN, BookName, Topic, Publisher, YearOfEdition, Author, NumberOfPages) 
        VALUES ('$ISBN','$bookName','$topic','$publisher','$yearOfEdition','$author ','$numberOfPages')";
        $result = mysqli_query($connection,$query);
        if(!$result){
            header("Location: ../admin/list-books.php?m=2");
        }
        header("Location: ../admin/list-books.php?m=1");
    }  
?>