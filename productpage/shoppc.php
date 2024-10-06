<?php 
    include("../config/conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping cart</title>
</head>
<body>
    <h1>Hello dear <?= $_SESSION["username"] ?>, this is your shopping cart:</h1>
    <table border="1" bgcolor="#666" width="80%" align="center">
        <tr align="center">
            <td>id</td>
            <td>name</td>
            <td>product id</td>
            <td>Color</td>
            <td>Size</td>
            <td>Quantity</td>
            <td>Price</td>
            <td>Status</td>
            <td>Options</td>
            
            
        </tr>
        <?php 
            
            $ses=$_SESSION["username"];
            $sqlcart="SELECT * FROM `shoppingcart` WHERE `sessionname`='$ses'";
            $result=mysqli_query($con,$sqlcart);
            $num=mysqli_num_rows($result);
            if($num>0){
                $r=1;
                while($r<= $num){
                    $r++;
                    $cart=mysqli_fetch_assoc($result);
                    ?>
                     <tr  bgcolor="<?php if($cart["id"] % 2 ==0){echo '#ebebeb'; }else{echo '#999';} ?>" align="center">
                        <td><?= $cart["id"] ?></td>
                        <td><?= $cart["pname"] ?></td>
                        <td><?= $cart["pid"] ?></td>
                        <td><?= $cart["pcolor"] ?></td>
                        <td><?= $cart["psize"] ?></td>
                        <td><?= $cart["pquantity"] ?></td>
                        <td><?= number_format($cart["price"],0,",")." T" ?></td>
                        <td>
                            <?php 
                                if($cart["status"] == 1){
                                    echo "paid successfully";
                                }else{
                                    echo "no paid yet";
                                }
                            ?>
                        </td>
                        <td>
                            <form method="post" name="optform" action="">
                                <input type="submit" name="prodel" value="X" class="delbt">
                                <input type="hidden" name="hidid" value="<?= $cart["id"]?>">
                            </form>
                            <?php 
                                if(isset($_POST["prodel"])){
                                    
                                    $id=$_POST["hidid"];
                                    $ppid=$cart["pid"];
                                   
                                    /*$sqlcallback="SELECT `instock` FROM `porducts` WHERE id='$ppid'";
                                    $rescallback=mysqli_query($con,$sqlcallback);
                                    $numcb=mysqli_num_rows($rescallback);
                                    if($numcb > 0){
                                        $datacb=mysqli_fetch_assoc($rescallback);
                                        $instockmain=$datacb["instock"];
                                    }
                                    $sqlfromshcart="SELECT `pquantity` FROM `shoppingcart` WHERE id='$id'";
                                    $resfromshcart=mysqli_query($con,$sqlfromshcart);
                                    $numfromshcart=mysqli_num_rows($resfromshcart);
                                    if($numfromshcart > 0){
                                        $datafromshcart=mysqli_fetch_assoc($resfromshcart);
                                        $pquantinshoppincart=$datafromshcart["pquantity"];
                                    }  
                                    $finalupcb=$instockmain + $pquantinshoppincart;
                                        $sqlfucbmaintable="UPDATE `porducts` SET `instock`='$finalupcb' WHERE id='$ppid'";
                                        mysqli_query($con,$sqlfucbmaintable); */
                    
                                    $sqldelelt="DELETE FROM `shoppingcart` WHERE id='$id'";
                                    mysqli_query($con,$sqldelelt);
                                }
                            ?>
                        </td>
                     </tr>
                    <?php
                }
            }
            
        ?>
    
    </table>
    <form method="post" action="" name="payform">
        <?php 
            $notpaid=0;
            $sqlsum="SELECT SUM(price) FROM `shoppingcart` WHERE status='$notpaid' ";
            $result=mysqli_query($con,$sqlsum);
            $num=mysqli_num_rows($result);
            if($num > 0){
                $r=1;
                while($r<=$num){
                    $r++;
                    $sum=mysqli_fetch_assoc($result);
                }
            }
        ?>
        <input type="text" class="proregmar wholeprice"
         value="<?php
                     $summ=$sum['SUM(price)'];  echo number_format($summ,0,",").""." T"; 
                ?>"><br>
        <input type="submit" name="paybtn" value="Pay" class="proregmar paybtn"><br><br>
        <?php 
          if(isset($_POST["paybtn"])){
            $paid=1;
            $notpaid=0;
            $sqlshopcartdata="UPDATE `shoppingcart` SET status='$paid' WHERE status='$notpaid'";
            $shopcartdatares=mysqli_query($con,$sqlshopcartdata);
          }
          $shcartdatatoupdate="SELECT * FROM `shoppingcart` WHERE status='1'";
          $shcartdatatoupdateres=mysqli_query($con,$shcartdatatoupdate);
          $count=mysqli_num_rows($shcartdatatoupdateres);
          if($count > 0){
            $g=1;
            while($g <= $count){
                $g++;
                $ndata=mysqli_fetch_assoc($shcartdatatoupdateres);
                $pidd=$ndata["pid"];
                $pname=$ndata["pname"];
                $pquant=$ndata["pquantity"];
                $mainid=$ndata["id"];
                $sqlmainproduct="SELECT * FROM `porducts` WHERE id='$pidd'";
                $sqlmainproductress=mysqli_query($con,$sqlmainproduct);
                $count2=mysqli_num_rows($sqlmainproductress);
                if($count2 > 0){
                    $newdataa=mysqli_fetch_assoc($sqlmainproductress);
                    $prequant=$newdataa["instock"];
                    $finalquant=$prequant - $pquant;
                    $newdataupdate="UPDATE `porducts` SET instock='$finalquant' WHERE id='$pidd'";
                    $newdataupdateres=mysqli_query($con,$newdataupdate);
                    echo " successful";
                    $usernamee=$_SESSION["username"];
                    $sqluser="SELECT * FROM `users` WHERE username='$usernamee'";
                    $sqluserres=mysqli_query($con,$sqluser);
                    $countuser=mysqli_num_rows($sqluserres);
                    if($countuser>0){

                        $userdata=mysqli_fetch_assoc($sqluserres);
                        $uname=$userdata["fullname"];
                        $uemail=$userdata["email"];
                        $uphone=$userdata["phonenumber"];
                        $uaddress=$userdata["address"];
                        $sqldelivery="INSERT INTO `delivery` (`name`,`quant`,`productid`,`productname`,`useraddress`
                        ,`userphon`,`useremail`,`uname`,`regdate`)VALUES('$uname','$pquant','$pidd','$pname',
                        '$uaddress','$uphone','$uemail','$usernamee',current_timestamp())";
                        $deliveryres=mysqli_query($con,$sqldelivery);
                        $shopccupdate="DELETE FROM `shoppingcart` WHERE id='$mainid' ";
                        $shopccres=mysqli_query($con,$shopccupdate);
                    }
                }

            }
                
                
                
          }
        ?>
    </form>

</body>
</html>
<!--
    <input type="text" name="paidproname" value="<?= $ndata["pname"] ?>"><br>
                    <input type="text" name="paidpropid" value="<?= $ndata["pid"] ?>"><br>
                    <input type="text" name="paidproid" value="<?= $ndata["id"] ?>"><br>
                    <input type="text" name="paidproquant" value="<?= $ndata["pquantity"] ?>"><br><br>
 -->
