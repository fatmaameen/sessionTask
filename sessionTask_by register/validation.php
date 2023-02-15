<?php

function requiredInput($input){
if(empty($input)){
    return true;
}else{
    return false;
}
}
function minLength_input($input ,$length){
if(strlen($input)<$length){
    return true;
}
return false;

}
function maxLength_input($input ,$length){
    if(strlen($input)>$length){
        return true;
    }
    return false;
    
    }

function validateEmail($input){
   if(!(filter_var($input ,FILTER_VALIDATE_EMAIL))) {
return true;
   }return false;
}

function validatePhone($input){
    if(!(filter_var($input,FILTER_VALIDATE_INT))){
        return true;
    }return false;
}
?>