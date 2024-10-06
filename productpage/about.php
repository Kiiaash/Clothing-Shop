<?php include("../config/conf.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>this is the about page</h1>
    <?php 
        $sql_get="SELECT * FROM `about`";
        $sql_get_result = mysqli_query($con,$sql_get);
        $nums=mysqli_num_rows($sql_get_result);
        if($nums>0){
            $w=1;
            while($w<=$nums){
                $w++;
                $about = mysqli_fetch_assoc($sql_get_result);
            }
        }
    ?>
    <img src="../pictures/<?= $about["header"] ?>" width="90%" height="350" align="center">
    <p><?= $about["title"] ?></p>
    <p><?= $about["text"] ?></p>
</body>
</html>