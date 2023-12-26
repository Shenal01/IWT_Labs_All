<!DOCTYPE html>
<?php
require 'config.php';

?>

<html>

<head>
	<link rel = "stylesheet" href = "styless.css" >
	<script src = "MyScript.js" ></script>
	<title>My Shopping Cart</title>

</head>

<img class = "logo" src = "img\cart.jpg" alt = "shopping cart" width = "200px" height = "200px">

<body>
<script src = "MyScript.js" ></script>
<center>

	<h1>Shopping Cart</h1>
	<h2>The Online Shopping Store</h2>

</center>

<hr id = "line">

<ul = class = "menu">
	<li = class = "menu"><a href = "#">Home</a></li>
	<li = class = "menu"><a href = "newss.html">News</a></li>
	<li = class = "menu"><a href = "about.php">About</a></li>
	<li = class = "menu"><a href = "register.html">Contact Us</a></li>
	
</ul>

<!--lab 08 -->

	
	<?php
	
		$fname = $_POST["firstname"];
		$lname = $_POST["lastname"];
		$gender = $_POST["gender"];
		$mobile = $_POST["mobile"];
		$email = $_POST["email"];
		$address = $_POST["address"];
		
		echo "First Name: $fname<br/>";
		echo "Last Name: $lname<br/>"; 
		echo "Gender: $gender<br/>";
		echo "Mobile: $mobile<br/>";
		echo "E-Mail: $email<br/>";
		echo "Address: $address<br/>";
	
	?>
	
</table>
</div>

<br>


<hr id = "line">

<footer>Created By<br>Shenal Mario<br><a href = "https://courseweb.sliit.lk/">Visit Us</a></footer>


</body>

</html>