<?php
    include("../config/conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="../../css/clothingShopMain.css" type="text/css" rel="stylesheet">
</head>
<body>
    
    <table align="center">
        <tr>
            <td class="td">num</td>
            <td class="td">phone number</td>
            <td class="td">email</td>
            <td class="td">text</td>
            <td class="td">date</td>
            <td class="td">options</td>
            <td class="td">replies</td>
        </tr>
        
        <?php
            if(isset($_GET["s"])){
                $s=$_GET["s"];
                if(!isset($s)){
                    $s=1;
                }else{
                    $s=$_GET["s"]*7-7;
                }
                $sql="SELECT * FROM `contact` order by `id` asc limit $s, 7 ";
                $result=mysqli_query($con,$sql);
                $a=1;
                $num=mysqli_num_rows($result);
                while($a <= $num){
                    $a++;
                    $data=mysqli_fetch_assoc($result);
                    
            ?>
            
            <tr bgcolor="<?php if($data["id"] % 2 == 0) echo '#FFF'; else echo '#777';?>">
                <td class="tdr"><?= $data["id"];  ?></td>
                <td class="tdr"><?= $data["phonenum"];  ?></td>
                <td class="tdr"><?= $data["email"];  ?></td>
                <td class="tdr"><?= $data["tellus"];  ?></td>
                <td class="tdr"><?= $data["regdate"];  ?></td>
                <td class="tdr"><form method="post" action="" name="optionform">
                    <input type="submit" name="delete" value="Delete" class="mar">
                    <input type="hidden" name="hid" value="<?= $data["id"] ?>">
                    <input type="submit" name="reply" value="Reply" class="mar">
                    <?php
                        if(isset($_POST["reply"])){
                            $id=$_POST["hid"];
                           header("location: ?m=contact.reply&id=$id");
                        }
                    ?>
                    </form>
                </td>
                <td><?php
                    // $id3=$data['id'];
                    // $sql3="SELECT * FROM replies WHERE `preid`='$id3'";
                    // $result3=mysqli_query($con,$sql3);
                    // $num3=mysqli_num_rows($result3);
                    // if($num3 > 0){
                    //     echo "Replied";
                    // }else{
                    //     echo "N/A";
                    // }
                
                ?></td>
                
            </tr>
            <?php
    ?>
        <?php
        }
        ?>
    <?php    
    }
?>
           
    </table>
    <?php
        $sql2="SELECT * FROM `contact`";
        $result2=mysqli_query($con,$sql2);
        $num2=mysqli_num_rows($result2);
        $page=$num2 / 7;
        $b=0;
        $t=7;
        if($b <= $page){
    ?>      
            <?php 
                if($_GET["s"] <= 1){

                }else{
                    ?>
                        <a href="?m=contact&s=<?php $q=1; if($_GET["s"]>$q){echo $_GET["s"]-1;}else{echo $_GET["s"];} ?>"><div class="arrowforpage"><</div></a>
                    <?php
                }
            ?>
            <?php
                $bb=$_GET["s"]+1;
                $bbb=$_GET["s"]-1;
                $v=$_GET["s"];
               if($b <= $page){
                    
            ?>  
            <!-- THIS PART IS ABOUT THE NUMBERS AROUND THE MAIN PAGE NUMBER -->    
                    <?php
                        if($_GET["s"] <= 1){
                           ?>
                           
                            
                            <?php
                        }else{
                           ?>     
                                <a href="?m=contact&s=<?php echo $bbb; ?>"><div id="page"><?= $bbb; ?></div></a>
                            <?php
                        }
                    ?>
                    <a href="?m=contact&s=<?php echo $v; ?>"><div id="page" style="background-color: #86eb24; color:#242424;"><?= $v; ?></div></a>
                   
                    <?php
                        if($_GET["s"]>$page){/* this $page here is a float and when $_GET["s"] is smaller than that then we 
                            would have no forward icon */ 

                        }else{
                            ?>
                                 <a href="?m=contact&s=<?php echo $bb; ?>"><div id="page"><?= $bb; ?></div></a>
                            <?php
                        }
                    ?>
                   <!-- THIS PART IS ABOUT THE NUMBERS AROUND THE MAIN PAGE NUMBER -->
                       
                    
            <?php
                }
            ?>
           <?php
                if($_GET["s"] >= $page){

                }else{
                    ?>
                         <a href="?m=contact&s=<?php if($b <= $num){ echo $_GET["s"]+1;}else{echo $_GET["s"]=$_GET["s"];} ?>"><div class="arrowforpage">></div></a>
                    <?php
                }
           ?>
    <?php
        }
    ?>
           
     
</body>
</html>
