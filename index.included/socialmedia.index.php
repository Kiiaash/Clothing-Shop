<?php 
    $sqlsm="SELECT * FROM `socialmedia`";
    $result=mysqli_query($con,$sqlsm);
    $num=mysqli_num_rows($result);
    if($num > 0){
        $w=1;
        while($w <= $num){
            $w++;
            $fetch=mysqli_fetch_assoc($result);
            ?>
                <a href="<?= $fetch["link"] ?>"><div class="socialmedia"><img src="pictures/<?= $fetch["icon"] ?>" width="35" height="35" alt="<?= $fetch["name"] ?>"></div></a>
            <?php
        }
    }
?>
