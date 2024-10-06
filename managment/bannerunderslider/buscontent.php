<?php
    $sql="SELECT * FROM `undersliderbanner`";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if($num > 0){
        $a=1;
        while($a<=$num){
            $a++;
            $row=mysqli_fetch_assoc($result);
?>
                <div class="bannericon">
                    <div class="showicon"><img src="<?= $row["icon"] ?>" width="40" height="40"></div>
                    <div class="showname"><?= $row["name"] ?></div>
                    <div class="showname"><?= $row["text"] ?></div>
                    <form method="post" action="" name="delandupdate" enctype="multipart/form-data">
                        <label class="label1">icon update</label>
                        <input type="file" name="icup" class="chosefile"><br>
                        <label class="label1">name update</label>
                        <input type="text" name="nupd" class="input-small"><br>
                        <label class="label1">content update</label>
                        <textarea name="context" class="input-big"></textarea><br><br><br>
                        <label class="label1">updating data</label>
                        <input type="submit" name="upop" value="UPDATE" class="reg-btn-big">
                        <label class="label1">delete</label>
                        <input type="submit" name="delop" class="reg-btn-small" value="X"><br>
                        <input type="hidden" name="hidid" class="proregmar" value="<?= $row["id"] ?>"><br>
                    </form>
                </div>
                <?php
                    if(isset($_POST["upop"])){
                        $id=$_POST["hidid"];
                        $iconfiletmp=$_FILES["icup"]["tmp_name"];
                        $iconfilename=$_FILES["icup"]["name"];
                        $path="../pictures/";
                        $save=$path.$iconfilename;
                        move_uploaded_file($iconfiletmp,$save);
                        $name=filter_input(INPUT_POST,"nupd",FILTER_SANITIZE_SPECIAL_CHARS);
                        $text=filter_input(INPUT_POST,"context",FILTER_SANITIZE_SPECIAL_CHARS);
                        $sqlupdate="UPDATE `undersliderbanner` SET icon='$save' ,name='$name' ,text='$text' WHERE id='$id'";
                        mysqli_query($con,$sqlupdate);
                        echo "successful";
                    }

                    if(isset($_POST["delop"])){
                        $id=$_POST["hidid"];
                        $sqldel="DELETE FROM `undersliderbanner` WHERE id='$id'";
                        mysqli_query($con,$sqldel);
                        echo "successful";
                    }
                ?>
<?php
        }
    }
?>