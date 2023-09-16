<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap CDN -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!-- Fontawesome cdn -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<body>


<nav class="navbar navbar-light bg-light">
  <div class="container-fluid font-monosapce">
    <a class="navbar-brand pb-2"><img src="logo.png" alt=""></a>
    
    <div class="d-flex">
  <a href="index.php" class=" text-warning text-decoration-none pe-2"><i class="fas fa-home"></i> Home</a>
  <a href="viewCart.php" class=" text-warning text-decoration-none pe-2"><i class="fas fa-shopping-cart"></i></i> Cart () |</a>

  <span class="text-warning pe-2"> 
  <i class="fas fa-user-shield"></i> Hello, 
  <?php


  | <a href='form/logout.php' class=' text-warning text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i>Logout</a>

  | <a href='form/login.php' class=' text-warning text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i>Login</a>|
 
  |
 
  <a href="admin/mystore.php"  class=" text-warning text-decoration-none pe-2">Admin</a>
  </span>

 
</nav>
</div>

<div class="bg-danger sticky-top font-monospace">
<ul class="list-unstyled d-flex justify-content-center">
<li><a href="Laptop.php" class="text-decoration-none text-white fw-bold fs-4 px-5">LAPTOPS</a></li>
<li><a href="Mobile.php" class="text-decoration-none text-white fw-bold fs-4 px-5">MOBILES</a></li>
<li><a href="Bag.php" class="text-decoration-none text-white fw-bold fs-4 px-5">BAGS</a></li>
</ul>
</div>

</body>
</html>