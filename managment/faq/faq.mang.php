<?php include("../config/conf.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FAQ managment</h1>
    <form action="" method="post">
        <label class="label1">Enter the question</label>
        <input type="text" name="question" class="input-small">
        <label class="label1">Enter the answer</label>
        <textarea class="input-big" name="answer"></textarea>
        <br>
        <input type="submit" name="add" class="reg-btn-big" >
    </form>
    <?php 
        if(isset($_POST["add"])){
            $q = filter_input(INPUT_POST,"question",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $a = filter_input(INPUT_POST,"answer",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $sql_insert = "INSERT INTO `faq` (`question`,`answer`) VALUES('$q','$a')";
            mysqli_query($con,$sql_insert);
            echo "successfull";
        }
    ?>
    <hr>
    <hr>
    <hr>
    <?php 
        $sql_get= "SELECT * FROM `faq`";
        $sql_result = mysqli_query($con, $sql_get);
        $nums = mysqli_num_rows($sql_result);
        if($nums > 0 ){
            $r=1;
            while($r<=$nums){
                $r++;
                $data = mysqli_fetch_assoc($sql_result);
                ?>  
                    <div class="container">
                        <pre><?= $data["id"] ?></pre>
                        <p><?= $data["question"] ?></p>
                        <p><?= $data["answer"] ?></p>
                        <form action="" method="post">
                            <input type="hidden" name="hiddenid" value="<?= $data["id"] ?>">
                            <input type="submit" name="del" value="X" class="reg-btn-small">
                        </form>
                        <?php 
                            if(isset($_POST["del"])){
                                $hidid = $_POST["hiddenid"];
                                $sql_del = "DELETE FROM `faq` WHERE id ='$hidid' ";
                                mysqli_query($con,$sql_del);
                                
                            }
                        ?>
                    </div>
                <?php
            }
        }
    ?>
</body>
</html>