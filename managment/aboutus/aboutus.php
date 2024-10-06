<?php 
    include("../config/conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>aboutus</title>
    
</head>
<body>
    <form method="post" action="" name="aboutusform" enctype="multipart/form-data" class="aboutusform">
        <label class="label1">Enter your title</label><br>
        <input type="text" name="title" class="input-small"><br>
        <label class="label1">Enter your text</label><br>
        <textarea name="maintext" class="input-big"></textarea><br>
        <label class="label1">Photo</label><br>
        <input type="file" name="fl1" class="chosefile"><br>
        <input type="submit" name="absubmit" class="reg-btn-small"><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST["absubmit"])){
        $title=filter_input(INPUT_POST,"title",FILTER_SANITIZE_SPECIAL_CHARS);
        $maintext=filter_input(INPUT_POST,"maintext",FILTER_SANITIZE_SPECIAL_CHARS);
        $filetmp=$_FILES["fl1"]["tmp_name"];
        $filename=$_FILES["fl1"]["name"];
        $filesize=$_FILES["fl1"]["size"];
        
        $path="../pictures/";
        $filepn=$path.$filename;
        move_uploaded_file($filetmp,$filepn);
        $sql="UPDATE `about` SET `title`='$title', `text`='$maintext', `header`='$filepn' WHERE id='1'";
        mysqli_query($con,$sql);
        echo "done";
    }
?>