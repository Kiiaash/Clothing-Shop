<?php 
    if(isset($_POST["newembt"])){
        $newemail=$_POST["newemail"];
        $username=$_SESSION["username"];
        $newemailup="UPDATE `users` SET email='$newemail' WHERE username='$username'";
        $newemailres=mysqli_query($con,$newemailup);
        ?>
            <script>window.alert("you email address has been changed successfuly")</script>
        <?php
    }
?>