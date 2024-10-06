<?php include("../config/conf.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Newsletter</h1>
    <form action="" method="post">
        <label class="label1">Enter the news title</label>
        <input type="text" name="newstitle" class="input-small">
        <label class="label1">Enter the news text</label>
        <textarea class="input-big" name="newstext"></textarea>
        <br>
        <input type="submit" name="newsreg" class="reg-btn-big">
    </form>
    <?php 
        if(isset($_POST["newsreg"])){
            $news_title = filter_input(INPUT_POST,"newstitle",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $news_text = filter_input(INPUT_POST,"newstext",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $sql_inser = "INSERT INTO `newsletter` (`newtitle`,`newstext`,`regdate`)
            VALUES('$news_title','$news_text',current_timestamp())";
            mysqli_query($con,$sql_inser);
            echo "successfull";
        }
    ?>
    <hr>
    <hr>
    <hr>
    <?php 
        $sql_get = "SELECT * FROM `newsletter`";
        $sql_result = mysqli_query($con,$sql_get);
        $num = mysqli_num_rows($sql_result);
        if($num > 0){
            $t=1;
            while($t<=$num){
                $t++;
                $data = mysqli_fetch_assoc($sql_result);
                ?>
                    <div class="container-3">
                        <p><?= $data["id"] ?></p>
                        <p><?= $data["newtitle"] ?></p>
                        <p><?= $data["newstext"] ?></p>
                        <br>
                        <form action="" method="post">
                        <input type="text" name="news_ti" class="input-small">
                        <br><br>
                        <textarea name="news_text" class="input-big"></textarea>
                        <br><br> <br><br>
                        <input type="hidden" name="hidid" value="<?= $data["id"] ?>">
                        <input type="submit" name="update" class="reg-btn-big" value="Update">
                        <input type="submit" name="del" class="reg-btn-small" value="X">
                    </form>
                    </div>
                    <?php 
                        if(isset($_POST["update"])){
                            $hidid= $_POST["hidid"];
                            $new_ti = filter_input(INPUT_POST,"news_ti",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                            $news_text = filter_input(INPUT_POST,"news_text",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                            $sql_update = "UPDATE `newsletter` SET `newtitle` = '$new_ti',`newstext`='$news_text' WHERE id='$hidid'";
                            mysqli_query($con,$sql_update);
                        }
                    ?>
                    <?php 
                        if(isset($_POST["del"])){
                            $hidid = $_POST["hidid"];
                            $sql_del = "DELETE FROM `newsletter` WHERE id = '$hidid'";
                            mysqli_query($con,$sql_del);
                        }
                    ?>
                   
                <?php
            }
        }
    ?>
</body>
</html>