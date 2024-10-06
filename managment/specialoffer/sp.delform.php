<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spdelform</title>
</head>
<body>
<form method="post" name="delfrom" action="">
    <input type="hidden" name="hidid" value="<?= $row["id"] ?>">
    <input type="submit" name="del" value="X" class="proregmar">
    <?php 
        if(isset($_POST["del"])){
            $id=$_POST["hidid"];
            $sqldel="DELETE FROM `specialoffer` WHERE id='$id'";
            mysqli_query($con,$sqldel);
        }
    ?>
</form>
</body>
</html>