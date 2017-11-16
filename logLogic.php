<?php
    if(isset($_POST['submit'])){

        include("connect.php");
        session_start();
        $username=$_POST['username'];
        $password=$_POST['password'];
        $_SESSION['login_user']=$username;
        $query = $conn->query("SELECT username, display_name FROM users WHERE username ='$username' and password='$password'");
        if ($query->num_rows != 0){
        	if ($query->fetch_row()[1] == "Customer") {
        		header("Location: custmenu.php");
        	} else {
        		header("Location: barCheck.php");
        	}
				

     	}
     	 else{
   			 echo "<script type='text/javascript'>alert('Kys')</script>";
   		}
    }
?>