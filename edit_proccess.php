<?php
    include_once "connection.php";
   
    $id= $_POST['id'];
    $name= $_POST['name'];
    $describtion= $_POST['describtion'];

    $update= mysqli_query($connect, " UPDATE  people  SET  name= '$name', describtion= '$describtion'  WHERE id= $id ");

    if($update == TRUE){
        header("Location: index.php");
    }else{
        echo("cannot update");
    }

?>