<?php
    include("../config/conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hidid</title>
</head>
<body>
    <?php
        // $sql="SELECT * FROM category";
        // $result=mysqli_query($con,$sql);
        // $num=mysqli_num_rows($result);
        // if($num > 0){
        //     $a=1;
        //     while($a<=$num){
        //         $a++;
        //         $row=mysqli_fetch_assoc($result);
    ?>
                    <form method="post" name="hidid" action="">
                        <input type="text" name="hid" value="<?php //$row["id"] ?>">
                    </form>
    <?php
        //     }
        // }
    ?>
</body>
</html>