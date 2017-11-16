<?php
            include("connect.php");
            session_start();
            print_r($_POST);
            
            

        //$complete = $_SESSION['something'];
        $sql = "INSERT INTO orders (product_id)
                SELECT product_id 
                FROM cart";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";

            header("Location: custmenu.php");

        } else {
            echo "Error updating record: " . $conn->error;
        }
?>