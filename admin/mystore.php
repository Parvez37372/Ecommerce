<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyStore</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

</head>



<?php
session_start();
// session_destroy();
if (!$_SESSION['admin']) {
  header("Location:form/login.php");
}
?>

<body>
              <!-- admin panel navbar -->
  <nav class="navbar navbar-light bg-dark px-2">
    <div class="container-fluid text-white">
      <a class="navbar-brand  text-white" href="mystore.php">
        <h1>Mystore</h1>
      </a>
      <span><i class="fas fa-user-shield"></i> Hello,
        <?php echo $_SESSION['admin']  ?> |
        <i class="fas fa-sign-out-alt"></i>
        <a href="logout.php" class="text-white">Logout</a> |
        <a href="../Users/index.php" class="text-white">UserPanel</a></span>
        
    </div>
  </nav>
  <div>
    <h2 class="text-center ">Dashboard</h1>
  </div>
  <div class=" col-md-6 bg-danger text-center m-auto ">
    <a href="Card/index.php" class=" fw-bold text-white fs-4 p-1 px-5 text-decoration-none">Add Post</a>
    <a href="user.php" class="text-white fs-4 fw-bold p-1 px-5 text-decoration-none " >Users</a>
   
  </div>

</body>

</html>