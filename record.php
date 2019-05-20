        <?php
        session_start();
        $name = "";
        $address = "";
        $phone = "";
        $guest = "";
        $comment = "";
        $email = "";
        $update = false;
        $_SESSION['msg'] = "";
        $id = 0;
        $database = mysqli_connect('localhost', 'root', '', 'demo');

        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $update = true;
            $rec = mysqli_query($database, "SELECT * FROM record1 WHERE id=$id");
            $_SESSION['msg'] = "EDIT";
            $n = mysqli_fetch_array($rec);
            $name = $n['dname'];
            $address = $n['daddress'];
            $phone = $n['dphone'];
            $guest = $n['dguest'];
            $email = $n['demail'];
            $comment = $n['dcomment'];
            $time = $n['dtime'];
            $id = $n['id'];
        }
        if (isset($_POST['save'])) {
            $phone = $_POST['phon'];
            $address = $_POST['add'];
            $name = $_POST['name'];
            $time = $_POST['tim'];
            $guest = $_POST['guest'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];
            $query = "INSERT INTO `record1`(`dphone`, `daddress`, `dname`, `dtime`, `dguest`, `demail`, `dcomment`) VALUES ('$phone','$address','$name','$time','$guest','$email','$comment')";
            mysqli_query($database, $query);
            $_SESSION['hehe'] = "INFORMATION ADDED";
            header('location: forth.php');
        }
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $phone = $_POST['phon'];
            $address = $_POST['add'];
            $name = $_POST['name'];
            $time = $_POST['tim'];
            $guest = $_POST['guest'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];
            mysqli_query($database, "UPDATE `record1` SET `dphone`='$phone',`daddress`='$address',`dname`='$name',`dtime`='$time',`dguest`=' $guest',`demail`='$email',`dcomment`=' $comment' WHERE `id`='$id'");
            $_SESSION['msg'] = "ADDRESS UPDATED";
            header('location: third.php');
        }
        if (isset($_GET['del'])) {
            $id = $_GET['del'];
            mysqli_query($database, "DELETE FROM record1 WHERE id=$id");
            $_SESSION['msg'] = "Address deleted!";
            header('location: third.php');
        }
