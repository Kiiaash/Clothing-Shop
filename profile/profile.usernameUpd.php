<?php 
        if(isset($_POST["usernameupdate"])){
            $newuser=$_POST["newuser"];
            $getusersdata="SELECT `username` FROM `users`";
            $getudresult=mysqli_query($con,$getusersdata);
            $getudnum=mysqli_num_rows($getudresult);
            $users=[];
            if($getudnum>0){
                $a=1;
                while($a<=$getudnum){
                    $a++;
                    $gudata=mysqli_fetch_assoc($getudresult);
                    $usn=$gudata["username"];
                    array_push($users,$usn);
                }
               }
               if(in_array($newuser,$users)){
                ?>
                    <script>window.alert("this username is already taken")</script>
                <?php
                }else{
                    $username=$_SESSION["username"];
                    $nuserupdate="UPDATE `users` SET username='$newuser' WHERE username='$username'";
                    $nuserresult=mysqli_query($con,$nuserupdate);
                    ?>
                    <script>window.alert("you need to login again")
                            
                    </script>
                    <?php
                }
            }
            
        
?>