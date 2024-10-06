<?php
    include("../config/conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <form class="=proreg" method="post" action="" enctype="multipart/form-data"> 
        <label class="label1">NAME</label><br>
        <input type="text" name="proname" class="input-small"><br>
        <label class="label1">DESCRIPTION</label><br>
        <textarea name="prodes" class="input-big"></textarea><br>
        <label class="label1">PRICE</label><br>
        <input type="text" name="proprice" class="input-small"><br>
        <label class="label1">CATEGORY</label><br>
        <select class="input-small" name="procat">
            <?php
                include("product.selection.php");
            ?>
        </select><br>
        <label class="label1">SIZE 1</label><br>
        <input type="text" name="prosize1" class="input-small"><br>
        <label class="label1">SIZE 2</label><br>
        <input type="text" name="prosize2" class="input-small"><br>
        <label class="label1">SIZE 3</label><br>
        <input type="text" name="prosize3" class="input-small"><br>
        <label class="label1">SIZE 4</label><br>
        <input type="text" name="prosize4" class="input-small"><br>
        <label class="label1">SIZE 5</label><br>
        <input type="text" name="prosize5" class="input-small"><br>
        <label class="label1">SIZE 6</label><br>
        <input type="text" name="prosize6" class="input-small"><br>
        <label class="label1">COLOR</label><br>
        <input type="color" name="procolor" class="input-small"><br>
        <label class="label1">COLOR 2</label><br>
        <input type="color" name="procolor2" class="input-small"><br>
        <label class="label1">COLOR 3</label><br>
        <input type="color" name="procolor3" class="input-small"><br>
        <label class="label1">COLOR 4</label><br>
        <input type="color" name="procolor4" class="input-small"><br>
        <label class="label1">COLOR 5</label><br>
        <input type="color" name="procolor5" class="input-small"><br>
        <label class="label1">PHOTO 1</label><br>
        <input type="file" name="prophoto1" class="chosefile"><br>
        <label class="label1">PHOTO 2</label><br>
        <input type="file" name="prophoto2" class="chosefile"><br>
        <label class="label1">PHOTO 3</label><br>
        <input type="file" name="prophoto3" class="chosefile"><br>
        <label class="label1">PHOTO 4</label><br>
        <input type="file" name="prophoto4" class="chosefile"><br>
        <label class="label1">PHOTO 5</label><br>
        <input type="file" name="prophoto5" class="chosefile"><br>
        <label class="label1">PHOTO 6</label><br>
        <input type="file" name="prophoto6" class="chosefile"><br>
        <label class="label1">BRAND</label><br>
        <input type="text" name="probrand" class="input-small"><br>
        <label class="label1">IN STOCK</label><br>
        <input type="text" name="prostock" class="input-small"><br>
        <label class="label1">SALE NUM</label><br>
        <input type="text" name="prosale" class="input-small"><br>
        <label class="label1">OFF</label><br>
        <input type="text" name="prooff" class="input-small"><br>
        <input type="submit" name="prosub" class="reg-btn-big" value="ADD"><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST["prosub"])){
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
            
        $sql="INSERT INTO porducts (`name`,`description`,`price`,`category`,`size`,`size2`,`size3`,`size4`,`size5`,`size6`,`color`,`color2`,`color3`,`color4`,`color5`,`photo`,`photo2`,`photo3`,`photo4`,`photo5`,`photo6`,`brand`,`instock`,`sellchecknum`,`off`,`regdate`)
        VALUES('$name','$des','$price','$category','$size1','$size2','$size3','$size4','$size5','$size6','$color','$color2','$color3','$color4','$color5','$save','$save2','$save3','$save4','$save5','$save6','$brand','$stock','$sale','$off',current_timestamp())";
        $res=mysqli_query($con,$sql);

        

        //$sqlinstock="INSERT INTO `stocknum` (`name`,`productid`,`instocknum`) VALUES('$name','$productid','$stock')";
        //$res2=mysqli_query($con,$sqlinstock);
        echo "succesful";
        echo $category;
        }
    }else{
        echo "not succesful";
    }
    
?>

