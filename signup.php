<?php
session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $user_name  = $_POST['user_name'];
        $password = $_POST['password'];
        if(!empty($user_name) && !empty($password)){
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
            mysqli_query($con,$query);
            header("Location: login.php");
            die;
        }
        else echo "Please fill all the fields!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login">
        <h1 id="heading">Signup</h1>

        <form action="signup.php" method="post">
            <input type="text" name="user_name" placeholder="username">
            <br>
            <input type="password" name="password" placeholder="password">
            <br>
            <button type="submit" value="login"><a>Signup</a></button>
            <h3 id="login-signup">have an account!</h3>
            <button><a href="login.php">login</a></button>
        </form>
    </div>
</body>
</html>