<?php
    $sql3="SELECT * FROM category WHERE id='12'";
    $result3=mysqli_query($con,$sql3);
    $num3=mysqli_num_rows($result3);
    $row3=mysqli_fetch_assoc($result3);
?>