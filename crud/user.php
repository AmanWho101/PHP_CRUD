<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crudt` (name,email,mobile,password) values ('$name','$email','$mobile','$password')";

    $rslt = mysqli_query($con, $sql);

        if(!$rslt){
            die(mysqli_error($con));
        }else{
            header('location:display.php');
        }

   
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD Operation</title>
</head>

<body>
    <h1 class="text-muted text-center">CRUD, world!</h1>

    <div class="container my-10">

        <form method="post">
            <div class="mb-3">
                <label class="form-label">Enter Your Name</label>

                <input type="text" name="name" class="form-control" placeholder="Enter your Name" autocomplete="off" required>
                <div class="form-text">Enter Your full name.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>

                <input type="email" name="email" class="form-control" placeholder="Enter your Email" autocomplete="off" required>
                <div class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Mobile address</label>

                <input type="mobile" name="mobile" class="form-control" placeholder="Enter your mobile" autocomplete="off" required>

            </div>
            <div class="mb-3">
                <div class="col-auto">
                    <label class="form-label">Password</label>
                </div>
                <div class="col-auto">
                    <input type="password" name="password" class="form-control" placeholder="choose strong password" autocomplete="off" required>
                </div>
                <div class="col-auto">
                    <span class="form-text">
                        Must be 8-20 characters long.
                    </span>
                </div>
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>
<?php


?>