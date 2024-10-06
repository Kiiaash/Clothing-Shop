<?php
    include("../config/conf.php");
?>
<?php 
	session_start();
?>

<?php
	if(isset($_POST["exitb"])){
		session_destroy();
		header("location: ../index.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page</title>
    <link href="../css/clothingShopMain.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
		<div class="navbar">
			<div class="h1">
				<div class="h1box">
					<a href="login/login.php"><img src="images/login.png" width="21" height="27"></a>
				</div>
				<div class="h1box">
					<a href="<?php //include("shoppingcartnav.php");?>"><img src="images/shopping crat.png" width="21" height="27"></a>
					<?php
					// $sqlshopcart = "SELECT * FROM `shoppingcart`";
					// $sqlshopcartres = mysqli_query($con, $sqlshopcart);
					// $count = mysqli_num_rows($sqlshopcartres);
					// if ($count > 0) {
					// ?>
					 	<div id="shopnum"><?php //$count ?>1</div>
					<?php
					// } else {
					// }
					?>
				</div>
				<div class="h1box h1boxalt3">
					<a href="<?php //include("profilenav.php") ?>"><img src="../images/prof.png" width="35" height="30"></a>
				</div>
				<div class="h1box h1boxalt4">
					<div class="usname">welcom user<?php //if (!empty($_SESSION["username"])) {
											//echo $_SESSION["username"];
										//} else {
										//	echo "welcom Unknown";
										//} ?></div>
					<div class="exit">
						<form method="post" action="index.php" name="exitform"><input type="submit" name="exitb" value="EXIT" class="ext"></form>
					</div>
				</div>
				<a href="../index.php">
					<div class="h1box h1boxalt1">
						<div class="main">JIL U BERG</div>
					</div>
				</a>
				<a href="../index.php">
					<div class="h1box h1boxalt2">Home</div>
				</a>
				<a href="?id=7">
					<div class="h1box h1boxalt2">About</div>
				</a>
				<a href="?id=8">
					<div class="h1box h1boxalt2">Contact</div>
				</a>
			</div>
			
	</header>
<div class="wrappro">
<?php
    if(isset($_GET["id"])){
        $idd=$_GET["id"];
        switch($idd){
			case "1":
				include("ftop1.php");
				break;

			case "2":
				include("ftop2.php");
				break;

			case "3":
				include("ftop3.php");
				break;

			case "4":
				include("ftop4.php");
				break;

			case "5":
				header("location: ../managment/managmentlogin/login.php");
				break;

			case "6":
				include("ftop6.php");
				break;
                
            case "7":
                include("about.php");
                break;

            case "8":
                include("contact.php");
                break;

        }
    }
?>
</div>

<footer>
	<div class="footer">
		<div class="footerbox">
			<div class="f1 f1alt1">
				<form method="post" action="" name="newsletterform">
					<div class="f1r1">SUBSCRIBE</div>
					<div class="f1r2">
						<input type="text" name="newslettersignup" class="rec">
						<input type="submit" class="recbutton" name="nwslsb" value="SIGN UP">
						<?php
						//include("index.included/newsletter.index.php");
						?>
					</div>
				</form>
				<div class="f1r3">FOLLOW US ON SOCIAL MEDIA</div>
				<div class="f1r4">
					<?php
					//include("index.included/socialmedia.index.php");
					?>
				</div>
				<div class="f1r5">
					<div class="ftxt">© 2024 - Kia Sheikhy All rights reserved. terms of use . privacy policy</div>
				</div>
			</div>
			<div class="f2">
				<div class="ff1">MORE INFO</div>
				<div class="ff2"></div>
				<a href="productpage/footer.page.php?id=7" class="textdec">
					<div class="ff3">WHO WE ARE?</div>
				</a>
				<div class="ff4"><?php
									$sqlabout = "SELECT * FROM `about`";
									$result = mysqli_query($con, $sqlabout);
									$num = mysqli_num_rows($result);
									if ($num > 0) {
										$data = mysqli_fetch_assoc($result);
									}
									?>
					<?php echo $data["text"] ?> ...<b>Learn more</b></div>
				<?php
				$sqlfooter = "SELECT * FROM `footer`";
				$result = mysqli_query($con, $sqlfooter);
				$num = mysqli_num_rows($result);
				if ($num > 0) {
					$v = 1;
					while ($v <= $num) {
						$v++;
						$fofetch = mysqli_fetch_assoc($result);
				?>
						<a href="productpage/footer.page.php?id=<?php echo $fofetch["id"]; ?>" class="textdec">
							<div class="ff9"><?php echo $fofetch["name"] ?></div>
						</a>
				<?php
					}
				}
				?>
				<div class="ff12">
					<?php
					include("../addres.configurations.index/add.conf.index.php");
					?>
				</div>
			</div>
			<div class="f3">
				<img src="images/LOGO.png" width="273" height="273">
			</div>
		</div>
	</div>
	</footer>
</body>
</html>