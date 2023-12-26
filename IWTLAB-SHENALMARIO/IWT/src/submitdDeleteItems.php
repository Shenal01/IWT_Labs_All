<?php
require 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM item2  WHERE item_id = $id";

if($conn -> query($sql)){
	
	echo "<script> alert('Records Deleted successfully !!!!')</script>";
	header("location:indexx.php");
}
else{
	echo "<script> alert('ERROR: could not able to execute the query. ')</script>";
	echo $sql;
}


?>