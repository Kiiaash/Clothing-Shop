<?php
    include("../config/conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders and shipments</title>
</head>
<body>
    <h1>Order's authoraizaition</h1>
    <table border="1" align="center" width="90%">
        <tr>
            <td>#</td>
            <td>NAME</td>
            <td>QUANTITY</td>
            <td>PRODUCT ID</td>
            <td>PRODUCT NAME</td>
            <td>ADDRESS</td>
            <td>PHONE</td>
            <td>EMIAL</td>
            <td>USERNAME</td>
            <td>DATE</td>
            <td>OPTIONS</td>
            <td>STATE</td>
        </tr>
        <?php
            $orderssel="SELECT * FROM `delivery`";
            $orderres=mysqli_query($con,$orderssel);
            $ordercount=mysqli_num_rows($orderres);
            if($ordercount > 0){
                $e=1;
                while($e<=$ordercount){
                    $e++;
                    $ordata=mysqli_fetch_assoc($orderres);
                    ?>
                        <tr bgcolor="<?php if($ordata["id"] % 2 == 0){echo '#fff';}else{echo '#999 ';} ?>">
                            <td><?= $ordata["id"] ?></td>
                            <td><?= $ordata["name"] ?></td>
                            <td><?= $ordata["quant"] ?></td>
                            <td><?= $ordata["productid"] ?></td>
                            <td><?= $ordata["productname"] ?></td>
                            <td><?= $ordata["useraddress"] ?></td>
                            <td><?= $ordata["userphon"] ?></td>
                            <td><?= $ordata["useremail"] ?></td>
                            <td><?= $ordata["uname"] ?></td>
                            <td><?= $ordata["regdate"] ?></td>
                            <td>
                                <form method="post" name="optionform" action="">
                                    <input type="hidden" name="hiddenid" value="<?= $ordata["id"] ?>">
                                    <input type="submit" name="del" value="X">
                                    <?php 
                                        if(isset($_POST["del"])){
                                            $id=$_POST["hiddenid"];
                                            $del="DELETE FROM `delivery` WHERE id='$id'";
                                            $delres=mysqli_query($con,$del);
                                            ?>
                                                <script>window.alert("successfully deleted")</script>   
                                            <?php
                                        }
                                    ?>
                                    <input type="submit" name="conf" value="confirm">
                                    <?php 
                                        if(isset($_POST["conf"])){
                                            $id=$_POST["hiddenid"];
                                            $confirm=1;
                                            $updata="UPDATE `delivery` SET `state`='$confirm' WHERE id='$id'";
                                            $updateres=mysqli_query($con,$updata);
                                            ?>
                                                <script>window.alert("successfully done")</script>   
                                            <?php
                                        }
                                    ?>
                                </form>
                            </td>
                            <td bgcolor="<?php if($ordata["state"] == 1){echo 'green';}else{echo 'red';} ?>" align="center">
                                <?php 
                                    if($ordata["state"] == 1){
                                        echo "confirmed";
                                    }else{
                                        echo "not confirmed";
                                    }
                                ?>
                            </td>
                        </tr>
                    <?php
                }
            }
        ?>
    </table>
</body>
</html>