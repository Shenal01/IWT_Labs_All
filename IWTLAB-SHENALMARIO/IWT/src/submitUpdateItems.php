<?php
require 'config.php';

$id = $_GET['id'];
$code = $_POST["ItemCode"];
$name = $_POST["ItemName"];
$desc = $_POST["Description"];
$price = $_POST["Price"];
$qty = $_POST["Quantity"];

$sql = "UPDATE item2 SET Item_name = '$name', Item_description = '$desc', Price = $price, Quantity = $qty, Item_code = '$code' WHERE item_id = $id";

if($conn -> query($sql)){
	
	echo "<script> alert('Records Updated successfully !!!!')</script>";
	header("location:indexx.php");
}
else{
	echo "<script> alert('ERROR: could not able to execute the query. ')</script>";
	echo $sql;
}


?>