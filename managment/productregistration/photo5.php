<?php
    if($row2["photo5"] == ""){
        echo "no image";
    }else{
        ?>
        <img src="<?= $row2["photo5"] ?>" width="80" height="80">
    <?php
    }

?>