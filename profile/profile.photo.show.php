<?php 
    if(empty($data["prophoto"])){
        ?>
            <img src="../pictures/nophoto.jpg" width="150" height="150">
        <?php
    }else{
        ?>
            <img src="../pictures/<?= $data["prophoto"] ?>" width="150" height="150" alt="profile_photo">
        <?php
    }
?>