<?php
    session_start();

    require_once("connection.php");
    require_once("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con,$_POST['password']);

        if(!empty($email) && !empty($password))
        {
            $query = "INSERT INTO users (password, email) values ('$password', '$email')";

            mysqli_query($con,$query);

            header("Location: login.php");
            die;
        }
        else
        {
         echo phpAlert(   "Wrong information"   );
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="login_style.css">
    <title>Signup</title>
</head>
<body>
<form class="form" method="POST">
    <div class="container text-center container">
        <div class="card border-dark" style="">
            <div class="card-header">Signup</div>
            <div class="card-body text-dark">
                <div class="form-group mb-3">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group mb-3">
                    <label for="password1">Password</label>
                    <input type="password" class="form-control" id="password1" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Signup</button>
                <a href="login.php">Login</a>
            </div>
        </div>
    </div>
</form>
</body>
</html>
