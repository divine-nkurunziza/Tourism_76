<?php 
	require_once "database_connection.php";

	if(isset($_POST['send'])){
		$name=$_POST['sitename'];
		$type=$_POST['sitetype'];
		$days=$_POST['days'];
		$price=$_POST['prix'];
		

		$values="INSERT INTO places (place_name,site_type,tour_days,cost) VALUES('$name','$type','$days','$price') ";
		$query=mysqli_query($conn,$values);
		if(!$query){
			echo "Failed to insert";
		}
		else{
			//echo "Inserted successfully!";
			Header("location:places.php");
		}




		
	}

?>