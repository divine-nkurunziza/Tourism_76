<?php 

require_once "database_connection.php";
$error="";

if(isset($_POST['login'])){
// Grab form inputs
 $mail= $_POST['email'];
$psw = md5($_POST['password']);

$sql = "SELECT * FROM `customers`where email = '$mail' limit 1";

$result = mysqli_query($conn, $sql);

if ($result){

if ($result && mysqli_num_rows($result)> 0){
$data = mysqli_fetch_ASSOC($result);

if ( $data ['password'] === $psw){

header("Location: booking.php" );   
die;
}else {
    $error=" Wrong email or password! ";
} 
}


}

}

?>

