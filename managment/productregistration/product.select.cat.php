<?php
    include("../config/conf.php");
?>
<?php
    $id=$row2["category"];
    $sql="SELECT * FROM `category` WHERE `id`='$id'";
    $res=mysqli_query($con,$sql);
    $num=mysqli_num_rows($res);
    if($num > 0){
        $roww=mysqli_fetch_assoc($res);
        echo $roww["name"];
    }
   
    
?>