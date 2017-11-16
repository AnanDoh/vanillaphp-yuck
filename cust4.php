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
     <h1 style="color:#DF0500 ;">My Order </h1>



     <div id="see">
       <table class="table table-hover">
        <thead>
          <tr>
          	<th scope="col" style="color:#DF0500 ;">Order Number</th>
            <th scope="col" style="color:#DF0500 ;">Product Name</th>
            <th scope="col" style="color:#DF0500 ;">Size(oz)</th>
            <th scope="col" style="color:#DF0500 ;">Quantity</th>
            <th scope="col" style="color:#DF0500 ;">Price</th>
            <th scope="col" style="color:#DF0500 ;">Completed/Not</th>
          </tr>
        </thead>
        <tbody>
 <?php
            include("connect.php");
            session_start();

            $sql = "SELECT orders.order_id, orders.product_id, orders.completed, orders.quantity, products.display_name, products.price, products.size
					FROM orders, products
					WHERE orders.product_id = products.product_id;";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                	$_SESSION['Something']=$row['completed'];
                    echo 
                   
                  "<tr>"
                    ."<th scope='row' style='color:yellow ;'>" . $row["order_id"] . "</th>"
                    ."<td style='color:yellow ;'>" . $row["display_name"] . "</td>"
                    ."<td style='color:yellow ;'>" . $row["size"] . "</td>"
                    ."<td style='color:yellow ;'>" . $row["quantity"] . "</td>"
                    ."<td style='color:yellow ;'>" . $row["price"] . "</td>"
					."<form >"
                    ."<td> <button type='submit' class='btn btn-primary btn-md active' role='button' aria-pressed='true' name=" . $row["order_id"] . ">" . $row["completed"] . "</a> </td>
                    </form>

                </tr>";
                }
            } else {
                echo "0 results";
            }

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