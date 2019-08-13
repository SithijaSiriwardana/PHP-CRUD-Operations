<!DOCTYPE html>
<html>
<head>
  <title>Update your order</title>
  <link href="css/addupdate.css" rel="stylesheet" type="text/css">


</head>
<body>
<div class="container">
		<form method="post">
		<h2>Update your order</h2>
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
			    <label for="input" required>Name</label>
			      <input type="text" name="name" id="input" placeholder="Name" value="<?php echo $name;?>" />
			    <label for="input">Address</label>
			      <input type="text" name="address" id="input" placeholder="Address" value="<?php echo $address;?>" />
			    <label for="input">Telephone No.</label>
			      <input type="text" name="telephone"id="input" placeholder="Telephone No." value="<?php echo $telephone;?>" required/>
			    <label for="input">Quantity</label>
			      <input type="text" name="quantity" id="input" placeholder="Quantity" value="<?php echo $quantity;?>" required/>
 
			<input type="submit" name= "submit" value="update" />
		</form>
	</div>
</body>
</html>