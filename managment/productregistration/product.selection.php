<?php include("../config/conf.php"); ?>
<?php 
    $sql_get = "SELECT * FROM `category`";
    $result = mysqli_query($con,$sql_get);
    $num = mysqli_num_rows($result);
    if($num > 0){
        $r=1;
        while($r <= $num){
            $r++;
            $data = mysqli_fetch_assoc($result);
            ?>
                <option value="<?= $data["id"] ?>"><?= $data["name"] ?></option>
            <?php
        }
    }
?>