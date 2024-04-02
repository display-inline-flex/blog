<?php
    session_start();
    define('ROOT_PASS', dirname(__FILE__));
    define('BASE_URL', 'http://blog/');


    //db connect
    $conn = mysqli_connect('localhost', 'root', '', 'returnOrder');

    if(!$conn){
        die('Cannot connect');
    }

    
?>

