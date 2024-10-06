<?php
    if($row2["photo6"] == ""){
        echo "no image";
    }else{
        ?>
        <img src="<?= $row2["photo6"] ?>" width="80" height="80">
    <?php
    }

?>