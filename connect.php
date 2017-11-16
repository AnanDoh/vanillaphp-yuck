        <?php
            $user = "root";
            $pw = "";
            $conn = "tsarbucks";

            $conn = new mysqli("p:127.0.0.1", $user, $pw, $conn, 3306); // connection using TCP on port 3306

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            echo "OwO ";

            ?>