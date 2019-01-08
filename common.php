<?php

include_once "config/session.php";
define('BASE_URL', 'http://localhost/masud');
    session::start();
    

    $totalPrice=(session::get('totalPrice'))? session::get('totalPrice'): 0 ;
    $curtInfomation=(session::get('curtInfomation'))? session::get('curtInfomation'): [[]] ;

    //$size = count($curtInfomation);

        // echo $size;
        // echo "<pre>";
        // print_r($curtInfomation);
        // echo "</pre>";
        


?>