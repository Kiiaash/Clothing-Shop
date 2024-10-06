<?php
    $sql4="SELECT * FROM category WHERE id='15'";
    $result4=mysqli_query($con,$sql4);
    $num4=mysqli_num_rows($result4);
    $row4=mysqli_fetch_assoc($result4);
?>