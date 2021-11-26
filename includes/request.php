<?php
    session_start();
    //Comprobacion de que 'post' fue llamado
    if(isset($_POST['denyLoan'])){
        denyLoan();
    }

    if(isset($_POST['confirmLoan']))
    {
        confirmLoan();
    }

    if(isset($_POST['confirmRequestBook']))
    {
        confirmRequestBook();
    }

    if(isset($_POST['confirmDeliverBook']))
    {
        confirmDeliverBook();
    }

    //Funcion para confirmar solicitud de libro
    function confirmDeliverBook(){
        if(isset($_GET['IdLoan'])){
            $IdLoan = $_GET['IdLoan'];
            $dateReturn = date("Y-m-d");
            $deadLineDate = $_GET['deadline'];

            if($dateReturn <= $deadLineDate)
            {
                $query = "UPDATE loan SET Status = '3', ReturnDate = '$dateReturn' WHERE IdLoan = $IdLoan";
            }
            else
            {
                $query = "UPDATE loan SET Status = '4', ReturnDate = '$dateReturn' WHERE IdLoan = $IdLoan";
            }
        
            include "connectionDB.php";
            $result = mysqli_query($connection,$query);
            if(!$result){
                die("Query Failed");
            }
            //Agregar Alerts 
            header("Location: ../reader/info-request-reader.php?m=$deadLineDate");
        }   
    }

    //Funcion para confirmar solicitud de libro
    function confirmRequestBook(){
        if(isset($_GET['isbn'])){
            $ISBN = $_GET['isbn'];
            $date = date('Y-m-d');
            $idUser = $_SESSION['idUser']; 
            $query = "INSERT INTO loan(LoanDate, ISBN, IdUser,Status) 
            VALUES ('$date','$ISBN','$idUser','0')";
        
            include "connectionDB.php";
            $result = mysqli_query($connection,$query);
            if(!$result){
                die("Query Failed");
            }
            //Agregar Alerts 
            header("Location: ../reader/list-books.php?m=0");
        }   
    }

    //Funcion para denegar Loan
    function denyLoan(){
        if(isset($_GET['IdLoan'])){
            $IdLoan = $_GET['IdLoan'];
            $query = "UPDATE loan SET Status = '2' WHERE IdLoan = $IdLoan";
            include "connectionDB.php";
            $result = mysqli_query($connection,$query);
            if(!$result){
                die("Query Failed");
            }
            //Agregar Alerts 
            header("Location: ../admin/awaiting-requests.php?m=2");
        }   
    }

    //Funcion para Confirmar Loan
    function confirmLoan(){
        if(isset($_GET['IdLoan'])){
            $IdLoan = $_GET['IdLoan'];
            $deadLineDate = $_POST['deadLineDate'];

            $query = "UPDATE loan SET Status = '1', DeadLineDate = '$deadLineDate' WHERE IdLoan = $IdLoan";
            include "connectionDB.php";
            $result = mysqli_query($connection,$query);
            if(!$result){
                die("Query Failed");
            }
            //Agregar Alerts 
            header("Location: ../admin/awaiting-requests.php?m=1");
        }
    }  
?>