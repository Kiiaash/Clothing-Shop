<?php
    include("../config/conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEN</title>

</head>
<body>
<div class="wrapmen">
<div class="searchnoptions">
    <div class="snosize">
        <div id="snotitle">Filter By Size</div>
        <hr id="afterhr">
    </div>
    <div class="snocolor">
        <div id="snotitle">Filter By Colors</div>
        <hr id="afterhr">
    </div>
    <div id="afterhr3"></div>
    <div class="snoprice">
        <div id="snotitle">Filter By Price</div>
        <hr id="afterhr">
    </div>
</div>
<div class="wmrightside">
    <div class="searchsection">
        <form method="post" name="searchform" action="" class="sform">
            <input type="text" name="searchitem" id="sitem" placeholder="What is it in your mind..." required>
            <input type="submit" name="searchbtn" value="Search" id="sbtn">
            <input type="radio" id="s" value="s" name="size"> 
            <label for="s" class="sizename2">S</label><br>
            <input type="radio" id="m" value="m" name="size">
            <label for="m" class="sizename2">M</label><br>
            <input type="radio" id="l" value="l" name="size">
            <label for="l" class="sizename">L</label><br>
            <input type="radio" id="xl" value="xl" name="size">
            <label for="xl" class="sizename">XL</label><br>
            <input type="radio" id="morexl" value="xxl" name="size">
            <label for="morexl" class="sizename">Up to XL . . .</label><br>

            <input type="radio" name="redcolor" class="colors" id="redcol">
            <label for="redcol" class="colname">red</label><br>

            <input type="radio" name="yellcolor" class="colors" id="yellcol">
            <label for="yellcol" class="colname">yellow</label><br>

            <input type="radio" name="bluecolor" class="colors" id="bluecol">
            <label for="bluecol" class="colname">blue</label><br>

            <input type="radio" name="greencolor" class="colors" id="greencol">
            <label for="greencol" class="colname">green</label><br>

            <input type="radio" name="blackcolor" class="colors" id="blackcol">
            <label for="blackcol" class="colname">black</label><br>

            <input type="radio" name="graycolor" class="colors" id="graycol">
            <label for="graycol" class="colname">gray</label><br>

            <input type="radio" name="whitecolor" class="colors" id="whitecol">
            <label for="whitecol" class="colname">white</label><br>

            <input type="radio" name="charcoalcolor" class="colors" id="charcol">
            <label for="charcol" class="colname">charcoal</label><br>

            <input type="radio" name="browncolor" class="colors" id="browncol">
            <label for="browncol" class="colname">brown</label><br>

            <input type="radio" name="cadetbluecolor" class="colors" id="cadbcol">
            <label for="cadbcol" class="colname">cadetblue</label><br>

            <input type="radio" name="navybluecolor" class="colors" id="navbcol">
            <label for="navbcol" class="colname">navy blue</label><br>

            <input type="radio" name="darkbrowncolor" class="colors" id="darkbcol">
            <label for="darkbcol" class="colname">dark brown</label><br>

            <input type="radio" name="cyancolor" class="colors" id="cyancol">
            <label for="cyancol" class="colname">cyan</label><br>

            <input type="radio" name="goldcolor" class="colors" id="goldcol">
            <label for="goldcol" class="colname">gold</label><br>

            <input type="radio" name="price" class="price" id="price1">
            <label for="price1" class="pricename">100 T - 300 T</label><br>

            <input type="radio" name="price" class="price" id="price2">
            <label for="price2" class="pricename">400,000 T - 700,000 T</label><br>

            <input type="radio" name="price" class="price" id="price3">
            <label for="price3" class="pricename">800,000 T - 1,000,000 T</label><br>

            <input type="radio" name="price" class="price" id="price4">
            <label for="price4" class="pricename">up to 1,000,000 T</label><br>
            
        </form>
        <form name="orderform" action="" method="post">
            <label id="orderby">ORDER BY</label>
            <select name="order" id="ordsel">
                <option value="putd">Price up to down</option>
                <option value="new">Newst</option>
                <option value="rat">Popular</option>
                <option value="pdtu">Price down to up</option>
                
            </select>
            <input type="submit" name="ord" value="Apply" id="ordbtn">
        </form>
    </div>
    <div class="" hidden><?php include("men.appendix1.php"); ?></div>
<?php 
    include("men.appendix2.php");
?>

</div>

</div>
<script type="text/javascript" src="../javascript/jscodes.js"></script>
</body>
</html>