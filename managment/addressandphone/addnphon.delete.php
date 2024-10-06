<?php 
    if(isset($_POST["del"])){
        $id=$_POST["hidid"];
        $sqldel="DELETE FROM `addresandcontact` WHERE id='$id'";
        mysqli_query($con,$sqldel);
    }
?>