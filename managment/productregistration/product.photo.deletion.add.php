<?php
    include("../config/config.php");
?>
<?php
    if(isset($_POST["del"])){
        $id=$row2["id"];
        $sql="UPDATE `porducts` SET photo=''  WHERE id='$id' ";
        mysqli_query($con,$sql);
    } 
    if(isset($_POST["addfile1"])){
        $idd1=$row2["id"];
        $path1="../pictures/";
        $filetmp1=$_FILES["file1"]["tmp_name"];
        $filename1=$_FILES["file1"]["name"];
        $save1=$path1.$filename1;
        move_uploaded_file($filetmp1,$save1);
        $fql="UPDATE `porducts` SET photo='$save1' WHERE id='$idd1'";
        mysqli_query($con,$fql);
    }



    if(isset($_POST["del2"])){
        $id2=$row2["id"];
        $sql2="UPDATE `porducts` SET photo2=null WHERE id='$id2' ";
        mysqli_query($con,$sql2);
    }
    if(isset($_POST["addfile2"])){
        $idd2=$row2["id"];
        $filetmp2=$_FILES["file2"]["tmp_name"];
        $filename2=$_FILES["file2"]["name"];
        $path2="../pictures/";
        $save2=$path2.$filename2;
        move_uploaded_file($filetmp2,$save2);
        $fql2="UPDATE `porducts` SET photo2='$save2' WHERE id='$idd2'";
        mysqli_query($con,$fql2);
    }



    if(isset($_POST["del3"])){
        $id3=$row2["id"];
        $sql3="UPDATE `porducts` SET photo3=null WHERE id='$id3'";
        mysqli_query($con,$sql3);
    }
    if(isset($_POST["addfile3"])){
        $idd3=$row2["id"];
        $filetmp3=$_FILES["file3"]["tmp_name"];
        $filename3=$_FILES["file3"]["name"];
        $path3="../pictures/";
        $save3=$path3.$filename3;
        move_uploaded_file($filetmp3,$save3);
        $fql3="UPDATE `porducts` SET photo3='$save3' WHERE id='$idd3'";
        mysqli_query($con,$fql3);
    }



    if(isset($_POST["del4"])){
        $id4=$row2["id"];
        $sql4="UPDATE `porducts` SET photo4=null WHERE id='$id4' ";
        mysqli_query($con,$sql4);
    }
    if(isset($_POST["addfile4"])){
        $idd4=$row2["id"];
        $filetmp4=$_FILES["file4"]["tmp_name"];
        $filename4=$_FILES["file4"]["name"];
        $path4="../pictures/";
        $save4=$path4.$filename4;
        move_uploaded_file($filetmp4,$save4);
        $fql4="UPDATE `porducts` SET photo4='$save4' WHERE id='$idd4'";
        mysqli_query($con,$fql4);
    }

    if(isset($_POST["del5"])){
        $id5=$row2["id"];
        $sql5="UPDATE `porducts` SET photo5=null WHERE id='$id5'";
        mysqli_query($con,$sql5);
    }
    if(isset($_POST["addfile5"])){
       $idd5=$row2["id"];
       $filetmp5=$_FILES["file5"]["tmp_name"];
       $filename5=$_FILES["file5"]["name"];
       $path5="../pictures/"; 
       $save5=$path5.$filename5;
       move_uploaded_file($filetmp5,$save5);
       $fql5="UPDATE `porducts` SET photo5='$save5' WHERE id='$idd5'";
       mysqli_query($con,$fql5);
    }



    if(isset($_POST["del6"])){
        $id6=$row2["id"];
        $sql6="UPDATE `porducts` SET photo6=null WHERE id='$id6'";
        mysqli_query($con,$sql6);
    }
    if(isset($_POST["addfile6"])){
        $idd6=$row2["id"];
        $filetmp6=$_FILES["file6"]["tmp_name"];
        $filename6=$_FILES["file6"]["name"];
        $path6="../pictures/";
        $save6=$path6.$filename6;
        move_uploaded_file($filetmp6,$save6);
        $fql6="UPDATE `porducts` SET photo6='$save6' WHERE id='$idd6'";
        mysqli_query($con,$fql6);
    }
?>