
<?php
    if(isset($_POST["nwslsb"])){
        $email=filter_input(INPUT_POST,"newslettersignup",FILTER_SANITIZE_SPECIAL_CHARS);
        $sqlnewsletter="INSERT INTO `newsletter` (`email`)VALUES('$email')";
        mysqli_query($con,$sqlnewsletter);
    }
?>  