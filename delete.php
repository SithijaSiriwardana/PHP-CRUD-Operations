<?php

include("config.php");

$id = $_GET['id'];

$result = mysqli_query($connection, "DELETE FROM orders WHERE id=$id");
 

header("Location:customer_view.php");
?>