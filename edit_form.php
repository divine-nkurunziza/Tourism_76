<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>update</title>
</head>
<body>
<?php

require "database_connection.php";
$id=$_GET['updid']; // get the id from the URL
$sql= "select * places where place_id= $id";
$result=mysqli_query($conn,$sql);
//$row=mysqli_fetch_assoc($result);


if(isset($_POST['update'])){ 

        $name1=$_POST['sitename'];
        $type1=$_POST['sitetype'];
        $days1=$_POST['days'];
        $price1=$_POST['prix'];


$sql="update places set place_id=$id,place_name='$name1', site_type=$type1,tour_days=$days1,cost=$price1 where place_id=$id";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die(mysqli_error($conn)); 
            } 

    else{
        //echo "Updated successfully";
        header('location:sites_update.php');// redirect to the main page after inserting successfully
    }
}

    ?>

    <form method="POST" action="sites_update.php " class="row g-3 needs-validation" novalidate>
                      <div class="col-12">
                        <label for="sitename" class="form-label">Enter the name of the site</label>
                        <textarea type="text" name="sitename" class="form-control" id="sitename" required></textarea>
                        
                      </div>

                      <div class="col-12">
                        <label for="sitetype" class="form-label">Enter the type of the sites</label>
                        <textarea type="text" name="sitetype" class="form-control" id="sitename" required></textarea>
                        
                      </div>

                                            <div class="col-12">
                        <label for="days" class="form-label">Tour days</label>
                        <input type="number" name="days" class="form-control" id="days" required>
                        
                      </div>



                                              <div class="col-12">
                        <label for="price" class="form-label">Cost</label>
                        <input type="number" name="prix" class="form-control" id="prix" required>
                        
                      </div>

                      
                        

                        
            <br>
                        <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="update">Update</button>
                    
                    </form>


</body>
</html>