<?php 
require_once('config.php');
$ReadSql = "SELECT * FROM orders";
$result = mysqli_query($connection, $ReadSql); 
?>
 
<html>
<head>    
    <title>View Order</title>
    <link href="css/tt.css" rel="stylesheet" type="text/css">
</head>
 
<body>
<div class="container">
    <h2>Orders</h2>
        <table class="table"> 
        <thead> 
            <tr> 
                <th>#</th> 
                <th>Item</th> 
                <th>Customer Name</th>
                <th>Customer Address</th>
                <th>Customer Telephone.No</th>
                <th>Quantity</th> 
            </tr> 
        </thead> 
        <?php 
        $i=0;
        while($res = mysqli_fetch_array($result)) {
        $i++;          
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$res['item']."</td>";
            echo "<td>".$res['name']."</td>";
            echo "<td>".$res['address']."</td>";
            echo "<td>".$res['phone_no']."</td>";
            echo "<td>".$res['quantity']."</td>";            
        }
        ?>
    </table>
</div>
</body>
</html>