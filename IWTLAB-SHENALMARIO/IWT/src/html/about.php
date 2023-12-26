<!DOCTYPE html>
<html>

<head>
	<link rel = "stylesheet" href = "C:\xampp\htdocs\IWT\src\styless.css" >
	<script src = "C:\xampp\htdocs\IWT\src\MyScript.js" ></script>
	<title>My Shopping Cart</title>

</head>

<img class = "logo" src = "C:\xampp\htdocs\IWT\src\img\cart.jpg" alt = "shopping cart" width = "200px" height = "200px">

<body>
<center>

	<h1>Shopping Cart</h1>
	<h2>The Online Shopping Store</h2>

</center>

<hr id = "line">

<ul class="menu">
	<li class="menu"><a href="indexx.php">Home</a></li>
	<li class="menu"><a href="newss.html">News</a></li>
	<li class="menu"><a href="#">About</a></li>
	<li class="menu"><a href="register.html">Contact Us</a></li>
</ul>

<center>
<?php


define("companyName", "ABC Mobiles");
echo "<h2>About ".companyName."</h2>";

echo "<h3> This page is mainly about the" .companyName."Web Site.</h3>";

$sold = 75;
$total = 100;

echo "The Shopping Cart Details<br>";
echo "No of Sold Items : " .$sold."<br>";
echo "No of Total Items : " .$total."<br>";

echo "<h2><table border = '1' width = '75%'><tr><td>Number of sold items
</td><td>".$sold."</td></tr><tr><td>Number of Total Items</td><td>".$total."</td></tr></table></h2>";

function findPercentage(){

$GLOBALS['percentage'] = ($GLOBALS['sold'] / $GLOBALS['total']) * 100;
}

findPercentage();

echo "<h3>Percentage of the sold items : " .$percentage. "%</h3><br>";

	
	$today = date("l") . "<br>";
	echo "<h2> Today is ".$today."</h2><br>";
	 
	 $c = date("Y-m-d");
	 $currentDay = date_create($c);
	 $shipDay = date_create("2023-04-29");
	 
	 $diff = date_diff($currentDay, $shipDay);
	 
	 echo "<h3>Number of days remaining for shipping " .$diff -> format("%R%a days")."</h3>";
	 
	 if ($diff -> format("%R%a") > 0){
		 $status = "To be shipped";
	 }
	 else{
		  $status = "shipped";
	 }
	 
	 echo "<h3> For " .$today. "24 items has " .$status. "</h3>";
	 
	 loopUsingFor();


?>


<?php
	
	function loopUsingFor() {
		
		$items = array("I phone XS" => "27", "I phone X" => "30", "Iphone XS Max" => "12", "Iphone XR" => "29");
		$keys = array_keys($items);
		
		echo "<h2>Output Using For Loop<br></h2>";
		
		echo "<table border = '2' width = '75%' > 
		<tr> 
		<th><center>Item Name</center></th>
		<th><center>Number of Items</center></th>
		</tr>";
		for ($x = 0; $x < count($keys); $x++){
			echo "<tr><td><center>".$keys[$x]."</center></td><td><center>".$items[$keys[$x]]."</center></td></tr>";
			
		}
		echo "</table>";
		
		
		
		
		
		
		
	}
	
?>

</center>


<br>


<hr id = "line">

<footer>Created By<br>Shenal Mario<br><a href = "https://courseweb.sliit.lk/">Visit Us</a></footer>


</body>

</html>