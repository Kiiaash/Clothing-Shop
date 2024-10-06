<?php 
    include("../config/conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="../../css/clothingShopMain.css" type="text/css" rel="stylesheet">
</head> 
<body>
   <form method="post" name="addressandphone" action="">
    <label class="label1">Name</label><br>
    <input type="text" class="input-small" name="name"><br>
    <label class="label1">Adress</label><br>
    <textarea name="address" class="input-big"></textarea><br>
    <label class="label1">Phone Number</label><br>
    <input type="text" class="input-small" name="phone"><br>
    <input type="submit" name="subfo" class="reg-btn-big" value="Insert"><br>
   </form>
   <?php 
        if(isset($_POST["subfo"])){
            $foname=filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);
            $foaddres=filter_input(INPUT_POST,"address",FILTER_SANITIZE_SPECIAL_CHARS);
            $fophone=filter_input(INPUT_POST,"phone",FILTER_SANITIZE_NUMBER_INT);
            $sqlfo="INSERT INTO `addresandcontact` (`name`,`address`,`phonum`) VALUES('$foname','$foaddres','$fophone')";
            mysqli_query($con,$sqlfo);
            echo "succesful";
        }
   ?>
   <hr>
   <hr>
   <?php 
        $sqlshow="SELECT * FROM `addresandcontact`";
        $result=mysqli_query($con,$sqlshow);
        $num=mysqli_num_rows($result);
        if($num > 0){
            $f=1;
            while($f<= $num){
                $f++;
                $data=mysqli_fetch_assoc($result);
                ?>
                    <div class="addnphon">
                        <div class="id"><?= $data["id"] ?></div>
                        <div class="showname"><?= $data["name"] ?></div>
                        <div class="showname"><?= $data["address"] ?></div>
                        <div class="showname"><?= $data["phonum"] ?></div>
                        <form method="post" name="updandel" action="">
                            <label class="label1">Enter your new address</label><br>
                            <textarea name="inp1" class="input-big"></textarea><br>
                            <label class="label1">Enter your new number</label><br>
                            <input type="text" class="input-small" name="inp2"><br>
                            <input type="hidden" name="hidid" value="<?= $data["id"] ?>">
                            <input type="submit" class="reg-btn-big" value="UPDATE" name="upadd">
                            <input type="submit" name="del" value="X" class="reg-btn-small">
                        </form>
                    </div>
                <?php
            }
        }
   ?>
   <?php 
       include("addnphon.update.php");
   ?>
   <?php 
        include("addnphon.delete.php");
   ?>
</body>
</html>