<?php 
       $sql="SELECT * FROM `utp`";
       $result=mysqli_query($con,$sql);
       $num=mysqli_num_rows($result);
       if($num > 0){
           $t=1;
           while($t <= $num){
               $t++;
               $data=mysqli_fetch_assoc($result);
               ?>
               <div class="utp">
                <ul >
                    <li>Only Jpg images</li>
                </ul>
                   <div class="utpid"><?= $data["id"] ?></div>
                   <div class="utptitle"><?= $data["title"] ?></div>
                   <div class="utpphoto"><img src="<?= $data["photo"] ?>" width="250" height="250"></div>
                <form method="post" action="" name="utpupdateform" enctype="multipart/form-data">
                    <label class="proregmar">New Title</label>
                    <input type="text" name="utpupdatetitle" class="proregmar">
                    <input type="hidden" name="hidid" value="<?= $data["id"] ?>">
                    <input type="file" name="utpfileupdate" class="proregmar">
                    <input type="submit" name="utpup" class="proregmar" value="UPDATE">
                    <input type="submit" name="delup" class="proregmar" value="X">
                </form>
                <?php 
                    if(isset($_POST["utpup"])){
                        $id=$_POST["hidid"];
                        $titleup=filter_input(INPUT_POST,"utpupdatetitle",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                        $filetmp2=$_FILES["utpfileupdate"]["tmp_name"];
                        $filename2=$_FILES["utpfileupdate"]["name"];
                        $path2="../pictures/";
                        $save2=$path2.$filename2;
                        move_uploaded_file($filetmp2,$save2);
                        $sqlupdate="UPDATE `utp` SET `title`='$titleup',`photo`='$save2' WHERE id='$id'";
                        mysqli_query($con,$sqlupdate);
                        echo "succesful";
                    }
                    if(isset($_POST["delup"])){
                        $id=$_POST["hidid"];
                        $sqldelup="DELETE FROM `utp` WHERE id=$id";
                        mysqli_query($con,$sqldelup);
                    }
                ?>
               </div>
                
               <?php
           }
       }
?>