<?php 
     $sqllogoshow="SELECT * FROM `logos`";
     $result=mysqli_query($con,$sqllogoshow);
     $num=mysqli_num_rows($result);
     if($num > 0){
         $f=1;
         while($f <= $num){
             $f++;
             $data=mysqli_fetch_assoc($result);
             ?>
                 <div class="container-2">
                     <div class="showname"><?= $data["id"] ?></div>
                     <div class="showname"><?= $data["name"] ?></div>
                     <div class="logopho"><img src="<?= $data["photo"] ?>" width="220" height="220"></div>
                     <form method="post" name="<?= $data["id"] ?>" action="" enctype="multipart/form-data">
                        <input type="hidden" name="hidid" class="proregmar" value="<?= $data["id"] ?>">
                        <input type="file" name="photoup" class="proregmar"><br>
                        <input type="submit" name="photoupins" class="reg-btn-small" value="Update">
                        <input type="submit" name="photodel" class="reg-btn-small" value="X">
                     </form>
                 </div>
                
                <?php 
                    if(isset($_POST["photodel"])){
                        $hidid = $_POST["hidid"];
                        $sql_del = "DELETE FROM `logos` WHERE id ='$hidid' ";
                        mysqli_query($con,$sql_del);
                        echo "successfull";
                    }
                ?>
                <?php 
                    if(isset($_POST["photoupins"])){
                        $filetmp2=$_FILES["photoup"]["tmp_name"];
                        $filename2=$_FILES["photoup"]["name"];
                        $uniq2=uniqid();
                        $uid2=$uniq2.$filename2;//unique id here must be omitted
                        $path2="../pictures/";
                        $save2=$path2.$filename2;
                        $id2=$_POST["hidid"];
                        move_uploaded_file($filetmp2,$save2);
                        $sqlupdate2="UPDATE `logos` SET `photo`='$save2' WHERE id='$id2'";
                        mysqli_query($con,$sqlupdate2);
                    }
                ?>
             <?php
         }
     }
?>