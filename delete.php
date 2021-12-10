<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>delete</title>
</head>
<body>
    <?php

    require "database_connection.php"; // connection file


    if(isset($_GET['delid'])){
        $id=$_GET['delid']; // get the id from the URL
        
        //delete record corresponding to the id
        $delqry="delete from places where place_id=$id";

        $result=mysqli_query($conn,$delqry); 

        if($result){
            //echo "success";
        header('location:sites_update.php');
    }
    
    else{
       die(mysqli_error($conn)); 
    }
    

    }
                   

    ?>
</body>
</html>