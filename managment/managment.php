<?php
    session_start();
?>
<?php
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managment</title>
    <link href="../css/clothingShopMain.css" type="text/css" rel="stylesheet">
</head>
<body class="mangbod">
    <div class="mangheader">
        <div class="userinfo">
            <div class="profile"></div>
            <div class="name">test<?php if(isset($_SESSION["username"])){echo $_SESSION["username"];}?></div>
            <form method="post" action="" name="exitform">
            <input type="submit" name="exit" value="Exit" class="mangexit"><br>
            <?php
                if(isset($_POST["exit"])){
                    
                    session_destroy();
                    header("location:../index.php");
                    
                }
            ?>
        </form>
        </div>
        <div class="managmentlogo"></div>
    </div>
    <div class="mangwrap">
        <div class="mangmenu">
            <?php
                include("managmentmenu/managmentmenu.php");
            ?>
        </div>
        <div class="mangbody">
            <?php
                include("wrapswitch.php");
            ?>
        </div>
    </div>
</body>
</html>