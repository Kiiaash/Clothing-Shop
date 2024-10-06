<?php 
    $dbserver="localhost";
    $user = "root";
    $dbpass = "";
    $dbname="clothingshop";
    $con= mysqli_connect($dbserver,$user,$dbpass,$dbname);
    if($con){
        echo "";
    }else{
        echo "not connected";
    }
?>