<?php 
    $sqladdress="SELECT * FROM `addresandcontact`";
    $result=mysqli_query($con,$sqladdress);
    $num=mysqli_num_rows($result);
    if($num > 0){
        $f=1;
        while($f <= $num){
            $f++;
            $ff=mysqli_fetch_assoc($result);
            ?>
                <div class="dir">
                    <div class="diradd"><?= $ff["address"] ?></div>
                    <div class="dirnum"><?= $ff["phonum"] ?></div>
                </div>
            <?php
        }
    }
?>