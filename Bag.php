<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>
    <?php
    include 'header.php';
    ?>
</head>
<body>
<div class="container-fluid">
<div class="col-md-12">
<div class="row">

<h1 class="text-warning font-monospace text-center my-3">BAG</h1>    
<?php
include 'Config.php';
$Record = mysqli_query($con, "select * from tblproduct");
   while( $row=mysqli_fetch_array($Record)){
       $check_page = $row['PCategory'];
       if(  $check_page ==='Bag'){


 echo "
 <div class='col-md-6 col-lg-4 m-auto mb-3 '>
<div class='card m-auto' style='width: 18rem;'>
  <img src='../admin/product/$row[PImage]' class='card-img-top' >
  <div class='card-body text-center'>
    <h5 class='card-title text-danger fs-4 fw-bold'>$row[PName]</h5>
    <p class='card-text text-danger fs-4 fw-bold '>RS: $row[PPrice]</p>
    <input type='number' value = ' min= '1'  max = '20''  placeholder = 'Quantity'><br><br>
    <input type='submit' class = 'btn btn-warning text-white w-100' value= 'Add To Cart'>
    

    
    
    
  </div>
</div>
</div>
";
}
}
?>

</div>
</div>
</div>
</body>
</html>