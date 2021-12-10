<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sites Updates</title>

	<style>

table

{

border-style:solid;

border-width:2px;

border-color:#013d6e;

margin-left: auto; 
margin-right: auto;
}

</style>
</head>
<body>


	<?php 

            require_once "database_connection.php";
            $i = 1;

            $query="select * from places";
            $run_query=mysqli_query($conn,$query);
            echo "<br>"."<br>"."<br>"."<br>"."<br>";
            echo "<table border='1'>

					<tr>

					<th>#</th>

					<th>Site Name</th>

					<th>Site Type</th>

					<th>Tour Days</th>

					<th>Cost</th>
					<th>Action 1</th>
					<th>Action 2</th>

					</tr>";
            if($run_query){
            	while($row=mysqli_fetch_array($run_query)){
            		 $id=$row['place_id'];

            		echo "<tr>";

  						echo "<td>". $i++."</td>";

  						echo "<td>" . $row['place_name'] . "</td>";

  						echo "<td>" . $row['site_type'] . "</td>";

  						echo "<td>" . $row['tour_days'] . "</td>";

  						echo "<td>" . $row['cost'] . "</td>";

  						echo "<td>" ."<a href='edit_form.php?updid= $id ' > "."Edit"."</a>"."</td>";
                    

                       echo "<td>" ."<a href='delete.php?delid= $id ' > "."DELETE"."</a>"."</td>";

                   

  						echo "</tr>";

            	}

            	echo "</table>";

            }


	?>





  <p class="Large mb-0">Back Home <a href="index.php" id="home">Log out</a></p>



	

</body>
</html>


