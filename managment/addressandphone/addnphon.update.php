<?php 
     if(isset($_POST["upadd"])){
        $uptext=filter_input(INPUT_POST,"inp1",FILTER_SANITIZE_SPECIAL_CHARS);
        $upnum=filter_input(INPUT_POST,"inp2",FILTER_SANITIZE_NUMBER_INT);
        $id=$_POST["hidid"];
        $sqlupdate="UPDATE `addresandcontact` SET `address`='$uptext',`phonum`='$upnum' WHERE id='$id'";
        $sqlupd=mysqli_query($con,$sqlupdate);
    }
?>