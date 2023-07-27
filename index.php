<?php
session_start();
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class ="index" >
        <h1 id="heading">Hello <?php echo $user_data['user_name'] ?></h1>
        <h2 id="heading">You are successfully logged In!</h2>
        
        <button><a href="logout.php">Logout</a></button>
    </div>
</body>
</html>