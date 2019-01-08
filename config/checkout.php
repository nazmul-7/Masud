<?php

include_once "../config/session.php";
define('BASE_URL', 'http://localhost/masud');
    session::start();
    
    session::unset('curtInfomation');
    session::unset('totalPrice');
    // echo "<pre>";
    //     print_r($_POST);
    //     echo "</pre>";
    header("Location: ".BASE_URL."/".$_POST["restaurantName"].".php");

    

    

?>