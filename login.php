<?php
session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $user_name  = $_POST['user_name'];
        $password = $_POST['password'];
        if(!empty($user_name) && !empty($password)){
            $query = "select * from users where user_name = '$user_name' limit 1";
            $result = mysqli_query($con,$query);
            
            if($result && mysqli_num_rows($result)>0){
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $password){
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;    
                } 
            }
            echo "Wrong username or password";  
            
          
        }
        else echo "Please fill all the fields!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class = "login">
        <h1 id="heading">Login</h1>

        <form action="login.php" method="post">
            <input type="text" name="user_name" placeholder="username">
            <br>
            <input type="password" name="password" placeholder="password">
            <br>
            <button type="submit" value="login"><a>Login</a></button>
            <h3 id="login-signup">don't have an account!</h3>
            <button><a href="signup.php">Signup</a></button>
        </form>
    </div>

</body>
</html>