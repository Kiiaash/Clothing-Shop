<?php 
    if(isset($_POST["upd"])){
        $hid=$_POST["hidid"];
        $newname=filter_input(INPUT_POST,"foup1",FILTER_SANITIZE_SPECIAL_CHARS);
        $sqlfopup="UPDATE `footer` SET `name`='$newname'WHERE id='$hid'";
        mysqli_query($con,$sqlfopup);
        echo "succesful";
    }
    if(isset($_POST["del"])){
        $hidd=$_POST["hidid"];
        $sqldel="DELETE FROM `footer` WHERE id='$hidd'";
        mysqli_query($con,$sqldel);
        echo "succesful";
    }
?>  