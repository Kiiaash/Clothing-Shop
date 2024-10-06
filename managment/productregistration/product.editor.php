<?php
    include("../config/conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Editor</title>
    <link href="../../css/clothingShopMain.css" type="text/css" rel="stylesheet">
</head>
<body>
    <table align="center">
        <tr>
            <td class="td">Id</td>
            <td class="td">Name</td>
            <td class="td">Description</td>
            <td class="td">Price</td>
            <td class="td">Category</td>
            <td class="td">Brand</td>
            <td class="td">In Stock</td>
            <td class="td">Sold Count</td>
            <td class="td">Off</td>
            <td class="td">Date</td>
            <td class="td">Options</td>
        </tr>
        <?php
            if(isset($_GET["b"])){
                $b=$_GET["b"];
            }
            if(!isset($b)){
                $b=1;
            }else{
                $b=$_GET["b"] * 5-5;
            }
            $sql="SELECT * FROM `porducts` order by `id` asc limit $b , 10 ";
            $result=mysqli_query($con,$sql);
            $num=mysqli_num_rows($result);
            
            if($num>0){
                $a=1;
                while($a <= $num){
                    $a++;
                    $row=mysqli_fetch_assoc($result);
        ?>                
                    <tr bgcolor="<?php if($row["id"] % 2 == 0) echo'#FFF';else echo'#777';?>">
                        <td><?=$row["id"]?></td>
                        <td><?=strtoupper($row["name"])?></td>
                        <td><?=$row["description"]?></td>
                        <td><?=number_format($row["price"],0,",")."T"?></td>
                        <td>
                            <?php 
                                $gender=$row["category"];
                                switch($gender){
                                    case $gender==11:
                                        echo "men";
                                        break;
                                    case $gender==12:
                                        echo "women";
                                        break;
                                    case $gender==13:
                                        echo "boys";
                                        break;
                                    case $gender==14:
                                        echo "girls";
                                        break;
                                    case $gender==15:
                                        echo "children";
                                        break;
                                } 
                            ?>
                        </td>
                        <td><?=$row["brand"]?></td>
                        <td><?=$row["instock"]?></td>
                        <td><?=$row["sellchecknum"]?></td>
                        <td><?=$row["off"]?></td>
                        <td><?=$row["regdate"]?></td>
                        <td><form method="post" action="" name="productsform">
                            <input type="submit" name="delete" value="DEL">
                            <!-- <input type="submit" name="edit" value="EDIT"> -->
                             <a href="?m=product.update&id=<?=$row["id"]?>">Edit</a>
                            <input type="hidden" name="hidid" value="<?=$row["id"]?>">
                            <!-- <input type="submit" name="tpch" value="SEND"> -->
                             <a href="?m=topchoices&id=<?=$row["id"]?>">Top Choices</a>
                            <input type="submit" name="specialoffer" value="Special Offer">
                            <input type="submit" name="specialofferoff" value="spoff">
                        </form></td>
                    </tr>

        <?php
                }
                ?>
                <?php
                            // if(isset($_POST["edit"])){
                            //     ob_start();
                            //     $id=$_POST["hidid"];
                            //     header("location:?m=product.update&id=$id");
                            //     ob_flush();
                            // }
                    
                            // if(isset($_POST["tpch"])){
                            //     ob_start();
                            //     $id=$_POST["hidid"];
                            //     header("location:?m=topchoices&idd=$id");
                            //     ob_flush();
                            // } 
                           
                            if(isset($_POST["specialoffer"])){
                                $id=$_POST["hidid"];
                                $true=true;
                                    $sqlspon="UPDATE `porducts` SET `specialoffer`='$true' WHERE id='$id'";
                                    $specialres=mysqli_query($con,$sqlspon);
                                    ?>
                                        <script>window.alert("the special offer is on")</script>
                                    <?php
                            }
                            if(isset($_POST["specialofferoff"])){
                                $id=$_POST["hidid"];
                                $true=false;
                                $sqlspoff="UPDATE `porducts` SET `specialoffer`='$true' WHERE id='$id'";
                                $sqloffres=mysqli_query($con,$sqlspoff);
                                ?>
                                    <script>window.alert("the special offer is off")</script>
                                <?php
                            }
                             
                        ?>
                <?php
            }
        ?>
    </table>
    <?php
        $sql2="SELECT * FROM  porducts";
        $result2=mysqli_query($con,$sql2);
        $num2=mysqli_num_rows($result2);
        if($num2 > 0){
            $t=0;
            $pp=$num/10;
            while($t <= $pp){
                $t++;
    ?>          
                <a href="?m=product.editor&b=<?= $t ?>"><div id="page"><?= $t; ?></div></a>

    <?php
    
            }
        }
    ?>
</body>
</html>