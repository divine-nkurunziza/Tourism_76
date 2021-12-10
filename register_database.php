<?php 
require "database_connection.php";

if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['name'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$psw=$_POST['password'];
	$confirm_psw=$_POST['pass'];

	$details="INSERT INTO customers(fname,lname,username,email,password) values('$fname','$lname','$username','$email','$psw')";

	$insert=mysqli_query($connection,$details);
	if(!$insert){
                echo mysqli_error($connection);
                 }
                 
                 else{
                 	echo "inserted!";
					//header("location:");
                 } 

}




?>