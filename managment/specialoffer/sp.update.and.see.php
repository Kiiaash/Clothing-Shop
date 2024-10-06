<?php
        $sql="SELECT * FROM `specialoffer`";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($num > 0){
            $a=1;
            while($a <= $num){
                $a++;
                $row=mysqli_fetch_assoc($result);
            ?>
                <div class="spshow">
                    <div class="spid"><?= $row["id"] ?></div>
                    <div class="spname"><?= $row["name"] ?></div>
                    <div class="spop"><?= $row["price"] ?></div>
                    <div class="spnp"><?= $row["afteroff"] ?></div>
                    <div class="spoo"><?= $row["off"] ?></div>
                    <div class="spoo"><?= $row["daysleft"] ?></div>
                    <div class="sppho"><img src="<?= $row["photo"] ?>" width="250" height="250" alt="<?= $row["name"] ?>"></div>
                    <?php 
                        include("sp.delform.php");
                    ?>
                </div>
                
            <?php        
            }
        }
    ?>
    