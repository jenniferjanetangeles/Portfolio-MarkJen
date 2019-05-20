<?php
include("record.php");

$result = mysqli_query($database, "SELECT * FROM record1");
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

   <script src="js/jquery.js"></script>
   <title>Document</title>
</head>

<body class="bg-success">
   <div class="container">
      <?php if (isset($_SESSION['msg'])) : ?>

         <h3 class="text-center text-dark">
            <?php
            echo $_SESSION['msg'];
            ?>
         </h3>
      <?php endif ?>
   </div>
   <div class="container">
      <form action="third.php" class="form-row justify-content-between" method="post">
         <table class="mx-auto">
            <tr>
               <td>
                  <div class="form-group ">
                     <input type="hidden" name="id" value="<?php echo $id; ?>" required>
                     <label for="">NAME</label>
                     <input type="text" class="form-control" name="name" maxlength="15" value="<?php echo $name; ?>" required>
                  </div>
               </td>
               <td>
                  <div class="form-group ">
                     <input type="hidden" name="id" value="<?php echo $id; ?>" required>
                     <label for="">address</label>
                     <input type="text" class="form-control form" name="add" maxlength="30" value="<?php echo $address; ?>" required>
                  </div>
               </td>
               <td>
                  <div class="form-group">
                     <label for="">CONTACT</label>
                     <input type="text" class="form-control form" name="phon" maxlength="30" value="<?php echo $phone; ?>" required>
                  </div>
               </td>
               <td>
                  <div class="form-group">
                     <label for="">TIME</label>
                     <input type="datetime-local" class="form-control" name="tim" value="<?php echo $time; ?>" required>
                  </div>
               </td>
            </tr>
            <tr>
               <td>
                  <div class="form-group">
                     <label for="">EMAIL</label><br>
                     <input type="email" class="form-control mr-0" name="email" value="<?php echo $email; ?>" required>
                  </div>
               </td>
               <td>
                  <div class="form-group">
                     <label for="">No. of Guest</label><br>
                     <input type="text" class="form-control mr-0" name="guest" value="<?php echo $guest; ?>" required>
                  </div>
               </td>
               <td>
                  <div class="form-group">
                     <label for="">COMMENT</label><br>
                     <textarea name="comment" id="" cols="30" rows="3"><?php echo $comment; ?></textarea>
                  </div>
               </td>
               <td>
                  <div class="p-0 pb-2">
                     <?php if ($update == true) : ?>
                        <button type="submit" name="update" class="btn-warning btn ml-5"><span class="spinner-grow spinner-grow-sm"></span>Update</button>
                     <?php else : ?>
                        <button type="submit" name="save" class="btn-warning btn  ml-5"><span class="spinner-grow spinner-grow-sm"></span>Save</button>
                     <?php endif ?>
                     <a href="main1.php" class="btn btn-warning">Back to home</a>
                  </div>
               </td>
            </tr>
            <tr>
               </td>
               <td></td>
               <td></td>
            </tr>

         </table>
      </form>
   </div>
   <div class="mx-auto px-0 container">
      <div class="col-sm-12 px-0 bg-light" id="scrol">
         <table class="table table-sm table-hover table-striped p-0 bg-light">
            <thead class="">
               <tr class="d-table-row table bg-dark">
                  <th class="text-light">Name</th>
                  <th class="text-light">Address</th>
                  <th class="text-light">Contact</th>
                  <th class="text-light">Date-Time</th>
                  <th class="text-light">No. guest</th>
                  <th class="text-light">Email</th>
                  <th class="text-light">Comment</th>
                  <th class="text-light">Edit</th>
                  <th class="text-light">Delete</th>
               </tr>
            </thead>
            <tbody class="bg-light">
               <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                  <tr class="d-table-row">
                     <td><?php echo $row['dname']; ?></td>
                     <td><?php echo $row['daddress']; ?></td>
                     <td><?php echo $row['dphone']; ?></td>
                     <td><?php echo date('d/m/y-h:i A', strtotime($row['dtime'])); ?></td>
                     <td><?php echo $row['dguest']; ?></td>
                     <td><?php echo $row['demail']; ?></td>
                     <td><?php echo $row['dcomment']; ?></td>
                      <td width="50">
                        <a href="third.php?edit=<?php echo $row['id']; ?>" class="btn-sm btn-primary">edit</a>
                     </td>
                     <td width="50">
                        <a href="third.php?del=<?php echo $row['id']; ?>" class="btn-sm btn-danger">Delete</a>
                     </td>
                  </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
   </div>
</body>

</html>