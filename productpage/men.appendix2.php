<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html><?php 
    if(isset($_POST["searchbtn"])){
        ?>
            <style>
                #ordsel{
                    display: none;
                }
                #ordbtn{
                    display: none;
                }
                #orderby{
                    display: none;
                }
            </style>
        <?php
        $searchitem=$_POST["searchitem"];
        $orderby="ORDER BY id DESC";
        $deftext="SELECT * FROM `porducts` WHERE category='1' AND name LIKE '%$searchitem%' ";
        $mainsql=" ";
        $g=" ";
        $v="";
        if(isset($_POST["size"])){
            $v=$_POST["size"];
        }else{
            $v="ss";
        }
        if($v=="s"){
            $g=1;
        }else if($v == "m"){
            $g=2;
        }else if($v == "l"){
            $g=3;
        }else if($v == "xl"){
            $g=4;
        }else if($v == "xxl"){
            $g=5;
        }
        else if($v== "ss"){
            $g=6;
        }
        $queries=[
            1=>"SELECT * FROM `porducts` WHERE category='11' AND `size` = 's' AND name LIKE '%$searchitem%' ",
            2=>"SELECT * FROM `porducts` WHERE category='11' AND `size2` = 'm' AND name LIKE '%$searchitem%' ",
            3=>"SELECT * FROM `porducts` WHERE category='11' AND `size3` = 'l' AND name LIKE '%$searchitem%' ",
            4=>"SELECT * FROM `porducts` WHERE category='11' AND `size4` = 'xl' AND name LIKE '%$searchitem%' ",
            5=>"SELECT * FROM `porducts` WHERE category='11' AND `size5` = 'xxl' AND name LIKE '%$searchitem%' ",
            6=>"SELECT * FROM `porducts` WHERE category='11' AND name LIKE '%$searchitem%' "
        ];
       if($g==2){
        $mainsql=$queries[2];
       }
       else if($g==1){
        $mainsql=$queries[1];
       }
       else if($g==3){
        $mainsql=$queries[3];
       }
       else if($g==4){
        $mainsql=$queries[4];
       }
       else if($g==5){
        $mainsql=$queries[5];
       }
       else if($g==6){
        $mainsql=$queries[6];
       }
        $searchq="$mainsql";
        $searchqres=mysqli_query($con,$searchq);
        $count=mysqli_num_rows($searchqres);
        if($count>0){
            $t=1;
            ?>
                <div class="showresult"><?= $count ?> Out of <?= $count ?></div>
            <?php
            while($t<=$count){
                $t++;
                $newdata=mysqli_fetch_assoc($searchqres);
                ?>
                    <a href="../productpage/proshow.php?q=<?php echo $newdata["id"]; ?>"><div class="prod">
                    <div class="prodim"><img src="<?php echo $newdata["photo"]; ?>?>" alt="<?= $newdata["name"]; ?>" width="185" height="185"></div>
                    <div class="prodtitle"><?= strtoupper($newdata["name"]) ?></div>
                    <div class="prodpri">
                    <?php 
                        $id=$newdata["id"];
                        $rating="SELECT * FROM `rating` WHERE productid='$id'";
                        $ratingres=mysqli_query($con,$rating);
                        $ratcount=mysqli_num_rows($ratingres);
                        if($ratcount > 0 ){
                            $sums=[];
                            $data=mysqli_fetch_assoc($ratingres);
                            $r=1;
                            //echo $ratcount;
                            for($r=1;$r<=$ratcount;$r++){
                                $newsum=array_push($sums,$data["rating"]);
                            }
                            $total=(array_sum($sums)/$ratcount);
                            $g=1;
                            while($g<=$total){
                                $g++;
                                ?>
                                    <img src="../star-solid.svg" width="10" height="10">
                                <?php
                            }
                        }
                    ?>
                    </div>
                    <hr id="line">
                <div class="rating"><?= number_format($newdata["price"],0,",")."T"; ?></div>
                    <form method="post" action="" name="proform">
                        <input type="hidden" name="hiddenid1" value="<?= $newdata["id"] ?>">
                    </form>
                    </div></a>
                <?php
            }
        }else{
            ?>
                <div id="emptysearch">
                    <div id="sign"><img src="../pictures/exclamation.png" width="70" height="70"></div>
                    <div id="signtext">SORRY COULD NOT FIND ANYTHING...</div>
                </div>
            <?php
        }
    }else{
        include("men.appendix1.php");
    }
?>
 