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
        $_SESSION['feedback'] = "Generated! Your short URL is: <a href='http://localhost:63342/phpchain/url_short/redirect.php?code={$code}'>http://localhost:63342/phpchain/url_short/{$code}</a>";
    }else{
        $_SESSION['feedback'] = "There was a problem. INVALID URL perhaps";
    }
}

header("Location: index.php");