<?php 
    include("../config/conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user profile</title>
    <link href="../css/clothingShopMain.css" type="text/css" rel="stylesheet">
</head>
<body class="profilewrap">
    <h1>User profile info</h1><br>
    <form method="post" action="" name="userprofile" enctype="multipart/form-data">
        <?php 
            $username=$_SESSION["username"];
            $proquery="SELECT * FROM `users` WHERE username='$username'";
            $pq=mysqli_query($con,$proquery);
            $num=mysqli_num_rows($pq);
            if($num > 0){
                $data=mysqli_fetch_assoc($pq);
                /*-- VIN -- in this case we better use if becasue we don't have to print them out all, we 
                just want to show the data that we want in a form for the user to be able to edit or see them
                if needed.
                VIN=very important note;
                */
                    ?>
                         <label class="proregmar">Full Name</label><br>
                        <input type="text" name="name" class="proregmar" value="<?= $data["fullname"] ?>"><br>
                        <form method="post" action="" name="fullnameedit">
                            <input type="submit" name="fnedit" class="proregmar" value="edit">
                            <?php 
                               include("profile.name.php");
                            ?>
                        </form>
                        <label class="proregmar">Username</label><br>
                        <input type="text" name="usernamee" class="proregmar" value="<?= $data["username"] ?>"><br>
                        <form method="post" action="" name="usernameupdateform">
                            <label class="proregmar">New username</label><br>
                            <input type="text" name="newuser" class="proregmar"><br>
                            <input type="submit" name="usernameupdate" value="edit" class="proregmar"><br>
                            <?php 
                                include("profile.usernameUpd.php");
                            ?>
                        </form>
                        <label class="proregmar">Email</label><br>
                        <input type="text" name="email" class="proregmar" value="<?= $data["email"] ?>"><br>
                        <form method="post" action="" name="emialform">
                            <label class="proregmar">Enter your new email</label><br>
                            <input type="text" name="newemail" class="proregmar">
                            <input type="submit" name="newembt" class="proregmar">
                            <?php 
                                include("profile.email.php");
                            ?>
                        </form>
                        <label class="proregmar">Profile photo</label><br><br><br>
                        <label class="proregmar">Current Profile Photo</label><br>
                        <div class="curprofile proregmar"><?php include("profile.photo.show.php"); ?></div><br>
                        <form method="post" name="profilephoto" action="" enctype="multipart/form-data">
                            <input type="file" name="newfile" class="proregmar">
                            <input type="submit" name="ppoto" class="proregmar">
                            <input type="submit" name="ppotodel" class="proregmar" value="X"> 
                            <?php 
                               include("profile.photoChange.php");
                            ?>
                            <?php 
                                include("profileDel.php");
                            ?>
                        </form>
                        <label class="proregmar">Password</label><br>
                        <input type="text" name="password" class="proregmar" value="<?= $data["password"] ?>"><br>
                        <form method="post" action="" name="passwordchangerform">
                            <label class="proregmar">Type in your new password</label><br>
                            <input type="text" name="newpass" class="proregmar">
                            <input type="submit" name="newpassbtn" class="proregmar" value="OK">
                            <?php 
                                include("profile.passChange.php");
                            ?>
                        </form>
                        <label class="proregmar">Phone Number</label><br>
                        <input type="text" name="name" class="proregmar" value="<?= $data["phonenumber"] ?>"><br>
                        <form method="post" name="phonenumberchangerform" action="">
                            <label class="proregmar">Enter your new phone number</label><br>
                            <input type="text" name="newphone" class="proregmar">
                            <input type="submit" name="newphonebtn" class="proregmar" value="OK">
                            <?php 
                               include("profile.phoneNumber.php");
                            ?>
                        </form>
                        <label class="proregmar">Address</label><br>
                        <textarea name="address" class="proregmar" ><?= $data["address"] ?></textarea><br>
                        <form method="post" name="addresschangerform" action="">
                            <label class="proregmar">Enter your new address</label><br>
                            <textarea name="newaddress" class="proregmar"></textarea>
                            <input type="submit" name="adrschanger" value="OK" class="proregmar">
                            <?php 
                                include("profile.addressChanger.php");
                            ?>
                        </form>
                        
                        <?php
            }
        ?>
    </form>
</body>
</html>