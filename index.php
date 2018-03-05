<?php
$config = require("./config.php");
require_once("./libs/Parsedown.php");

$Parsedown = new Parsedown();
$readme = file_get_contents($config['filename']);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <meta name="description" content="<?php echo $config['meta-tags']['description'] ?>" />
    <meta name="keywords" content="<?php echo $config['meta-tags']['keywords'] ?>" />
    <meta name="author" content="<?php echo $config['meta-tags']['author'] ?>" />

    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="3 month">

    <title><? echo $config['file_name'] ?></title>

    <link rel="stylesheet" href="./css/main.css">


  </head>
  <body>
    <?php

    echo $Parsedown -> text(file_get_contents($config['filename']));

    ?>
  </body>
</html>
