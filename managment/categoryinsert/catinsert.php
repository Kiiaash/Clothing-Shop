<?php 
    include('../config/conf.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Insert you category</h1>
    <form method="post" action="" name="catinsertform" enctype="multipart/form-data">
        <label class="label1">Name</label>
        <input type="text" name="catname" class="input-small">
        <lable class="label1">Insert the photo</lable>
        <input type="file" name="catphoto" class="chosefile">
        <input type="submit" name="catreg" class="reg-btn-big">
    </form>
    <?php 
        if(isset($_POST["catreg"])){    
            $catname = filter_input(INPUT_POST,"catname",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $catnamefl = $_FILES["catphoto"]["name"];
            $cattmp = $_FILES["catphoto"]["tmp_name"];
            $path = "../pictures/";
            $save = $path.$catnamefl;
            move_uploaded_file($cattmp,$save);
            $sql_insert = "INSERT INTO `category` (`name`,`photo`) VALUES('$catname','$save')";
            mysqli_query($con,$sql_insert);
            echo "successful";
        }
    ?>
    <hr><hr><hr>
    <?php 
        $sql_get = "SELECT * FROM `category`";
        $result = mysqli_query($con,$sql_get);
        $nums = mysqli_num_rows($result);
        if($nums > 0){
            $t=1;
            while($t<=$nums){
                $t++;
                $data = mysqli_fetch_assoc($result);
                ?>
                    <div class="catholder">
                        <img src="<?= $data["photo"] ?>" width="100" height="100" alt="<?= $data["name"] ?>">
                        <div class="name"><?= $data["name"] ?></div>
                        <form method="post" action="">
                            <input type="hidden" name="hiddenid" value="<?= $data["id"] ?>">
                            <input type="submit" name="delete" class="reg-btn-small" value="X">
                        </form>
                    </div>
                    <?php 
                        if(isset($_POST["delete"])){
                            $id = $_POST["hiddenid"];
                            $sql_del = "DELETE FROM `category` WHERE id = '$id'";
                            mysqli_query($con,$sql_del);
                            echo "successful";
                        }
                    ?>

                <?php
            }
        }
    ?>
</body>
</html>