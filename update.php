<?php
include "config.php";
$id = $_GET['id'];

$result = mysqli_query($connection, "SELECT * FROM orders WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
	$type = $res['item'];
	$name = $res['name'];
	$address = $res['address'];
	$telephone = $res['phone_no'];
	$quantity = $res['quantity'];
}

 if(isset($_POST) & !empty($_POST)){
    $type = $_POST['type'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $telephone = $_POST['telephone'];
    $quantity = $_POST['quantity'];
 
    $UpdateSql = "UPDATE orders SET item='$type', name='$name', address='$address', phone_no='$telephone', quantity='$quantity' WHERE id=$id";
    $res = mysqli_query($connection, $UpdateSql);
    if($res){
        header('location: customer_view.php');
    }else{
         echo "Error updating record: " . mysqli_error($connection);
    }
}

?>

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