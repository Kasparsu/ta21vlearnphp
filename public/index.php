<?php

// var_dump($_SERVER);


switch($_SERVER['REQUEST_URI']){
    case '/':
        include 'views/index.php';
        break;
    case '/about':
        include 'views/about.php';
        break;
    default: 
        echo '404';
}