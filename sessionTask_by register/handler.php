<?php
session_start();
require_once("validation.php");

 $errors=[];

if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST"){

    $name= trim(htmlentities(htmlspecialchars($_POST['name'])));
    $email= trim(htmlentities(htmlspecialchars($_POST['email'])));
     $phone= trim(htmlentities(htmlspecialchars($_POST['phone'])));
     $password= trim(htmlentities(htmlspecialchars($_POST['password'])));
     $gender= trim(htmlentities(htmlspecialchars($_POST['gender'])));


if(requiredInput($name)){
    $errors[]="please inter name";
    die;
}elseif(minLength_input($name ,2)){
    $errors[]="name must be greater than 2 chars ";
    die();
}elseif(maxLength_input($name ,30)){
    $errors[]="name must be smaller than 20 chars ";
    die();
    }
echo"<br>";

if(requiredInput($email)){
   $errors[]="please inter email";
    die;
}elseif( validateEmail($email)){
    $errors[]="your email not correct";
    die;
}echo"<br>";

if(requiredInput($phone)){
    $errors[]="please inter phone";
    die;
}elseif(validatePhone($phone)&& minLength_input($phone ,11)){
    
    $errors[]=" check your phone number again ,its not correct";
    die;
}echo"<br>";

if(requiredInput($password)){
    $errors[]="please inter password";
    die;
}elseif((minLength_input($password ,8) &&maxLength_input($password ,12))){
    $errors[]=" check your password again ,inter only numbers";
    die;
}echo"<br>";
$ggenderr=["female","male"];
if(empty($gender)){
   $errors[]="please , choose your gender";
    die;
}elseif(!(in_array($gender,$ggenderr))){
    $errors[]="not correct";
    die;
}echo"<br>";
if(empty($errors)){
 $_SESSION['name']=$name;
 $_SESSION['email']=$email;
 $_SESSION['password']=$password;
 $_SESSION['gender']=$gender;
 $_SESSION['phone']=$phone;
 
}else{
$_SESSION['errors']=$errors;
}

}else{
    echo "not supported method";}


?>