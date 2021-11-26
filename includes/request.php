<?php
    //Comprobacion de que 'post' fue llamado
    if(isset($_POST['denyLoan'])){
        denyLoan();
    }

    if(isset($_POST['confirmLoan']))
    {
        confirmLoan();
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
            $deadLineDate = Date("Y-m-d");

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