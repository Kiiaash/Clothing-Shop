<?php include("../config/conf.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Product Update</h1>
   <?php 
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql_get = "SELECT * FROM `porducts` WHERE id ='$id'";
        $sql_result = mysqli_query($con,$sql_get);
        $num = mysqli_num_rows($sql_result);
        if($num > 0){
            $y=1;
            while($y<=$num){
                $y++;
                $dataa= mysqli_fetch_assoc($sql_result);
               
            }
        }
    }
    var_dump($dataa);
   ?>
   <form class="=proreg" method="post" action="" enctype="multipart/form-data"> 
        <label class="label1">NAME</label><br>
        <input type="text" name="proname" class="input-small" value="<?= $dataa["name"] ?>"><br>
        <label class="label1">DESCRIPTION</label><br>
        <textarea name="prodes" class="input-big"><?= $dataa["description"] ?></textarea><br>
        <label class="label1">PRICE</label><br>
        <input type="text" name="proprice" class="input-small" value="<?= $dataa["price"] ?>"><br>
        <label class="label1">CATEGORY</label><br>
        <div class="label1"><b>Current Category:</b>
        <?php 
                                $gender=$dataa["category"];
                                switch($gender){
                                    case $gender==11:
                                        echo "men";
                                        break;
                                    case $gender==12:
                                        echo "women";
                                        break;
                                    case $gender==13:
                                        echo "boys";
                                        break;
                                    case $gender==14:
                                        echo "girls";
                                        break;
                                    case $gender==15:
                                        echo "children";
                                        break;
                                } 
                            ?>
        </div>
        <select class="input-small" name="procat">
            <?php include("product.selection.php");?>
        </select><br>
        <label class="label1">SIZE 1</label><br>
        <input type="text" name="prosize1" class="input-small" value="<?php echo $dataa["size"];?>"><br>
        <label class="label1">SIZE 2</label><br>
        <input type="text" name="prosize2" class="input-small"  value="<?php echo $dataa["size2"];?>"><br>
        <label class="label1">SIZE 3</label><br>
        <input type="text" name="prosize3" class="input-small"  value="<?php echo $dataa["size3"];?>"><br>
        <label class="label1">SIZE 4</label><br>
        <input type="text" name="prosize4" class="input-small"  value="<?php echo $dataa["size4"];?>"><br>
        <label class="label1">SIZE 5</label><br>
        <input type="text" name="prosize5" class="input-small"  value="<?php echo $dataa["size5"];?>"><br>
        <label class="label1">SIZE 6</label><br>
        <input type="text" name="prosize6" class="input-small"  value="<?php echo $dataa["size6"];?>"><br>
        <label class="label1"><b>Current Color:<div style="width: 20px; height:20px; background-color:<?= $dataa["color"] ?>; border-radius:50%;"></div></b></label>
        <label class="label1">COLOR</label><br>
        <input type="color" name="procolor" class="input-small"><br>
        <label class="label1"><b>Current Color:<div style="width: 20px; height:20px; background-color:<?= $dataa["color2"] ?>; border-radius:50%;"></div></b></label>
        <label class="label1">COLOR 2</label><br>
        <input type="color" name="procolor2" class="input-small"><br>
        <label class="label1"><b>Current Color:<div style="width: 20px; height:20px; background-color:<?= $dataa["color3"] ?>; border-radius:50%;"></div></b></label>
        <label class="label1">COLOR 3</label><br>
        <input type="color" name="procolor3" class="input-small"><br>
        <label class="label1"><b>Current Color:<div style="width: 20px; height:20px; background-color:<?= $dataa["color4"] ?>; border-radius:50%;"></div></b></label>
        <label class="label1">COLOR 4</label><br>
        <input type="color" name="procolor4" class="input-small"><br>
        <label class="label1"><b>Current Color:<div style="width: 20px; height:20px; background-color:<?= $dataa["color5"] ?>; border-radius:50%;"></div></b></label>
        <label class="label1">COLOR 5</label><br>
        <input type="color" name="procolor5" class="input-small"><br>
        <img src="../pictures/<?= $dataa["photo"] ?>" width="150" height="150" alt="<?= $dataa["name"] ?>">
        <label class="label1">PHOTO 1</label><br>
        <input type="file" name="prophoto1" class="chosefile"><br>
        <img src="../pictures/<?= $dataa["photo2"] ?>" width="150" height="150" alt="<?= $dataa["name"] ?>">
        <label class="label1">PHOTO 2</label><br>
        <input type="file" name="prophoto2" class="chosefile"><br>
        <img src="../pictures/<?= $dataa["photo3"] ?>" width="150" height="150" alt="<?= $dataa["name"] ?>">
        <label class="label1">PHOTO 3</label><br>
        <input type="file" name="prophoto3" class="chosefile"><br>
        <img src="../pictures/<?= $dataa["photo4"] ?>" width="150" height="150" alt="<?= $dataa["name"] ?>">
        <label class="label1">PHOTO 4</label><br>
        <input type="file" name="prophoto4" class="chosefile"><br>
        <img src="../pictures/<?= $dataa["photo5"] ?>" width="150" height="150" alt="<?= $dataa["name"] ?>">
        <label class="label1">PHOTO 5</label><br>
        <input type="file" name="prophoto5" class="chosefile"><br>
        <img src="../pictures/<?= $dataa["photo6"] ?>" width="150" height="150" alt="<?= $dataa["name"] ?>">
        <label class="label1">PHOTO 6</label><br>
        <input type="file" name="prophoto6" class="chosefile"><br>
        <label class="label1">BRAND</label><br>
        <input type="text" name="probrand" class="input-small" value="<?= $dataa["brand"] ?>"><br>
        <label class="label1">IN STOCK</label><br>
        <input type="text" name="prostock" class="input-small" value="<?= $dataa["instock"] ?>"><br>
        <label class="label1">SALE NUM</label><br>
        <input type="text" name="prosale" class="input-small" value="<?= $dataa["sellchecknum"] ?>"><br>
        <label class="label1">OFF</label><br>
        <input type="text" name="prooff" class="input-small" value="<?= $dataa["off"] ?>%"><br>
        <input type="submit" name="proup" class="reg-btn-big" value="Update"><br>
    </form>
    <?php
    if(isset($_POST["proup"])){
        if(isset($_POST["procat"])){
            $name=filter_input(INPUT_POST,"proname",FILTER_SANITIZE_SPECIAL_CHARS);
            $des=filter_input(INPUT_POST,"prodes",FILTER_SANITIZE_SPECIAL_CHARS);
            $price=filter_input(INPUT_POST,"proprice",FILTER_SANITIZE_SPECIAL_CHARS);
            $str1=filter_input(INPUT_POST,"prosize1",FILTER_SANITIZE_SPECIAL_CHARS);
            $size1=strtoupper($str1);

            $str2=filter_input(INPUT_POST,"prosize2",FILTER_SANITIZE_SPECIAL_CHARS);
            $size2=strtoupper($str2);

            $str3=filter_input(INPUT_POST,"prosize3",FILTER_SANITIZE_SPECIAL_CHARS);
            $size3=strtoupper($str3);

            $str4=filter_input(INPUT_POST,"prosize4",FILTER_SANITIZE_SPECIAL_CHARS);
            $size4=strtoupper($str4);

            $str5=filter_input(INPUT_POST,"prosize5",FILTER_SANITIZE_SPECIAL_CHARS);
            $size5=strtoupper($str5);

            $str6=filter_input(INPUT_POST,"prosize6",FILTER_SANITIZE_SPECIAL_CHARS);
            $size6=strtoupper($str6);

            $str1=filter_input(INPUT_POST,"prosize1",FILTER_SANITIZE_SPECIAL_CHARS);
            $size1=strtoupper($str1);
            $color=filter_input(INPUT_POST,"procolor",FILTER_SANITIZE_SPECIAL_CHARS);
            $color2=filter_input(INPUT_POST,"procolor2",FILTER_SANITIZE_SPECIAL_CHARS);
            $color3=filter_input(INPUT_POST,"procolor3",FILTER_SANITIZE_SPECIAL_CHARS);
            $color4=filter_input(INPUT_POST,"procolor4",FILTER_SANITIZE_SPECIAL_CHARS);
            $color5=filter_input(INPUT_POST,"procolor5",FILTER_SANITIZE_SPECIAL_CHARS);
            $filetmp1=$_FILES["prophoto1"]["tmp_name"];
            $filename1=$_FILES["prophoto1"]["name"];

            $filetmp2=$_FILES["prophoto2"]["tmp_name"];
            $filename2=$_FILES["prophoto2"]["name"];

            $filetmp3=$_FILES["prophoto3"]["tmp_name"];
            $filename3=$_FILES["prophoto3"]["name"];

            $filetmp4=$_FILES["prophoto4"]["tmp_name"];
            $filename4=$_FILES["prophoto4"]["name"];

            $filetmp5=$_FILES["prophoto5"]["tmp_name"];
            $filename5=$_FILES["prophoto5"]["name"];

            $filetmp6=$_FILES["prophoto6"]["tmp_name"];
            $filename6=$_FILES["prophoto6"]["name"];

            $path="../pictures/";
            $brand=filter_input(INPUT_POST,"probrand",FILTER_SANITIZE_SPECIAL_CHARS);
            $stock=filter_input(INPUT_POST,"prostock",FILTER_SANITIZE_SPECIAL_CHARS);
            $sale=filter_input(INPUT_POST,"prosale",FILTER_SANITIZE_SPECIAL_CHARS);
            $off=filter_input(INPUT_POST,"prooff",FILTER_SANITIZE_SPECIAL_CHARS);
            $category=$_POST["procat"];
            $save=$path.$filename1;
            $save2=$path.$filename2;
            $save3=$path.$filename3;
            $save4=$path.$filename4;
            $save5=$path.$filename5;
            $save6=$path.$filename6;

            $move=$save.$save2.$save3.$save4.$save5.$save6;
            $filetmplot=$filetmp1.$filetmp2.$filetmp3.$filetmp4.$filetmp5.$filetmp6;

            move_uploaded_file($filetmp1,$save);
            move_uploaded_file($filetmp2,$save2);
            move_uploaded_file($filetmp3,$save3);
            move_uploaded_file($filetmp4,$save4);
            move_uploaded_file($filetmp5,$save5);
            move_uploaded_file($filetmp6,$save6);
            
        $sql="UPDATE `porducts` SET name='$name', description ='$des',price='$price',
        category='$category', size='$size1',size2='$size2',size3='$size3',size4='$size4',
        size5='$size5',size6='$size4',color='$color',color2='$color2',color3='$color3',
        color4='$color4',color5='$color5',photo='$save',photo2='$save2',photo3='$save3',
        photo4='$save4',photo5='$save5',photo6='$save6',brand='$brand',instock='$stock',
        off='$off'";
        mysqli_query($con,$sql);
        // VALUES('$save','$save2','$save3','$save4','$save5','$save6','$brand','$stock','$sale','$off',current_timestamp())";
        // $res=mysqli_query($con,$sql);

        //$sqlinstock="INSERT INTO `stocknum` (`name`,`productid`,`instocknum`) VALUES('$name','$productid','$stock')";
        //$res2=mysqli_query($con,$sqlinstock);
        echo "succesful";
        }
    }else{
        echo "not succesful";
    }
    
?>
</body>
</html>