<?php
/**
 * Created by PhpStorm.
 * User: BrandonW
 * Date: 3/10/2019
 * Time: 1:44 PM
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>URL</title>
</head>
<body>
<div class="container">
    <h1 class="title">Shorten a URL</h1>

    <form action="shorten.php" method="post">
        <input type="url" name="url" placeholder="Enter a URL here" autocomplete="off">
        <input type="submit" value="Shorten">
    </form>

</div>

</body>
</html>
