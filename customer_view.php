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
    <h2>Your Orders</h2>
        <table class="table"> 
        <thead> 
            <tr> 
                <th>#</th> 
                <th>Item</th> 
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
            echo "<td>".$res['quantity']."</td>";     
            echo "<td><a href=\"update.php?id=$res[id]\"><button>update</button></a>  <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><button>delete</button></a></td>";        
        }
        ?>
    </table>
    <br><h3><a href="index.php">Add new order</a></h3>
</div>
</body>
</html>