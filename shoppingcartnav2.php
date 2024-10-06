<?php
    if(empty($_SESSION)){
       echo '../login/login.php';
    }else{
        echo 'mainpage.php?id=7';
    }
?>