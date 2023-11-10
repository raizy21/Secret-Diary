<?php 

    $link = mysqli_connect("hosting", 
                            "secretdiary", 
                            "abcd", 
                            "secretdiary");

        if(mysqli_connect_error()) {
            die("Data Connection Error");
        }

?>
