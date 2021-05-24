<?php

session_start();

require_once("connection.php");
require_once("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    if(!empty($email) && !empty($password))
    {

        //read from database
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $password)
                {
                    $_SESSION['email'] = $user_data['email'];
                    header("Location: index.php");
                    die;
                }
            }
        echo phpAlert(   "Wrong email or password"   );;
    }
    else
    {
        echo phpAlert(   "Wrong email or password"   );;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="login_style.css">
    <title>Login</title>
</head>
<body>
<form class="form" method="POST">
    <div class="container text-center container">
        <div class="card border-dark" style="">
            <div class="card-header">Login</div>
            <div class="card-body text-dark">
                <div class="form-group mb-3">
                    <label for="email1">Email address</label>
                    <input type="email" class="form-control" id="email1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group mb-3">
                    <label for="password1">Password</label>
                    <input type="password" class="form-control" id="password1" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="signup.php">Signup</a>
            </div>
        </div>
    </div>
</form>
</body>
</html>
