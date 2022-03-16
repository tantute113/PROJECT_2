
<!DOCTYPE html>
<html lang="en">
<head>
  <base href="http://localhost/MVC_DOAN/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Dancing+Script" />
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/<?php echo $data['css'];?>.css">
   
    <title>Document</title>
</head>
<body>
  <?php
require "./mvc/views/block/header.php"; 
  ?>

  <div class="content">
   
    <?php require "./mvc/views/layout/".$data['page'].".php";   ?>
  </div>
 <?php

require "./mvc/views/block/footer.php";


?>
</body>
</html>