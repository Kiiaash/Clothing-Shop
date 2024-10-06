<?php 
    include("../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U top choice</title>
    <link href="../../css/clothingShopMain.css" type="text/css" rel="stylesheet">
</head>
<body>
   <form method="post" action="" name="utpform" enctype="multipart/form-data">
        <label class="proregmar">Title</label><br>
        <input type="text" name="utptitle" class="proregmar"><br>
        <label class="proregmar">Photo</label><br>
        <input type="file" name="utpfile" class="proregmar"><br>
        <input type="submit" name="utpadd" value="ADD" class="proregmar"><br>
   </form> 
   <?php
       include("utp.php");
   ?>
   <hr>
   <hr>
   <hr>
   <hr>
   <?php 
     include("utp2.php");
   ?>
   
</body>
</html>