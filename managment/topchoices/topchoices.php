<?php 
    include("../config/conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Choices</title>
    <link href="../../css/clothingShopMain.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php
        if(isset($_GET["id"])){ 
            $id=$_GET["id"];
            $sqlins="SELECT * FROM `porducts` WHERE id='$id'";
            $result=mysqli_query($con,$sqlins);
            $num=mysqli_num_rows($result);
            if($num > 0){
                $roww=mysqli_fetch_assoc($result);
            }
        }else{
            echo "access denied";
        }
    ?>
    <form method="post" action="" name="tchform" enctype="multipart/form-data">
        <label class="proregmar">Name</label><br>
        <input type="text" name="tname" class="proregmar" value="<?= $roww["name"]  ?>"><br>
        <label class="proregmar">Description</label><br>
        <textarea class="proregmar" name="tpdes"><?= $roww["description"] ?></textarea><br>
        <div class="proregmar"><img src="<?= $roww["photo"] ?>" width="50" height="50" alt="<?= $roww["name"] ?>"></div>
        <div class="proregmar"><img src="<?= $roww["photo2"] ?>" width="50" height="50" alt="<?= $roww["name"] ?>"></div>
        <div class="proregmar"><img src="<?= $roww["photo3"] ?>" width="50" height="50" alt="<?= $roww["name"] ?>"></div>
        <div class="proregmar"><img src="<?= $roww["photo4"] ?>" width="50" height="50" alt="<?= $roww["name"] ?>"></div>
        <div class="proregmar"><img src="<?= $roww["photo5"] ?>" width="50" height="50" alt="<?= $roww["name"] ?>"></div>
        <div class="proregmar"><img src="<?= $roww["photo6"] ?>" width="50" height="50" alt="<?= $roww["name"] ?>"></div>
        <input type="file" name="ph1" class="proregmar"><br>
        <input type="file" name="ph2" class="proregmar"><br>
        <label class="proregmar">Current Price</label><br>
        <input type="text" name="tcp" class="proregmar"><br>
        <label class="proregmar">Old price</label><br>
        <input type="text" name="top" class="proregmar"  value="<?= $roww["price"] ?>"><br>
        <label class="proregmar">Rating</label><br>
        <input type="text" name="trat" class="proregmar"><br>
        <label class="proregmar">Off Percentage</label><br>
        <input type="text" name="topc" class="proregmar"  value="<?= $roww["off"] ?>"><br>
        <input type="submit" name="tpins" class="proregmar" value="INSERT"><br>
    </form>
    <?php 
        if(isset($_POST["tpins"])){
            $name=$roww["name"];
            $des=$roww["description"];
            $pho=$roww["photo"];
            
        }
    ?>
    
    <hr>
    <hr>
    <hr>
    <hr>

    <div class="topchshow">
        <div class="tpid"></div>
        <div class="tpname"></div><br>
        <textarea class="tpdes"></textarea><br>
        <div class="tpcurpri"></div>
        <div class="tpolpri"></div>
        <div class="tpoffpr"></div><br>
        <div class="tprati"></div><br>
        <div class="ph1"></div>
        <div class="ph2"></div>
        <br>
        <br>
        <br>
    </div>
</body>
</html>