<?php

$name = 'Tejas';
$age = 26;

if(strtolower($name) === 'tejasa'){
    if($age < 26){
        echo 'You are below 26';
    }else if($age === 26){
        echo 'age is correct';
    }
}else{
    
    echo 'you are not tejas';
}

?>