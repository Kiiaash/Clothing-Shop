<?php
    include("../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="css/signup.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="signupform">
    <div class="title">SIGN UP</div>
    <form method="post" action="signup.php" name="signupform" class="signupform">
        <label class="fname">FULL NAME</label><br>
        <input type="text" name="fullname" class="fullname" required><br>

        <label class="user">USERNAME</label><br>
        <input type="text" name="username" class="username" required><br>

        <label class="eml">EMIAL</label><br>
        <input type="text" name="email" class="email" required<br>

        <label class="pass">PASSWORD</label><br>
        <input type="password" name="password" class="password" required><br>

        <label class="phonum">PHONE NUMBER</label><br>
        <input type="text" name="phonenumber" class="phonenumber" required><br>

        <label class="addr">ADDRESS<font size="-2" class="opt"><sup>optional</sup></font></label><br>
        <textarea name="address" class="address"></textarea><br>

        <input type="submit" value="SIGN UP" name="signup" class="signup"><br>

        <label class="trm">I ACCEPT ALL TERMS AND CONDITIONS</label><br>
        <input type="checkbox" name="term" value="1" class="terms" required><br>

        <label class="nws">NEWS AND UPDATES</label><br>
        <input type="checkbox" name="news" value="2" class="news"><br>
    </form>
    </div>
    <a href="../login/login.php" class="textdec"><div class="goback">GO BACK TO LOGIN PAGE</div></a>
</body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
    $fullname=" ";
    $username=" ";
    $email=" ";
    $password=" ";
    $phonenumber=" ";
    $address=" ";
    $term=" ";
    $news=" ";
    if(isset($_POST["signup"])){
        if(isset($_POST["term"])){
            if(isset($_POST["news"])){
                $fullname=filter_input(INPUT_POST,"fullname",FILTER_SANITIZE_SPECIAL_CHARS);
                $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
                $email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_SPECIAL_CHARS);
                $password=filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
                $phonenumber=filter_input(INPUT_POST,"phonenumber",FILTER_SANITIZE_NUMBER_INT);
                $address=filter_input(INPUT_POST,"address",FILTER_SANITIZE_SPECIAL_CHARS);
                $term="agree";
                $news="agree";
                $sql="SELECT * FROM `users` WHERE username='$username'";
                $result=mysqli_query($con,$sql);
                $num=mysqli_num_rows($result);
                if($num > 0){
                   $row=mysqli_fetch_assoc($result);
                   if($row["username"] == $username){
                    echo "The username is already taken!";
                   }else{
                    $ins="INSERT INTO users(`fullname`,`username`,`email`,`password`,`phonenumber`,`address`,`terms`,`news`,`regdate`)
                    VALUES('$fullname','$username','$email','$password','$phonenumber','$address','$term','$news',current_timestamp())";
                    mysqli_query($con,$ins);
                    echo "you have completely signed up";
                   }
                }
            }else{
                    $fullname=filter_input(INPUT_POST,"fullname",FILTER_SANITIZE_SPECIAL_CHARS);
                    $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
                    $email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_SPECIAL_CHARS);
                    $password=filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
                    $phonenumber=filter_input(INPUT_POST,"phonenumber",FILTER_SANITIZE_NUMBER_INT);
                    $address=filter_input(INPUT_POST,"address",FILTER_SANITIZE_SPECIAL_CHARS);
                    $term="agree";
                    $news="not agree";
                    $ins="INSERT INTO users(`fullname`,`username`,`email`,`password`,`phonenumber`,`address`,`terms`,`news`,`regdate`)
                            VALUES('$fullname','$username','$email','$password','$phonenumber','$address','$term','$news',current_timestamp())";
                            mysqli_query($con,$ins);
                            echo "you have signed up successfuly!";
                            
                            
              } 
          }
    }
?>