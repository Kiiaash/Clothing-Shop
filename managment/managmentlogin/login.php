<?php
    include("../../config/config.php");
?>
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="../../css/clothingShopMain.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="loginform">
        <div class="title">ADMIN LOGIN</div>
        <form method="post" action="login.php" name="loginform" class="form">
            <label class="user">USERNAME</label><br>
            <input type="text" name="username" class="userinp"><br>
            <label class="pass">PASSWORD</label><br>
            <input type="password" name="password" class="passinp"><br>
            <input type="submit" name="loginb" value="LOG IN" class="logginbutton"> 
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST["loginb"])){
        $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $pass=filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
        $sql="SELECT * FROM `admins` WHERE username='$username' && password='$pass'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result) > 0){
            $_SESSION["username"]=$username;
            header("location: ../managment.php");
        }else{
            echo "please try again";
        }
        
    }
?>