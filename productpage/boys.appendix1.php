<?php 
    $orderby="order by";
    if(isset($_POST["ord"])){
        $ord=$_POST["order"];
    }else{
        $ord="putd";
    }
    $u="";
    $t="";
    if($ord === "putd"){
        $u=1;
    }
    else if($ord === "pdtu"){
        $u=2;
    }
    else if($ord === "new"){
        $u=3;
    }
    else if($ord === "rat"){
        $u=4;
    }
    $orderclauses=[
        1=>"SELECT * FROM porducts WHERE category= '13' and instock!='$zero' $orderby price asc",
        2=>"SELECT * FROM porducts WHERE category= '13' and instock!='$zero' $orderby price desc",
        3=>"SELECT * FROM porducts WHERE category= '13' and instock!='$zero' $orderby id desc",
        4=>"SELECT * FROM porducts WHERE category= '13' and instock!='$zero' $orderby rating desc"
    ];

    $zero=1;
    $sql="$orderclauses[$u]";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if($num > 0){
        $a=1;
        $products=[];
        while($a<= $num){
            $a++;
            $row=mysqli_fetch_assoc($result);
            $products[]=$row;
                ?> 
                <a href="../productpage/proshow.php?q=<?php echo $row["id"];?> "><div class="prod">
                <div class="prodim"><img src="<?php echo $row["photo"]; ?>?>" alt="<?= $row["name"]; ?>" width="185" height="185"></div>
                <div class="prodtitle"><?= strtoupper($row["name"]) ?></div>
                <div class="prodpri">
                     <?php 
                        $id=$row["id"];
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
                    <div class="rating"><?= number_format($row["price"],0,",")."T" ?></div>
                    <form method="post" action="" name="proform">
                    <input type="hidden" name="hiddenid" value="<?= $row["id"] ?>">
                    </form>
                 </div></a>
     <?php
             }
         }
?>