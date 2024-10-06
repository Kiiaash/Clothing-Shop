<?php 
    $call="SELECT * FROM `sliderimages`";
    $callres=mysqli_query($con,$call);
    $num=mysqli_num_rows($callres);
    if($num>0){
        $r=1;
        while($r<=$num){
            $r++;
            $da=mysqli_fetch_assoc($callres);
            ?>
                <img src="picures/<?= $da["photo"] ?>"  class="indexslider">
            <?php
        }
    }
?> 