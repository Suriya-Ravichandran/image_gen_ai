<?php
    $conn = mysqli_connect("mysql.selfmade.ninja","suriya","Suriya@gocourse","suriya_image");
    if(!$conn){
        echo "Database connected". mysqli_connect_error();
    }
?>
