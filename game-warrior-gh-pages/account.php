<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Game Warrior Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
<?php
include "./includeFolder/navBar.php";
?>
	<!-- Header section end -->


	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">Latest News</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<div class="nt-item"><span class="new">new</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
				<div class="nt-item"><span class="strategy">strategy</span>Isum dolor sit amet, consectetur adipiscing elit. </div>
				<div class="nt-item"><span class="racing">racing</span>Isum dolor sit amet, consectetur adipiscing elit. </div>
			</div>
		</div>
	</div>
	<!-- Latest news section end -->


	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/1.jpg">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>Account Gallery</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section recent-game-page spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="img " style=" background-image: url(img/bac.avif);">
					<h2 class="text-warning text-center font-weight-bold" style="font-size: 50px; margin-left: 60px;">Comming Soon</h2>

					</div>
					<!-- <div class="row">
						<div class="col-md-6">
							<div class="recent-game-item">
								<div class="rgi-thumb set-bg" data-setbg="img/recent-game/1.jpg">
									<div class="cata new">racing</div>
								</div>
								<div class="rgi-content">
									<h5>Suspendisse ut justo tem por, rutrum</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
									<a href="#" class="comment">3 Comments</a>
									<div class="rgi-extra">
										<div class="rgi-star"><img src="img/icons/star.png" alt=""></div>
										<div class="rgi-heart"><img src="img/icons/heart.png" alt=""></div>
									</div>
								</div>
							</div>	
						</div>

					</div> -->
					<!-- <div class="site-pagination">
						<span class="active">01.</span>
						<a href="#">02.</a>
						<a href="#">03.</a>
					</div> -->
				</div>
				<!-- sidebar -->

			</div>
		</div>
	</section>
	<!-- Page section end -->

	<?php
	include "./includeFolder/footer.php";
	?>




	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>