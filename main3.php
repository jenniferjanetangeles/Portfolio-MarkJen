<?php
$database = mysqli_connect('localhost', 'root', '', 'demo');
include "record2.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/main.css">
   <title>Document</title>
</head>

<body class="position-relative" style="background: url('https://images.wallpaperscraft.com/image/food_pastry_sweet_buns_107759_1920x1080.jpg') no-repeat; background-size: cover;">
   <div class="bg-secondary sticky-top border-bottom border-danger">
      <nav class="navbar navbar-expand-md sticky-top pb-0 pt-0 mb-0 border-">
         <button class="navbar-toggler" data-toggle="collapse" data-target="#hehe">
            <span class="navbar-toggler-icon"><i class="fas fa-bars text-white"></i></span>
         </button>
         <div class="collapse navbar-collapse" id="hehe">
            <a class="navbar-brand p-0"><img src="Logo15.jpg" id="lit" class="rounded-circle" alt=""></a>
            <span class="navbar-text p-0 text-warning">Epitome</span>
            <ul class="navbar-nav">
               <li class="nav-item p-0">
                  <a class="nav-link text-light p-0 pl-2 pr-2" href="main1.php">Home</a>
               </li>
               <li class="nav-item p-0">
                  <a class="nav-link text-light p-0 pl-2 pr-2" href="main2.php">Menu</a>
               </li>
               <li class="nav-item p-0">
                  <a class="nav-link text-light p-0 pl-2 pr-2" href="main3.php">Registration</a>
               </li>
               <li class="nav-item p-0">
                  <a class="nav-link text-light p-0 pl-2 pr-2" href="main4.php">Press</a>
               </li>
            </ul>
         </div>
         <div class="collapse navbar-collapse justify-content-end">
            <a href="#" class="nav-link  text-light h5"><i class="fab fa-instagram text-dark"></i></a>
            <a href="#" class="nav-link  text-light h5"><i class="fab fa-twitter text-dark"></i></a>
            <a href="#" class="nav-link text-light h5"><i class="fab fa-youtube  text-dark"></i></a>
         </div>
      </nav>
   </div>
   <section>
      <div class="container mt-4 justify-content-end ">
         <form class="form-signin col-sm-4 mx-auto col-md-6 rounded shadow-lg bg-light" method="post">
            <h2 class="form-signin-heading text-center h2">login</h2>
            <table class="text-center">
               <tr>
                  <td> <label for="">Username</label></td>
                  <td> <input type="text" class="form-control" name="username" required="" autofocus="" /></td>
                  <td><label for="">Password</label></td>
                  <td> <input type="password" class="form-control" name="password" required="" /></td>
               </tr>
               <tr>
                  <td></td>
                  <td><button class="btn btn-sm btn-primary m-1" type="submit" name="sabe">Customer</button></td>
                  <td></td>
                  <td> <button class="btn btn-sm btn-primary m-1" type="submit" name="admin">Admin</button></td>
               </tr>
            </table>
         </form>
      </div>
      <div class="p-3 rounded-lg mt-5 shadow-lg">
         <div class="row justify-content-center">
            <div class="col-md-5 align-content-center align-items-center pt-5 pl-5">
               <div class="border-secondary col-8 mx-auto bg-secondary text-light p-3 shadow rounded">
                  <h2>ONLINE BOOKING & INQUIRY</h2>
                  <p>Whatever your event or celebration, we are here to make your special day a truly memorable one. Send your event inquiry by filling up the Reservation form.</p>
                  <br>
                  <h2>RESERVE BY PHONE</h2>
                  <p>To make reservation for lunch and dinner, please call us at 889-1234.</p>
                  <br>
                  <p><strong>Reservations strongly recommended</strong></p>
                  <p>Please follow Formal Attire Dress Code</p>
               </div>
            </div>
            <div class="col-md-5">
               <div class="border-secondary col-8 rounded mt-5 bg-light rounded-lg container-fluid p-3 shadow-lg shadow-lg">
                  <form class="border-light hover" action="main3.php" method="post">
                     <p class="h4 mb-4">Sign up</p>
                     <div class="form-row mb-4">
                        <div class="col-sm">
                           <label for="">Name</label>
                           <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="col-sm">
                           <label for="">E-mail</label>
                           <input type="email" class="form-control" name="lastname" required>
                        </div>
                     </div>
                     <label for="">Username</label>
                     <input type="text" name="usernam" class="form-control mb-4" required>
                     <label for="">Password</label>
                     <input type="text" name="passwor" class="form-control" required>
                     <button class="btn btn-info my-4 btn-sm" name="save" type="submit">confirm signup</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <footer>
      <div class="footer-copyright bg-dark text-center text-light p-2">© 2019 Copyright:
         <span>MarkJen</span>
      </div>
   </footer>
</body>

</html>