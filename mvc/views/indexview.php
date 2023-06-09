
<!DOCTYPE html>
<html lang="en">
<head>
  <base href="http://localhost/MVC_DOAN/" >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/header.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Dancing+Script" />
    <link rel="stylesheet" href="public/css/footer.css">
    <link rel="stylesheet" href="public/css/<?php echo $data['css'];?>.css">
   
    <title>Document</title>
    
</head>
<body>
  <?php
$this->render("header");
  ?>

  <div class="content">
   
    <?php require "./mvc/views/layout/".$data['page'].".php";   ?>
  </div>
 
 
 <?php

$this->render("footer");
?>

</body>
<script> 
    $(document).on('click', 'ul li', function() {
            $(this).addClass('trangchu').siblings().removeClass('trangchu')
        })
</script>

</html>