<?php 
function checkAge($age){
    try{
        if($age<18){
            throw new Exception("Age must be over 18");
        } echo "Welcome to website";
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }
}
checkAge(20);