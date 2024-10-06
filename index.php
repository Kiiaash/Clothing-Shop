<?php
include("config/conf.php");
?>
<?php
session_start();
?>

<?php
if (isset($_POST["exitb"])) {
	session_destroy();
	header("location: index.php");
}

?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>clothing shop</title>
	<!-- <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"> -->
	<link href="css/clothingShopMain.css" type="text/css" rel="stylesheet">
	<!-- <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"> -->
</head>

<body>
	<header>
		<div class="navbar">
			<div class="h1">
				<div class="h1box">
					<a href="login/login.php"><img src="images/login.png" width="21" height="27"></a>
				</div>
				<div class="h1box">
					<a href="<?php include("shoppingcartnav2.php");?>"><img src="images/shopping crat.png" width="21" height="27"></a>
					<?php
					$sqlshopcart = "SELECT * FROM `shoppingcart`";
					$sqlshopcartres = mysqli_query($con, $sqlshopcart);
					$count = mysqli_num_rows($sqlshopcartres);
					if ($count > 0) {
					?>
					 	<div id="shopnum"><?php echo $count ?></div>
					<?php
					} else {
					}
					?>
				</div>
				<div class="h1box h1boxalt3">
					<a href="<?php include("profilenav.php") ?>"><img src="images/prof.png" width="35" height="30"></a>
				</div>
				<div class="h1box h1boxalt4">
					<div class="usname"><?php if (!empty($_SESSION["username"])) {
											echo $_SESSION["username"];
										} else {
											echo "welcom Unknown";
										} ?></div>
					<div class="exit">
						<form method="post" action="index.php" name="exitform"><input type="submit" name="exitb" value="EXIT" class="ext"></form>
					</div>
				</div>
				<a href="index.php">
					<div class="h1box h1boxalt1">
						<div class="main">JIL U BERG</div>
					</div>
				</a>
				<a href="index.php">
					<div class="h1box h1boxalt2">Home</div>
				</a>
				<a href="productpage/footer.page.php?id=7">
					<div class="h1box h1boxalt2">About</div>
				</a>
				<a href="productpage/footer.page.php?id=8">
					<div class="h1box h1boxalt2">Contact</div>
				</a>
			</div>
			<div class="h2">
				<div class="h2row">
					<?php include("index.included/index.slider.php"); ?>
					<!-- this is where the photos are gonna be -->
				</div>
				<!--<div class="h2row2">
					 these are the circles under the photos in the h2row
					<div class="h2rc h2rcalt1"></div>
					<div class="h2rc h2rcalt1"></div>
					<div class="h2rc h2rcalt2 h2rcalt1"></div>
					<div class="h2rc h2rcalt1"></div>
					<div class="h2rc h2rcalt1"></div>
				</div>-->

			</div>
			<div class="h3">
				<button class="h2rarrowleft" onclick="prevSlide()" id="back">&#10094</button>
				<button class="h2rarrowright" onclick="nextSlid()" id="go">&#10095</button>
				<div class="h3rowicon">
					<?php 
						$sql_get="SELECT * FROM `undersliderbanner`";
						$sql_result = mysqli_query($con,$sql_get);
						$nums= mysqli_num_rows($sql_result);
						if($nums > 0){
							$e=1;
							while($e<=$nums){
								$e++;
								$bdata = mysqli_fetch_assoc($sql_result);
							}
						}
					?>
					
					<img src="pictures/<?php  echo $bdata["icon"]; ?>" width="50" height="50" alt="icon">
				</div>
				<div class="h3rowtxt"><?php echo $bdata["text"];?></div>
			</div>
		</div>
	</header>
	<main>
	<div class="wrap1">
		<div class="wrow1"> 
			<?php include("catind/id1.php");?>
			<a href="productpage/mainpage.php?id=<?php echo $row["id"];  
													?>">
				<div class="s1">
					<img src="pictures/<?php  echo $row["photo"]?>" width="241" height="306" alt="<?php echo $row["name"] ?>">
				</div>
			</a>
			<?php include("catind/id2.php");?>
			<a href="productpage/mainpage.php?id=<?php echo $row2["id"] ?>">
				<div class="s2">
					<img src="pictures/<?php echo $row2["photo"];?>" width="461" height="306" alt="<?php echo $row2["name"] ?>">
				</div>
			</a>
			<?php include("catind/id3.php");?>
			<a href="productpage/mainpage.php?id=<?php echo $row3["id"] ?>">
				<div class="s3">
					<img src="pictures/<?php echo $row3["photo"]; ?>" width="212" height="306" alt="<?php echo $row3["name"] ?>">
				</div>
			</a>
		</div>
		<div class="wrow2">

			<?php include("catind/id4.php");?>
			<a href="productpage/mainpage.php?id=<?php echo $row4["id"] ?>">
				<div class="q1">
					<img src="pictures/<?php echo $row4["photo"]; ?>" width="605" height="259" alt="<?php  $row4["name"] ?>">
				</div>
			</a>


			<?php include("catind/id5.php");?>
			<a href="productpage/mainpage.php?id=<?php echo $row5["id"] ?>">
				<div class="q2">
					<img src="pictures/<?php echo $row5["photo"]; ?>" width="324" height="259" alt="<?php echo $row5["name"] ?>">
				</div>
			</a>

		</div>
	</div>
	<div class="wrap2">
		<div class="w2rightside">
			<button id="prev" onclick="prevSlide()">&#10094</button>
			<button id="next" onclick="nextSlid()">&#10095</button>
			<div id="circles"></div>
			<div class="imageholders">
				<?php //include("managment/specialoffer/special.offer.for.index.php"); ?>
			</div>
		</div>

		<div class="w2leftside">
			<div class="w2ltitle">SPECIAL OFFER</div>
			<div class="w2lsubtitle">Days <font size="-1"><sub>Left</sub></font>
			</div>
			<?php
			//if (isset($_POST["addcart"])) {
				//$id = $_POST["hiddenidsp"];
				//header("location:productpage/proshow.php?q=$id");
			//}
			?>
		</div>
	</div>
	<div class="wrap3">
		<div class="w3headline">
			<div class="w3hb"></div>
			<div class="w3hbb">TOP CHOICES</div>
			<div class="w3hb"></div>
		</div>
		<div class="w3topchoices">
			<?php //include("index.included/topchoices.php"); ?>
		</div>
		<div class="w3colabs">
			<?php
			//include("managment/under.topch.option/utp.in.index.php");
			?>
		</div>
	</div>
	</main>
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
									// $sqlabout = "SELECT * FROM `about`";
									// $result = mysqli_query($con, $sqlabout);
									// $num = mysqli_num_rows($result);
									// if ($num > 0) {
									// 	$data = mysqli_fetch_assoc($result);
									// }
									?>
					<?php //echo $data["text"] ?> ...<b>Learn more</b></div>
				<?php
				// $sqlfooter = "SELECT * FROM `footer`";
				// $result = mysqli_query($con, $sqlfooter);
				// $num = mysqli_num_rows($result);
				// if ($num > 0) {
				// 	$v = 1;
				// 	while ($v <= $num) {
				// 		$v++;
				// 		$fofetch = mysqli_fetch_assoc($result);
				?>
						<a href="productpage/footer.page.php?id=<?php //echo $fofetch["id"]; ?>" class="textdec">
							<div class="ff9"><?php //echo $fofetch["name"] ?></div>
						</a>
				<?php
				// 	}
				// }
				?>
				<div class="ff12">
					<?php
					//include("addres.configurations.index/add.conf.index.php");
					?>
				</div>
			</div>
			<div class="f3">
				<img src="images/LOGO.png" width="273" height="273">
			</div>
		</div>
	</div>
	</footer>
	<script type="text/javascript" src="javascript/jscodes.js"></script>
</body>

</html>