<?php 
    include("../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>social media</title>
    <link href="../../css/clothingShopMain.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form name="socialmreg" method="post" action="" enctype="multipart/form-data">
        <label class="proregmar">Name</label><br>
        <input type="text" name="smname" class="proregmar"><br>
        <label class="proregmar">Icon</label><br>
        <input type="file" name="smfile" class="proregmar"><br>
        <label class="proregmar">Link</label><br>
        <input type="text" name="smlink" class="proregmar"><br>
        <input type="submit" name="smsub" value="INSERT" class="proregmar"><br>
    </form>
    <?php 
        include("sm.config.php");
    ?>
</body>
</html>