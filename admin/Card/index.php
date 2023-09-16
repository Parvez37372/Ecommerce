<!DOCTYPE html>
<?php
include 'config.php';


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Add Post</title>
</head>

<body>
 
                <!-- Product detail form -->
 <div class="container ">
<div class="row ">
<div class="col-lg-6 col-md-8 col-sm-12 m-auto border border-primary mt-3">
<div class="mb-3">
    <p class="text-center fs-3 fw-bold text-warning ">Product Detail:</p>
 <form action="insert.php" method="POST" enctype="multipart/form-data">
  <label for="formGroupExampleInput" class="form-label">Product Name:</label>
  <input type="text" class="form-control" name="name" required id="formGroupExampleInput" placeholder="Enter Product Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Product Price:</label>
  <input type="text" class="form-control" name="price" required id="formGroupExampleInput2" placeholder="Product Price">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Add Product Image:</label>
  <input class="form-control" type="file" name="image" required id="formFile">
</div>
<p> Select Page Category:</p>
<select class="form-select" name="pages">>
<option value="Home page">Home</option>
<option value="Laptop page">Laptop</option>
<option value="Mobile page">Mobiles</option>
<option value="Bag page">Bag</option>
</select>
<button type="submit" name="submit" class='btn btn-danger fs-4 fw-bold my-3 form-control'> Upload</button>
                </div>
            </div>

            </div>

   

    <!-- fetch data -->




    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-12">
<table class = "table table-bordered table-hover text-center mt-5  ">
    <thead class="fs-4 bg-secondary text-white">
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
        <th>Category</th>
        <th>Delete</th>
        <th>Update</th>
        
    </thead>
    <tbody class="fs-5">
   <?php
    include 'config.php';
    $pic = mysqli_query($Con, "select * from tblcard");
    while ($row = mysqli_fetch_array($pic)) {
      $i=0;

        echo " <tr>
       <td>$row[Id]</td>
       <td>$row[Name]</td>
       <td>$row[Price]</td>
       <td> <img src='$row[Image]'  height = '90px' width = '200px'/> </td>
       <td>$row[Category]</td>
       <td><a href='delete.php? Id= $row[Id]' class = 'btn btn-warning d-block text-white'>Delete</a></td>
       <td><a href='update.php? Id= $row[Id]' class = 'btn btn-danger d-block '>Update</a></td>
  
    </tr>
    ";
    }
    ?>
</tbody>
</table>
</div>
</div>
</div>

 

</body>

</html>