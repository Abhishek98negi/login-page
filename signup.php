<?php
session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $user_name  = $_POST['user_name'];
        $password = $_POST['password'];
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
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
</head>
<body>
    <h1>signup</h1>

    <form action="" method="post">
        <input type="text" name="user_name" placeholder="username">
        <br>
        <input type="password" name="password" placeholder="password">
        <br>
        <input type="submit" value="signup">
        <br>
        <a href="login.php">click to login</a>
    </form>

</body>
</html>