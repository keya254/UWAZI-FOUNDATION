<?php
	include('connection.php');
	session_start();

	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql="select * from login WHERE email='$email'AND password='$password'";
	
	$run=mysqli_query($conn,$sql);
	if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('user_dashboard.php','_self')</script>";  
  
        $_SESSION['email']=$email;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>  

     
  
      
  
      
  
    