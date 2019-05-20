            <?php
            session_start();
            if (isset($_POST['save'])) {
               $database = mysqli_connect('localhost', 'root', '', 'demo');
               $name = $_POST['name'];
               $lastname = $_POST['lastname'];
               $usernam = $_POST['usernam'];
               $passwor = $_POST['passwor'];
               $query = "INSERT INTO `costumer`(`name`, `lasname`, `usernam`, `passwor`) VALUES ('$name','$lastname','$usernam','$passwor')";
               $kim = mysqli_query($database, $query);
               if ($kim) {
                  $_SESSION['msg'] = "INFORMATION ADDED";
                  header('location: main3.php');
               }
            }
            if (isset($_POST['sabe'])) {
               $username = $_POST['username'];
               $password = $_POST['password'];
               $query = "SELECT * FROM costumer WHERE usernam='$username' AND passwor='$password'";
               $result = mysqli_query($database, $query);
               $num_row = mysqli_num_rows($result);
               $row = mysqli_fetch_array($result);
               if ($num_row == 1) {
                  $_SESSION['hehe'] =  "Welcome " .  $username;
                  header("Location: forth.php");
               } else {
                  $_SESSION['log'] = "sory! wrong input";
                  header("Location: main3.php");
               }
            }
            if (isset($_POST['admin'])) {
               $username = $_POST['username'];
               $password = $_POST['password'];
               $query = "SELECT * FROM admin1 WHERE user='$username' AND pass='$password'";
               $result = mysqli_query($database, $query);
               $num_row = mysqli_num_rows($result);
               $row = mysqli_fetch_array($result);
               if ($num_row == true) {
                  header("Location: third.php");
                  echo 'hi there';
               }
            }
