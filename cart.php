<?php
			include("connect.php");
            session_start();
            print_r($_POST);
		foreach($_POST as $name => $content) { // Most people refer to $key => $value
		   echo "The HTML name: $name <br>";
		   echo "The content of it: $content <br>";
		}

        //$complete = $_SESSION['something'];
        $sql = "INSERT INTO cart SELECT product_id, display_name, size, price FROM products WHERE product_id='$name' ";
        //$sql. = "UPDATE cart SET completed = 0";

		if ($conn->query($sql) === TRUE) {
		    echo "Record updated successfully";

		    header("Location: custmenu.php");

		} else {
		    echo "Error updating record: " . $conn->error;
		}

?>