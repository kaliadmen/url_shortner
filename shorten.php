<?php
/**
 * Created by PhpStorm.
 * User: BrandonW
 * Date: 3/10/2019
 * Time: 2:17 PM
 */

session_start();
require_once 'classes/Shortener.php';

$short = new Shortener();

if(isset($_POST['url'])){
    $url = $_POST['url'];

    if($code = $short->makeCode($url)){
        echo $code;
    }else{
//        Problem
    }
}