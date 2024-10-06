<?php 
    if(isset($_POST["smsub"])){
        $smname=filter_input(INPUT_POST,"smname",FILTER_SANITIZE_SPECIAL_CHARS);
        $smfilename=$_FILES["smfile"]["name"];
        $smtmpname=$_FILES["smfile"]["tmp_name"];
        $uniq=uniqid();
        $uid=$uniq.$smfilename;
        $uid2=uniqid($smfilename);
        $path="../pictures/";
        $save=$path.$uid;
        $smlink=filter_input(INPUT_POST,"smlink",FILTER_SANITIZE_SPECIAL_CHARS);
        move_uploaded_file($smtmpname,$save);
        $sqlsm="INSERT INTO `socialmedia` (`name`,`icon`,`link`)VALUES('$smname','$save','$smlink')";
        mysqli_query($con,$sqlsm);
        echo "sussecful";
    }
?>