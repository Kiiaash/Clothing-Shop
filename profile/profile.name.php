<?php
     if(isset($_POST["fnedit"])){
        $username=$_SESSION["username"];
        $fullname=$_POST["name"];
        $fnupdate="UPDATE `users` SET fullname='$fullname' WHERE username='$username'";
        $fnresult=mysqli_query($con,$fnupdate);
        ?>
            <script>window.alert("your name has been changed successfully!")</script>
        <?php
    }
?>