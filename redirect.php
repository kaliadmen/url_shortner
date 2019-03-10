<?php
/**
 * Created by PhpStorm.
 * User: BrandonW
 * Date: 3/10/2019
 * Time: 2:20 PM
 */

require_once 'classes/Shortener.php';

if($_GET['code']){
    $short = new Shortener();
    $code = $_GET['code'];

    if($url = $short->getUrl($code)){
        header("Location: {$url}");
        die();
    }
}

header("Location: index.php");