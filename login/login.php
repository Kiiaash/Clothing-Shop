<?php
    include("../config/config.php");
?>
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link href="login.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="loginform">
        <div class="title">LOGIN</div>
        <form method="post" action="login.php" name="loginform" class="form">
            <label class="user">USERNAME</label><br>
            <input type="text" name="username" class="userinp"><br>
            <label class="pass">PASSWORD</label><br>
            <input type="password" name="password" class="passinp"><br>
            <input type="submit" name="loginb" value="LOG IN" class="logginbutton"> 
        </form>
        <a href="../forgotpass/forgot.php"><div class="fyp">FORGOT YOUR PASSWORD?</div></a>
        <a href="../signup/signup.php"><div class="notamem">NOT A MEMBER?</div></a>
    </div>
</body>
</html>
<br>
<br>
<br>
<br>
<br>
<?php
    $user=null;
    $pass=null;
    if(isset($_POST["loginb"])){
        $user=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $pass=filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
        $sql="SELECT * FROM `users` WHERE username = '$user' && password = '$pass'";
        $result=mysqli_query($con,$sql);
        if($num=mysqli_num_rows($result) > 0){
            $_SESSION["username"]=$user;
            header("location: ../index.php");
        }else{
            echo "you are not yet registered";
        }
    }
    
?>