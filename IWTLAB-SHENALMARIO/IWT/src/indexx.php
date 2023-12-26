<!DOCTYPE html>
<?php
require 'config.php';

?>

<html>

<head>
	<link rel = "stylesheet" href = "styless.css" >
	<script src = "MyScript.js" ></script>
	<title>My Shopping Cart</title>
	
	<script>
	
		function delete_data(id)
		{
			if(confirm('Are you sure to delete the record ?'))
			{
				window.location.href = 'submitdDeleteItems.php?id='+id;
			}
		}
	
	</script>

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

<!--lab 08 -->
<br><br>
<button class="bttn1" type = "button" onclick = "location.href = 'AddItems.html';" >Add New</button>
<br><br>

<div class = "productData" id = "tbl">
<table border = "1", width = 100%>
	<tr>
		<th><b>Item Name</b></th>
		<th><b>Description</b></th>
		<th><b>Edit Details</b></th>
		<th><b>Delete Details</b></th>
	</tr>
	
	<?php
	$sql = "SELECT * FROM item2";
	$result = $conn->query($sql);
	
	if($result->num_rows > 0)
	{	
		while($row = $result->fetch_assoc())
		{
				$id = $row["Item_id"];
				echo"<tr>";
				echo"<td style = 'text-align:center'>".$row["Item_name"]."</td>";
				echo"<td style = 'text-align:left'>";
					echo"<li>Item COde: ".$row["Item_code"]."</li>";
					echo"<li><font color = 'red'> Description :  </font>" .$row["Item_description"]. "</li>";
					echo"<li>Price: ".$row["Price"]."</li>";
					echo"<li>Quantity: ".$row["Quantity"]."</li>";
					echo"</td>";
					echo"<td><center><button class='bttn2' type = 'submit' ><a href = 'editRecord.php?id=$id' >Edit</a></button></center></td>";
					echo"<td><center><button class='bttn3' type = 'submit' onclick = 'delete_data($id)' >Delete</button></center></td>";
				echo"</tr>";
		}
	}
	else
	{
		echo"No Results";
	}
	
	?>
	
</table>
</div>

<br>


<hr id = "line">

<footer>Created By<br>Shenal Mario<br><a href = "https://courseweb.sliit.lk/">Visit Us</a></footer>


</body>

</html>