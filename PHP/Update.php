<?php
require "connect.php";
$id =$_POST['id'];
$solike = $_POST['solike'];

$query = "UPDATE Dulich SET solike = '$solike' WHERE id = $id" ;
if(mysqli_query($conn, $query)){
	echo "success";
}else {
	echo "error";
}
?>