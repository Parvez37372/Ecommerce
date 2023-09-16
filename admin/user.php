<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    
</head>

<body>
    <?php
    include 'mystore.php';
    $Con = mysqli_connect("localhost", "root", "", "ecommerce");
    $RawData = mysqli_query($Con, "select * from tblform");
    $rows_count_value = mysqli_num_rows($RawData);
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7">
            
                <table class="table table-secondary table-bordered">
                    <thead class=" text-center">
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Delete</th>


                    </thead>
                    <tbody class="text-center text-danger ">

                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($RawData)) {
                        ?>
                            <tr>
                                <td><?php echo ++$i ?></td>
                                <td><?php echo $row['Name'] ?></td>
                                <td><?php echo $row['Number'] ?></td>
                                <td><?php echo $row['Email'] ?></td>
                                <td><?php echo $row['Password'] ?></td>
                                <td><a href="delete.php? Id= <?php echo $row['Id']?>" class="btn btn-warning text-white">Delete</a></td>
                            </tr>
                        <?php
                        }
                        ?>


                    </tbody>
                </table>
                
            </div>
            <div class="col-md-3">
            </div>
            <div class="col-md-2
            pr-5 text-center">
                <h3 class="text-danger">Total Users</h3>
                <h1 class="bg-danger text-white"><?php echo $rows_count_value ?></h1>
            </div>
        </div>
    </div>


    
</body>

</html>