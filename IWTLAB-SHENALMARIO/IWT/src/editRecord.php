<!DOCTYPE html>
<?php
require 'config.php';

?>

<html>

<head>
	<link rel = "stylesheet" href = "styless.css" >
	<script src = "C:\xampp\htdocs\IWT\src\MyScript.js" ></script>
	<title>My Shopping Cart</title>

</head>

<img class = "logo" src = "img\cart.jpg" alt = "shopping cart" width = "200px" height = "200px">

<body>
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

<!--lab 09 -->

	
	<?php
	
		$id = $_GET['id'];
		$sql = "SELECT * FROM item2 where item_id = $id";
		$result = $conn->query($sql);
		
		if($result->num_rows > 0)
		{
			
			while($row = $result->fetch_assoc())
			{
				
				$code = $row["Item_code"];
				$name = $row["Item_name"];
				$desc = $row["Item_description"];
				$price = $row["Price"];
				$qty = $row["Quantity"];
				
				
			}
			
		}
	
	?>
	
	

<form method = "post" action = "submitUpdateItems.php?id=<?php echo $id; ?>" >

	Item Code: <br>
	<input type = "text" name = "ItemCode" value = "<?php echo $code; ?>" /><br>
	Item Name: <br>
	<input type = "text" name = "ItemName" value = "<?php echo $name; ?>" /><br>
	Description: <br>
	<textarea name = "Description" rows = 6 ><?php echo $desc; ?></textarea><br>
	Price: <br>
	<input type = "text" name = "Price" value = "<?php echo $price; ?>" /><br>
	Quantity: <br>
	<input type = "number" name = "Quantity" value = "<?php echo $qty; ?>" /><br><br>
	<input type = "submit" value = "Update" >

</form>

	
	
</table>
</div>

<br>


<hr id = "line">

<footer>Created By<br>Shenal Mario<br><a href = "https://courseweb.sliit.lk/">Visit Us</a></footer>


</body>

</html>