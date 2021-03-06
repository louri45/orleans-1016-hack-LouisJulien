<body >

    	<div class="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index3.php" class="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-type">
							<h1 class="site-title">The WeatherMood Compagny</h1>
							<small class="site-description">Liberer votre esprit</small>
						</div>
					</a>

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="#">Home</a></li>
							<li class="menu-item"><a href="#">News</a></li>
							<li class="menu-item"><a href="#">Live cameras</a></li>
							<li class="menu-item"><a href="#">Photos</a></li>
							<li class="menu-item"><a href="#">Contact</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

			<div class="hero" data-bg-image="images/banner.png">
				<div class="container">
					<form action="index.php#about" class="find-location" method="POST" name="frm1" >
						<input type="text" placeholder="Find your location..." name="search" value="Paris" >
						<input type="submit" value="Find">
					</form>

				</div>
			</div>
			<div class="forecast-table">
				<div class="container">
					<div class="forecast-container">
						<div class="today forecast tarba">
							<div class="forecast-header">
								<div class="day"><?php echo date("F d Y") ?></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="location">
									<?php if (empty($decode)){

										echo 'Nous n\'avons pas trouvé : veuillez entrer un nom de ville ou son ID';

									} else {

										echo $decode['name'];

									}?></div>
								<div class="degree">
									<div class="num">
										<?php if (empty($decode)){

											echo "?";
										} else {
											echo round(($decode['main']['temp'] - 273.15),1);
										}

										?>
										<sup>o</sup>C
									</div>

									<div class="forecast-icon">
											<?php
											if(empty($weather_type)){

											}

											if ($weather_type=='Rain'){
												echo "<img src=\"images/icons/icon-10.svg\" alt=\">\" width='90'";
											}

											elseif ($weather_type=='Thunderstorm'){
												echo "<img src=\"images/icons/icon-11.svg\" alt=\">\" width='90'";
											}

											elseif ($weather_type=='Drizzle'){
												echo "<img src=\"images/icons/icon-9.svg\" alt=\">\" width='90'";
											}

											elseif ($weather_type=='Snow'){
												echo "<img src=\"images/icons/icon-14.svg\" alt=\">\" width='90'";
											}

											elseif ($weather_type=='Atmosphere'){
												echo "<img src=\"images/icons/icon-7.svg\" alt=\">\" width='90'";
											}

											elseif ($weather_type=='Clear'){
												echo "<img src=\"images/icons/icon-2.svg\" alt=\">\" width='90'";
											}

											elseif ($weather_type=='Clouds'){
												echo "<img src=\"images/icons/icon-6.svg\" alt=\">\" width='90'";
											}

											elseif ($weather_type=='Extreme'){
												echo "<img src=\"images/icons/icon-8.svg\" alt=\">\" width='90'";
											}

											else {
												echo "<img src=\"images/icons/icon-5.svg\" alt=\">\" width='90'";
											}

											?>
									</div>

							    </div>
							</div>
							<span><img src="images/icon-umberella.png" alt="">
								<?php if (empty($decode)){
									echo '?';
								} else {
									echo $decode['main']['humidity'].'%';
								}
								?>
								</span>
							<span><img src="images/icon-wind.png" alt="">
								<?php if (empty($decode)){
									echo "?";
								} else {
									echo round(($decode['wind']['speed']*1.609)).' km/h';
								}
								?>
								</span>
                            <div class="deezer pull-right">
                                <?php include "deezer_api.php"; ?>
                            </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Live cameras</h2>
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="images/live-camera-1.jpg" alt=""></figure>
									<h3 class="location">New York</h3>
									<small class="date">8 oct, 8:00AM</small>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="images/live-camera-2.jpg" alt=""></figure>
									<h3 class="location">Los Angeles</h3>
									<small class="date">8 oct, 8:00AM</small>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="images/live-camera-3.jpg" alt=""></figure>
									<h3 class="location">Chicago</h3>
									<small class="date">8 oct, 8:00AM</small>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="images/live-camera-4.jpg" alt=""></figure>
									<h3 class="location">London</h3>
									<small class="date">8 oct, 8:00AM</small>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="fullwidth-block" data-bg-color="#262936">
					<div class="container">
						<div class="row">
							<div class="col-lg-2">
								<div class="news quote">
                                    <?php
                                        include 'quote.php';
                                    ?>
								</div>
							</div>
							<div class="col-md-8">
                                <h2 class="section-title" style="text-align: center;">Awesome Photos</h2>
                                <div class="photo-grid">
                                    <a href="#"><img src="images/thumb-1.jpg" alt="#"></a>
                                    <a href="#"><img src="images/thumb-2.jpg" alt="#"></a>
                                    <a href="#"><img src="images/thumb-3.jpg" alt="#"></a>
                                    <a href="#"><img src="images/thumb-4.jpg" alt="#"></a>
                                    <a href="#"><img src="images/thumb-5.jpg" alt="#"></a>
                                    <a href="#"><img src="images/thumb-6.jpg" alt="#"></a>
                                    <a href="#"><img src="images/thumb-7.jpg" alt="#"></a>
                                    <a href="#"><img src="images/thumb-8.jpg" alt="#"></a>
                                    <a href="#"><img src="images/thumb-9.jpg" alt="#"></a>
                                </div>
							</div>
						</div>
					</div>
				</div>

				<div class="fullwidth-block">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-4">
								<h2 class="section-title">Application features</h2>
								<ul class="arrow-feature">
									<li>
										<h3>Natus error sit voluptatem accusantium</h3>
										<p>Doloremque laudantium totam rem aperiam Inventore veritatis et quasi architecto beatae vitae.</p>
									</li>
									<li>
										<h3>Natus error sit voluptatem accusantium</h3>
										<p>Doloremque laudantium totam rem aperiam Inventore veritatis et quasi architecto beatae vitae.</p>
									</li>
									<li>
										<h3>Natus error sit voluptatem accusantium</h3>
										<p>Doloremque laudantium totam rem aperiam Inventore veritatis et quasi architecto beatae vitae.</p>
									</li>
								</ul>
							</div>
							<div class="col-md-4">
								<h2 class="section-title">Weather analyssis</h2>
								<ul class="arrow-list">
									<li><a href="#">Accusantium doloremque laudantium rem aperiam</a></li>
									<li><a href="#">Eaque ipsa quae ab illo inventore veritatis quasi</a></li>
									<li><a href="#">Architecto beatae vitae dicta sunt explicabo</a></li>
									<li><a href="#">Nemo enim ipsam voluptatem quia voluptas</a></li>
									<li><a href="#">Aspernatur aut odit aut fugit, sed quia consequuntur</a></li>
									<li><a href="#">Magni dolores eos qui ratione voluptatem sequi</a></li>
									<li><a href="#">Neque porro quisquam est qui dolorem ipsum quia</a></li>
								</ul>
							</div>
							<div class="col-md-4">
								<h2 class="section-title">Awesome Photos</h2>
								<div class="photo-grid">
									<a href="#"><img src="images/thumb-1.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-2.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-3.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-4.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-5.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-6.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-7.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-8.jpg" alt="#"></a>
									<a href="#"><img src="images/thumb-9.jpg" alt="#"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<form action="#" class="subscribe-form">
								<input type="text" placeholder="Enter your email to subscribe...">
								<input type="submit" value="Subscribe">
							</form>
						</div>
						<div class="col-md-3 col-md-offset-1">
							<div class="social-links">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>

					<p class="colophon">Copyright 2014 Company name. Designed by Themezy. All rights reserved</p>
				</div>
			</footer> <!-- .site-footer -->
		</div>
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>
</html>