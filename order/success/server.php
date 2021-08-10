<?php 

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vito";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$id =  $_SESSION['last_id'];
$address = $_GET['address'];




$sql = "UPDATE vito_data set address = '$address', email = '$email' WHERE id = '$id' ";
if(mysqli_query($link, $sql)){

	$_SESSION['address'] = $address;

    header("Location:index.php");




} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

?>