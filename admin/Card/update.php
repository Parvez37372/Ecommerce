<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
    

</head>

<body>

    <!-- php code -->

    <?php
    include 'config.php';
     $ID = $_GET['Id'];
    $RData = mysqli_query($Con, "select * from tblcard where Id = $ID");
    $Record = mysqli_fetch_array($RData);
    ?>

                    <!-- update form -->
                    <div class="container ">
<div class="row ">
<div class="col-lg-6 m-auto border border-primary mt-3">
<div class="mb-3">
    <p class="text-center fs-3 fw-bold text-warning ">Update Product:</p>
 <form action="" method="POST" enctype="multipart/form-data">
  <label for="formGroupExampleInput" class="form-label">Product Name:</label>
  <input type="text" class="form-control" value="<?php echo $Record['Name'] ?>" name="name" required id="formGroupExampleInput" placeholder="Enter Product Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Product Price:</label>
  <input type="text" class="form-control" value="<?php echo $Record['Price'] ?>" name="price" required id="formGroupExampleInput2" placeholder="Product Price">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Add Product Image:</label>
  <input class="form-control" type="file" name="image" required id="formFile">
  <img src="<?php echo $Record['Image'] ?>" width='150px' >
    <input type="hidden" name="Id" value="<?php echo $Record['Id'] ?>">
</div>
<p> Select Page Category:</p>
<select class="form-select" name="pages">>
<option value="Home page">Home</option>
<option value="Laptop page">Laptop</option>
<option value="Mobile page">Mobiles</option>
<option value="Bag page">Bag</option>
</select>
<button type="submit" name="update" class='btn btn-danger fs-4 fw-bold my-3 form-control'> Update</button>

</form> 

</div>
            </div>

            </div>


    <!-- <center>
        <div class="main">
        
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="">Name</label>
                <input type="text" value="<?php echo $Record['Name'] ?>" name="name" id=""><br>
                <label for="">Price</label>
                <input type="text" value="<?php echo $Record['Price'] ?>" name="price" id=""><br>
                <td><input type="file" name="image" value="<?php echo $Record['Image'] ?>" alt="" required>
                <img src="<?php echo $Record['Image'] ?>" width='200px'></td><br>
                <input type="hidden" name="Id" value="<?php echo $Record['Id'] ?>">
                <label for="">Please Select </label>
                <select name="pages">
                    
                <option value="Home page">Home</option>
                <option value="Laptop page">Laptop</option>
                <option value="Mobile page">Mobiles</option>
                <option value="Bag page">Bag</option>
                </select><br>
                <button type="submit" name="update" class='btn btn-danger my-2'> Update</button>
            </form>
        </div>
    </center> -->

    <!-- php code -->

    <?php
    if (isset($_POST["update"])) {

            // get data from form
            
        $ID = $_GET['Id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $img_loc = $_FILES['image']['tmp_name'];
        $img_name = $_FILES['image']['name'];

        $img_des = "uploadImage/" . $img_name;
        move_uploaded_file($img_loc, "uploadImage/" . $img_name);              //image ko ek jaga sy dusari jaga uta k rakh dena p1( image tem location )p2..destination
        $category = $_POST['pages'];


        mysqli_query($Con, "UPDATE `tblcard` SET `Name`='$name',`Price`='$price',`Image`='$img_des', `Category` = '$category' WHERE Id = '$ID'");
        header("location:index.php");
    }
    ?>

</body>

</html>