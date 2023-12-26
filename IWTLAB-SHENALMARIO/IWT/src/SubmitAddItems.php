<?php
require 'config.php';

$code = $_POST["ItemCode"];
$name = $_POST["ItemName"];
$desc = $_POST["Description"];
$price = $_POST["Price"];
$qty = $_POST["Quantity"];

$sql = "INSERT INTO item2 ( Item_name, Item_description, Price, Quantity, Item_code ) VALUES ( '$name', '$desc', $price, $qty, '$code' ) ";

if($conn -> query($sql)){
	
	echo "<script> alert('Records added successfully !!!!')</script>";
	header("location:indexx.php");
}
else{
	echo "<script> alert('ERROR: could not able to execute the query. ')</script>";
	echo $sql;
}



?>