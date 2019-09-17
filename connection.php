<?php
    $connect= mysqli_connect("localhost","root","","web_2020a");
    if(!$connect){
        die("Fail");
    }
    echo("Success");
?>