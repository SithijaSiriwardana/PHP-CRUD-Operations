
<?php
	require_once('config.php');
	$ReadSql = "SELECT * FROM orders_item";
	$res = mysqli_query($connection, $ReadSql); 

	if(isset($_POST) & !empty($_POST)){
		$type = $_POST['type'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$telephone = $_POST['telephone'];
		$quantity = $_POST['quantity'];
		
		$CreateSql = "INSERT INTO orders(item, name, address,phone_no,quantity) VALUES('$type','$name', '$address', '$telephone', '$quantity')";
		 if($connection->query($CreateSql) == TRUE){
		    echo "<script type='text/javascript'>alert('Order created successfully!');
		    window.location='';
		    </script>";
		  }else{
		   $error =  "Error: " .$CreateSql . "<br>".$connection->error;
		   echo $error;
		 }
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create your order</title>
  <link href="css/addupdate.css" rel="stylesheet" type="text/css">
  <link href="css/index.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h3><a href="customer_view.php">View Orders</a></h3>

	<div class="container">
	
	<h2>Item Prices & Discounts</h2>
		<table class="table "> 
			<tr>  
				<th>item</th> 
				<th>Discount</th> 
				<th>Price(Rs)</th> 
			</tr> 
		<?php 
		while($row = mysqli_fetch_assoc($res)){
		?>
			<tr> 
				<td><?php echo $row['item']; ?></td> 
				<td><?php echo ($row['discount']."%"); ?></td> 
				<td><?php echo $row['price']; ?></td> 
			</tr> 
		<?php } ?>
		</table>
	</div>

<div class="container">
		<form method="post">
		<h2>Create your order</h2>
			<label for="input">Item</label>
				<select name="type" required>
					<option>--Item--</option>
					<option value="Selapine">Selapine</option>
					<option value="polythene(500)">polythene(500)</option>
					<option value="polythene(250)">polythene(250)</option>
					<option value="Lunch Sheet">Lunch Sheet</option>
					<option value="Tissues">Tissues</option>
					<option value="Grossery Bags">Grossery Bags</option>
					<option value="Shopping Bags">Shopping Bags</option>
				</select>
			    <label for="input">Name</label>
			     	<input type="text" name="name"  id="input" placeholder="Name" required/>

			    <label for="input">Address</label> 
			       <input type="text" name="address"  id="input" placeholder="Address" />

			    <label for="input" >Telephone No.</label>
			     	<input type="text" name="telephone"  class="form-control" id="input" placeholder="Telephone No." required/>

			     <label for="input">Quantity</label>
					<input type="text" name="quantity" id="input" placeholder="Quantity" required/>
 
				<input type="submit" value="submit" />
		</form>
	</div>
</body>
</html>