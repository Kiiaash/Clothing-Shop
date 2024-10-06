<?php 
    include("config/conf.php");
?>
<?php
     $sql="SELECT * FROM category WHERE id='11'";
     $result=mysqli_query($con,$sql);
     $num=mysqli_num_rows($result);
     $row=mysqli_fetch_array($result);
?>
