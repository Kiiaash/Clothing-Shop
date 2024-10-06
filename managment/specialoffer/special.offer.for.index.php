<?php
    $sql="SELECT * FROM `porducts` WHERE specialoffer='1'";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if($num >0){
        $e=1;
        $sepoffs=[];
        while($e<=$num){
            $e++;
            $row=mysqli_fetch_assoc($result);
            $sepoffs[]=$row;
            ?>
            <a href="productpage/proshow.php?q=<?=$row["id"] ?>" class="textdec"><div class="buck">
                <div class="w2rimg">
				    <img src="pictures/<?= $row["photo"] ?>" width="185" height="185" class="buckimg" alt="<?= $row["name"] ?>"> 
			    </div>
			    <div class="w2rtitle"><?= strtoupper($row["name"]) ?></div>
			    <div class="w2rtxt">
				    <div class="prevprice"></div>
				    <div class="curprice"><?= number_format($row["price"],0,",")."T"; ?></div>
			    </div>
            </div></a>
        
            <?php
           
           
        }
    }
    
?>
