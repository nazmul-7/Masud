<?php

include_once "../config/session.php";
define('BASE_URL', 'http://localhost/masud');
    session::start();
    

    $totalPrice=(session::get('totalPrice'))? session::get('totalPrice'): 0 ;
    $curtInfomation=(session::get('curtInfomation'))? session::get('curtInfomation'): [[]] ;

    $size = (count($curtInfomation));
    if($size==1 && !(session::get('curtInfomation')))
        $size--;
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $curtInfomation[$size]['foodName'] = isset($_POST["foodName"])? $_POST["foodName"]: NULL;
        $curtInfomation[$size]['restaurantName'] = isset($_POST["restaurantName"])? $_POST["restaurantName"]: NULL;
        $curtInfomation[$size]['foodPrice'] = isset($_POST["foodPrice"])? $_POST["foodPrice"]: 0;

        $totalPrice+=$curtInfomation[$size]['foodPrice'];
        
        session::set('curtInfomation',$curtInfomation);
        session::set('totalPrice',$totalPrice);
        header("Location: ".BASE_URL."/".$curtInfomation[$size]['restaurantName'].".php");

    }

    //session::unset('curtInfomation');

?>