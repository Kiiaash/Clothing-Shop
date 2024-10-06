<?php 
    include("../config/conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>
        <form method="post" action="" name="contactform" class="conform">
            <label class="label1">PHONE NUMBER</label><br>
            <input type="text" name="phonenum" class="input-small" style="background-color: #ebebeb;"><br>

            <label class="label1">EMAIL</label><br>
            <input type="text" name="email" class="input-small" required style="background-color: #ebebeb;"><br>

            <label class="label1">TELL US...</label>
            <textarea name="text" class="input-big" required style="background-color: #ebebeb;"></textarea><br>
            <input type="submit" name="submitb" class="reg-btn-big"><br> 
        </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <?php
            if(isset($_POST["submitb"])){
                $phonnum=filter_input(INPUT_POST,"phonenum",FILTER_SANITIZE_SPECIAL_CHARS);
                $email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_SPECIAL_CHARS);
                $tellus=filter_input(INPUT_POST,"text",FILTER_SANITIZE_SPECIAL_CHARS);
                $sql="INSERT INTO contact(`phonenum`,`email`,`tellus`,`regdate`) VALUES('$phonnum','$email','$tellus',current_timestamp())";
                mysqli_query($con,$sql);
                echo "thanks, we will be in touch soon!";
                }
        ?>
</body>
</html>