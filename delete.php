<?php
    include_once "connection.php";
    $id= $_GET['id'];
    $query= mysqli_query($connect, "DELETE  FROM people WHERE id = $id");
    if($query == TRUE){
        header("Location: index.php");
    }else{
        echo("cannot delete");
    }
?>