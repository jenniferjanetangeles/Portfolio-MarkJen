<?php
include("record2.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <!-- Default form register -->

    <div class="col-4 border-secondary border mt-5 bg-light rounded-lg container-fluid p-3 shadow-lg">
        <form class="text-center border border-light" action="signup.php" method="post">

            <p class="h4 mb-4">Sign up</p>

            <div class="form-row mb-4">
                <div class="col-sm">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Full name">
                </div>
                <div class="col-sm">
                    <label for="">E-mail</label>
                    <input type="email" class="form-control" name="lastname" placeholder="E-mail">
                </div>
            </div>

            <label for="">Username</label>
            <input type="text" name="usernam" class="form-control mb-4" placeholder="username" required>

            <label for="">Password</label>
            <input type="text" name="passwor" class="form-control" placeholder="Password" required>






            <!-- Sign up button -->
            <button class="btn btn-info my-4" name="save" type="submit">confirm signup</button>
            <a href="main3.php" class="btn btn-light">Back to home</a>



        </form>
    </div>
    <!-- Default form register -->



</body>

</html>