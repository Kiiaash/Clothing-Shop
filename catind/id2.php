<?php 
    include("config/conf.php");
?>

<?php
    $sql2="SELECT * FROM category WHERE id='15'";
    $result2=mysqli_query($con,$sql2);
    $num2=mysqli_num_rows($result2);
    $row2=mysqli_fetch_assoc($result2);
?>