<?php 
      if(isset($_POST["foadd"])){
        $name=filter_input(
            INPUT_POST,
            "fo1",
            FILTER_SANITIZE_SPECIAL_CHARS
        );
        $sqlins="INSERT INTO `footer` (`name`)VALUES('$name')";
        mysqli_query($con,$sqlins);
        echo "succesful";
    }
?>