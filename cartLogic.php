<?php
            include("connect.php");
            session_start();
            print_r($_POST);
            
            
            foreach($_POST as $name => $content) { // Most people refer to $key => $value
               echo "The HTML name: $name <br>";
               echo "The content of it: $content <br>";
             }

        //$complete = $_SESSION['something'];
        $sql = "DELETE FROM cart WHERE product_id='$name'";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location: cartView.php");

        } else {
            echo "Error updating record: " . $conn->error;
        }
?>