<?php
  if(isset($_POST["insb"])){
    $bname=filter_input(INPUT_POST,"bname",FILTER_SANITIZE_SPECIAL_CHARS);
    $content=filter_input(INPUT_POST,"bcontent",FILTER_SANITIZE_SPECIAL_CHARS);
    $filetmp=$_FILES["icon"]["tmp_name"];
    $filename=$_FILES["icon"]["name"];
    $path="../pictures/";
    $save=$path.$filename;
    move_uploaded_file($filetmp,$save);
    $sql="INSERT INTO `undersliderbanner` (`name`,`text`,`icon`) VALUES('$bname','$content','$save')";
    mysqli_query($con,$sql);
    echo "succesful";
  }  
?>