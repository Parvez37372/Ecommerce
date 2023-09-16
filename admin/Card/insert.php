
<?php
include 'config.php';
            if (isset($_POST["submit"])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $img_loc = $_FILES['image']['tmp_name'];
                $img_name = $_FILES['image']['name'];
                $img_des = "uploadImage/" . $img_name;
                move_uploaded_file($img_loc, "uploadImage/" . $img_name);              //image ko ek jaga sy dusari jaga uta k rakh dena p1( image tem location )p2..destination
                $category = $_POST['pages'];
                mysqli_query($Con, "INSERT INTO `tblcard`(`Name`,`Price`, `Image`,`Category` ) VALUES('$name','$price','$img_des', '$category')");
            }
            header("location:index.php");
            ?>