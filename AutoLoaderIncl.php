<?php
//this autoloader file includes all the files from the directory 
spl_autoload_register('myAutoLoader');

function myAutoLoader($className)
{
    $extention=".php";
    $fullPath=$className.$extention;

    include_once $fullPath;
    
    // $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    // if(strpos($url, 'includes')!== false){
    //     $path='../classes/';
    // }
    // else{
    //     $path='classes/';
    // }
}
?>
