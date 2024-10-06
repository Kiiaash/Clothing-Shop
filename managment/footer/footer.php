<?php 
    include("../config/conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>this is the footer section</h1>
    <form action="" method="post">
        <label class="label1">Enter you menu option</label>
        <input type="text" name="fo1" class="input-small">
        <input type="submit" name="foadd" class="reg-btn-big" value="Add">
    </form>
    <?php include("footer.insertion.php"); ?>
    <hr><hr><hr>
    <?php 
        $sql_get="SELECT * FROM `footer`";
        $sql_result = mysqli_query($con,$sql_get);
        $num = mysqli_num_rows($sql_result);
        if($num > 0){
            $r=1;
            while($r<=$num){
                $r++;
                $data = mysqli_fetch_assoc($sql_result);
                ?>
                    <div class="container">
                        <p><?= $data["name"] ?></p>
                        <p>
                            <form action="" method="post">
                                <input type="text" name="foup1" class="input-small">
                                <input type="submit" name="upd" class="reg-btn-big" value="Update">
                                <input type="submit" name="del" class="reg-btn-small" value="X">
                                <input type="hidden" name="hidid" value="<?= $data["id"] ?>">
                            </form>
                            <?php include("footer.delandup.php") ?>
                        </p>
                    </div>
                <?php
            }
        }
    ?>
</body>
</html>