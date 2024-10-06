<?php 
    include("../config/conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comments</title>
</head>
<body>
    <h1>Comment Section</h1>
    <table width="90%" border="1" align="center">
        <tr>
            <td>#</td>
            <td>USERNAME</td>
            <td>COMENT TEXT</td>
            <td>PRODUCT ID</td>
            <td>LIKES</td>
            <td>DISLIKES</td>
            <td>DATE</td>
            <td>OPTIONS</td>
        </tr>
        <?php 
            $commentssel="SELECT * FROM `comments`";
            $comres=mysqli_query($con,$commentssel);
            $comcount=mysqli_num_rows($comres);
            if($comcount>0){
                $e=1;
                while($e<=$comcount){
                    $e++;
                    $comdata=mysqli_fetch_assoc($comres);
                    ?>
                        <tr bgcolor="<?php if($comdata["id"] % 2 == 0){echo '#fff';}else{echo '#999';} ?>">
                            <td><?= $comdata["id"] ?></td>
                            <td><?= $comdata["username"] ?></td>
                            <td><?= $comdata["comtxt"] ?></td>
                            <td><?= $comdata["productid"] ?></td>
                            <td><?= $comdata["likes"] ?></td>
                            <td><?= $comdata["dislikes"] ?></td>
                            <td><?= $comdata["regdate"] ?></td>
                            <td>
                                <form method="post" name="optionform" action="">
                                    <input type="hidden" name="hiddenid" value="<?= $comdata["id"] ?>">
                                    <input type="submit" name="del" value="X">
                                    <?php 
                                        if(isset($_POST["del"])){
                                            $id=$_POST["hiddenid"];
                                            $del="DELETE FROM `comments` WHERE id='$id'";
                                            $delres=mysqli_query($con,$del);
                                            ?>
                                                <script>window.alert("successfully deleted")</script>
                                            <?php
                                        }
                                    ?>
                                </form>
                            </td>
                        </tr>
                    <?php
                }
            }
        ?>
    </table>
</body>
</html>