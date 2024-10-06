<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link href="css/forgot.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="loginform">
        <div class="title">NEW PASSWORD</div>
        <form method="post" action="login.php" name="loginform" class="form">
            <label class="pass">EMAIL</label><br>
            <input type="password" name="password" class="passinp"><br>
            <input type="submit" name="loginb" value="SEND EMAIL" class="logginbutton"> 
        </form>
        <a href="../login/login.php" class="textdec"><div class="goback">GO BACK TO LOGIN PAGE</div></a>
    </div>
</body>
</html>