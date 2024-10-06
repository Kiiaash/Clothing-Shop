<?php
    include("../config/conf.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boys</title>
    <link href="../css/clothingShopMain.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="wrapmen">
<div class="searchnoptions">
    <div class="snosize">
        <div id="snotitle">Filter By Size</div>
        <div id="formholder">
           
        </div>
        <hr id="afterhr">
    </div>
    <div class="snocolor">
        <div id="snotitle">Filter By Colors</div>
        <div id="formholder">
        <form method="post" action="" name="colorpickerform">
            <input type="color" name="colorpicker" id="cp"><label for="cp"></label><br>
            <input type="submit" name="colorsubmit" id="csub" value="Apply">
        </form>
        </div>
        <hr id="afterhr">
    </div>
    <div class="snoprice">
        <div id="snotitle">Filter By Price</div>
        <div id="formholder">
            <form method="post" action="" name="pricerange">
                <input type="range" name="prange" id="pr" min="1000000" max="10000000" step="1000"><br>
                <input type="submit" name="pricebtn" id="pricebt" value="Apply">
                <div id="showprice"></div>
                
            </form>
        </div>
    </div>
    </div>
    <div class="wmrightside">
    <div class="searchsection">
        <<form method="post" name="searchform" action="" class="sform">
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
        </form>
        <form name="orderform" action="" method="post">
                <label id="orderby">ORDER BY</label>
                <select name="order" id="ordsel">
                    <option value="putd">Price up to down</option>
                    <option value="new">Newst</option>
                    <option value="rat">Popular</option>
                    <option value="pdtu">Price down to up</option>
                <input type="submit" name="ord" value="Apply" id="ordbtn">
            </select>
            </form>
            <div class="" hidden><?php include("boys.appendix1.php"); ?></div>
    </div>
<?php 
    include("boys.appendix2.php");
?>
</div>
</div>
</div>
</body>
</html>

