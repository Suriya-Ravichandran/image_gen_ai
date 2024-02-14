<?php
    $conn = mysqli_connect("localhost","root","","imageweb");
    if(!$conn){
        echo "Database connected". mysqli_connect_error();
    }
?>
