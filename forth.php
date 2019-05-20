<?php





include "record.php";
if (isset($_POST['back'])) {
   header("location: main.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/bootstrap.css">
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery.js"></script>
   <title>Document</title>
</head>

<body style="background: url('https://images.wallpaperscraft.com/image/desk_restaurant_wine_glasses_plates_flowers_roses_80713_1920x1080.jpg') no-repeat; background-size: cover;">
   <div class="container mt-3 text-light">
      <?php if (isset($_SESSION['hehe'])) : ?>

         <h3 class="text-center text-light">
            <?php
            echo $_SESSION['hehe'];
            ?>
         </h3>
      <?php endif ?>
   </div>
   <div class="container d-flex col-5  p-3 rounded-lg shadow-lg mt-3 bg-light">
      <form action="forth.php" class="form-row justify-content-between" method="post">
         <input type="hidden" name="id" required>
         <label for="">CONTACT</label>
         <input type="text" class="form-control form" name="phon" required>
         <label for="">ADDRESS</label>
         <input type="text" name="add" class="form-control" required>
         <label for="">NAME</label>
         <input type="text" class="form-control" name="name" required>
         <label for="">TIME</label>
         <input type="datetime-local" class="form-control" name="tim" required>
         <label for="">EMAIL</label>
         <input type="email" class="form-control mr-0" name="email" required>
         <div class="form-group">
            <label for="">No. of Guest</label>
            <input type="text" class="form-control mr-0" name="guest" required>
         </div>
         <div id="jen"></div>
         <div class="form-group">
            <label for="">COMMENT</label><br>
            <textarea name="comment" id="" cols="30" rows="6"></textarea>
         </div>
         <div class="container-fluid p-0 pb-2">
            <button type="submit" name="save" class="btn-info btn-block btn"><span class="spinner-grow spinner-grow-sm"></span>Save</button>
            <a href="main1.php" class="btn btn-danger mt-2 btn-block">back to home</a>
         </div>
      </form>
   </div>
</body>

</html>