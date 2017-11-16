<!doctype html>
<html lang="en">
  <head>
    <title>TsarBucks</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
  	 <body style="background-color:#212121;">
	   <?php include('navbar.php'); ?>
     <h1 style="color:#DF0500 ;">Pending Orders </h1>



     <div id="see">
       <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" style="color:#DF0500 ;">Product Name</th>
            <th scope="col" style="color:#DF0500 ;">Size (oz)</th>
            <th scope="col" style="color:#DF0500 ;">Quantity</th>
            <th scope="col" style="color:#DF0500 ;">Price</th>
            <th scope="col" style="color:#DF0500 ;">Complete</th>
          </tr>
        </thead>
        <tbody>
        <?php
            include("connect.php");
            $sql = "SELECT product_id, display_name, price, size, created_at FROM products";



            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo 
                  "<tr>"
                    ."<th scope='row' style='color:#F9D005';>" . $row["display_name"] . "</th>"
                    ."<td style='color:#F9D005'>" . $row["price"] . "</td>"
                    ."<td style='color:#F9D005'>" . $row["size"] . "</td>"
                    ."<td style='color:#F9D005'>" . "<a href='#' class='btn btn-danger btn-lg active' role='button' aria-pressed='true'>Checkout</a>" . "</td>"
                ."</tr>";
                }
            } else {
                echo "0 results";
            }

            $conn->close();
        ?>     

        </tbody>
      </table>
     </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>