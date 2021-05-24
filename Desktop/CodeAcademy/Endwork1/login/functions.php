<?php

function check_login($con)
{
    if(isset($_SESSION['email']))
    {
        $email = $_SESSION['email'];
        $query = "SELECT * FROM users WHERE email = '$email' limit 1";
        $result = mysqli_query($con,$query) or die(mysqli_error($con));
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    header("Location: login.php");
    die;
}

function phpAlert($msg)
{
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

