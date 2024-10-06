<?php
   include("config/conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner</title>
    <link href="../../css/clothingShopMain.css" type="text/css" rel="stylesheet">
</head>
<body>
    <ul>
        <h2 class="proregmar">Tips</h2>
        <li class="proregmar">Icons used in this banner must be white</li>
    </ul>
    <form method="post" name="bannerform" action="" enctype="multipart/form-data">
        <label class="label1">NAME</label><br>
        <input type="text" name="bname" class="input-small"><br>
        <label class="label1">CONTENT</label><br>
        <input type="text" name="bcontent" class="input-small"><br>
        <label class="label1">ICON</label><br>
        <input type="file" name="icon" class="chosefile"><br>
        <input type="submit" name="insb" class="reg-btn-big"><br>
    </form>
    <?php include("bus.php"); ?>
    <hr>
    <hr>
    <hr>
    <?php include("buscontent.php"); ?>
</body>
</html>