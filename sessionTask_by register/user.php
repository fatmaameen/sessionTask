<?php
session_start();
if(!isset( $_SESSION['name'] )){
    header("location:view.php");
    die;
   
}elseif(!isset( $_SESSION['email'] )){
    header("location:view.php");
    die;
   
}elseif(!isset( $_SESSION['phone'] )){
    header("location:view.php");
    die;
   
}if(!isset( $_SESSION['password'] )){
    header("location:view.php");
    die;
   
}if(!isset( $_SESSION['gender'] )){
    header("location:view.php");
    die;
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $_SESSION['name'];?></h2>
    <h2><?php echo $_SESSION['email'];?></h2>
    <h2><?php echo $_SESSION['phone'];?></h2>
    <h2><?php echo $_SESSION['password'];?></h2>
    <h2><?php echo $_SESSION['gender'];?></h2>
</body>
</html>