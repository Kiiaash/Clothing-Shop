<?php
    if($row2["photo4"] == ""){
        echo "no image";
    }else{
        ?>
        <img src="<?= $row2["photo4"] ?>" width="80" height="80">
    <?php
    }

?>