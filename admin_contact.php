<?php

@include 'config.php';
session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>admin message</title>

        <!-- font awesome cnd link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <!-- custom css link -->
        <link rel = "stylesheet" href="css/components.css">
        <link rel = "stylesheet" href="css/header.css">
        <link rel = "stylesheet" href="css/admin_update_profile.css">
        <link rel = "stylesheet" href="css/admin_style.css">

                
    </head>
    <body>
        <?php include 'admin_header.php'; ?>


        <script src="js/script.js"></script>
    </body>
</html> 

