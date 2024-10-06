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
    <form method="post" name="logoswitcher" action="" enctype="multipart/form-data">
        <label class="label1">Enter the name</label><br>
        <input type="text" name="logname" class="input-small"><br>
        <label class="label1">Enter your header logo</label><br>
        <input type="file" name="logo1" class="chosefile"><br>
        <input type="submit" name="logins" class="reg-btn-small"><br>
    </form>
    <?php 
        if(isset($_POST["logins"])){
            $name = filter_input(INPUT_POST,"logname",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $filename = $_FILES["logo1"]["name"];
            $filetmp = $_FILES["logo1"]["tmp_name"];
            $path = "../pictures/";
            $save = $path.$filename;
            move_uploaded_file($filetmp,$save);
            $sql_inser = "INSERT INTO `logos` (`name`,`photo`) VALUES('$name','$save')";
            mysqli_query($con,$sql_inser);
            echo "successfull";
        }
    ?>
    <hr>
    <hr>
    <?php 
       include("logoswitch.show.php");
    ?>
</body>
</html>