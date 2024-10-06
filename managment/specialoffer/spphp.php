<?php
    if(isset($_POST["spsub"])){
        $name=filter_input(INPUT_POST,"spname",FILTER_SANITIZE_SPECIAL_CHARS);
        $days=filter_input(INPUT_POST,"spdays",FILTER_SANITIZE_SPECIAL_CHARS);
        $filetmp=$_FILES["spfile"]["tmp_name"];
        $filename=$_FILES["spfile"]["name"];
        $path="../pictures/";
        $save=$path.$filename;
        move_uploaded_file($filetmp,$save);
        $price=filter_input(INPUT_POST,"spprice",FILTER_SANITIZE_SPECIAL_CHARS);
        $newprice=filter_input(INPUT_POST,"spnewprice",FILTER_SANITIZE_SPECIAL_CHARS);
        $off=filter_input(INPUT_POST,"spoff",FILTER_SANITIZE_SPECIAL_CHARS);
        $sql="INSERT INTO specialoffer(`name`,`price`,`afteroff`,`off`,`photo`,`daysleft`) 
        VALUES('$name','$price','$newprice','$off','$save','$days')";
        mysqli_query($con,$sql);
        echo "succesful";
    }
?>