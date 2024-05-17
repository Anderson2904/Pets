<?php
    session_start();
    if(isset($_SESSION["id_users"])){
        //header("location:home.php");
        header("refresh:0;url=signin.php");
    }else{
        header("refresh:0;url=home.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets</title>
</head>
<body>
    <a href = "backend/logout.php">Sign out</a>
</body>
</html>