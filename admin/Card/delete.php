<?php
include 'config.php';
echo $ID = $_GET['Id'];
mysqli_query($Con,"Delete from tblcard where Id= $ID");
 header("location:index.php");
?>