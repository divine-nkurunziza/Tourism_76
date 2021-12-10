<?php 
	require_once "database_connection.php";
	$file="";
	if(isset($_POST['submit1'])){
		$b_email=$_POST['yourMail'];
		$itinerary=$_POST['site'];
		$file=addslashes(file_get_contents($_FILES["file"]["tmp_name"]));
		

		$values="INSERT INTO bookings (customer_email,itinerary,receipt) VALUES('$b_email','$itinerary','$file') ";
		$query=mysqli_query($conn,$values);
		if($query){
        echo '<script type="text/javascript" > alert("Done booking! You will be contacted") </script> ';

    }
    else{
        echo '<script type="text/javascript" > alert("Problem occured") </script>' ;


    }



		
	}

?>