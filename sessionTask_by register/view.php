<?php
session_start();
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
    <?php  if(isset($_SESSION['errors'])) :?>
<?php foreach($_SESSION['errors'] as $error):     ?>
<?php  echo"<h1> $error<h1>";?>
<?php endforeach;?>
<?php  unset($_SESSION['errors']);?>
<?php  endif;?>
    <form  action="handlar.php" method="POST">
<input type="text" name="name" placeholder="name">
<input type="email" name="email" placeholder="email">
<input type="text" name="gender" placeholder="gender">
<input type="text" name="phone" placeholder="phone">
<input type="text" name="password" placeholder="password">
<input type="submit" name="submit">
    </form>
</body>
</html>