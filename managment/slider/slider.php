<?php 
    include("../config/conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slider</title>
    <link href="../../css/clothingShopMain.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>You can add your images here</h1><br>
    <form method="post" name="sliderphotoform" action="" enctype="multipart/form-data">
        <label class="proregmar">Add your photo</label><br>
        <input type="text" name="photname" class="proregmar"><br>
        <input type="file" name="sliphot" class="proregmar"><br>
        <input type="submit" name="addphot" class="proregmar" value="ADD"><br>
        <?php 
            if(isset($_POST["addphot"])){
                $name=$_POST["photname"];
                $filetmp=$_FILES["sliphot"]["tmp_name"];
                $filename=$_FILES["sliphot"]["name"];
                $path="../pictures/";
                $save=$path.$filename;
                move_uploaded_file($filetmp,$save);
                $insert="INSERT INTO `sliderimages` (`name`,`photo`,`regdate`)
                VALUES('$name','$save',current_timestamp())";
                $insertres=mysqli_query($con,$insert);
                echo "done";
            }
        ?>
    </form>

    <hr><hr><hr>
    <?php 
        $call="SELECT * FROM `sliderimages`";
        $callres=mysqli_query($con,$call);
        $num=mysqli_num_rows($callres);
        if($num>0){
            $e=1;
            while($e<=$num){
                $e++;
                $slidata=mysqli_fetch_assoc($callres);
                ?>
                    <div class="sliderimage">
                        <div class="slidernum"><?= $slidata["id"] ?></div>
                        <div class="slidername"><?= $slidata["name"] ?></div>
                        <img src="<?= $slidata["photo"]?>" width="450" height="200">
                        <form method="post" name="upnrev" enctype="multipart/form-data" action="">
                            <input type="file" name="upfile" class="proregmar">
                            <input type="hidden" name="hidid" value="<?= $slidata["id"] ?>">
                            <input type="submit" name="rev" value="X" class="proregmar">
                            <input type="submit" name="up" value="Update" class="proregmar">
                        </form>
                    </div>
                <?php
            }
        }
    ?>
    <?php 
        if(isset($_POST["up"])){
            $id=$_POST["hidid"];
            $filename2=$_FILES["upfile"]["name"];
            $filetmp2=$_FILES["upfile"]["tmp_name"];
            $path="../pictures/";
            $save2=$path.$filename2;
            move_uploaded_file($filetmp2,$save2);
            $query="UPDATE `sliderimages` SET `photo`='$save2' WHERE id='$id'";
            $qres=mysqli_query($con,$query);
        }
        if(isset($_POST["rev"])){
            $id=$_POST["hidid"];
            $revcall="DELETE FROM `sliderimages` WHERE id='$id'";
            $revcallres=mysqli_query($con,$revcall);
            echo "done"; 
        }
        
    ?>
</body>
</html>