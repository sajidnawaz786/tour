@extends('frontend.layout')
@section('content')
<!-- Header Close -->
<div class="banner">
	<div class="owl-four owl-carousel imgheight_forinner">
		<img src="/assets/images/page-banner.jpg" alt="Image of Bannner">
	</div>
	<div class="container">
		<h1>About Us </h1>
	</div>
	<div id="owl-four-nav" class="owl-nav"></div>
</div>
		<!-- <div class="banner">
			<div class="owl-five owl-carousel owl-theme">
	            <div class="item-video">
            		<iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            		</iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
            		<iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            		</iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
          </div>
		</div> -->

		<section class="about-upper-section" itemprop="mainContentofPage">
			<div class="container">
				<article class="who-we-are">
					<h2 class="top-heading">who we are</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
				</article>
				<div class="our-story">
					<h2 class="top-heading">our story</h2>
					<ul>
						<li><i class="fas fa-chalkboard-teacher"></i> <a href="#">60+ certified teachers</a></li>
						<li><i class="fas fa-graduation-cap"></i> <a href="#">600+ students enrolled</a></li>
						<li><i class="fas fa-book-open"></i> <a href="#">50+ courses completed</a></li>
						<li><i class="fas fa-users"></i> <a href="#">10000+ foreign followers</a></li>

						<!-- For None link use below -->
						<!-- <li><i class="fas fa-chalkboard-teacher"></i> <p>60+ certified teachers</p></li>
						<li><i class="fas fa-graduation-cap"></i>  <p>600+ students enrolled</p></li>
						<li><i class="fas fa-book-open"></i>  <p>50+ courses completed</p></li>
						<li><i class="fas fa-users"></i>  <p>10000+ foreign followers</p></li> -->
					</ul>
				</div>
			</div>
		</section>

		<?php /*
		<section class="team-members" itemprop="contributor">
			<div class="container">
				<h2 class="top-heading">meet our team</h2>
				<article class="developer-grid">
					<div class="developer-wrap">
						<img src="/assets/images/developer-img.jpg" alt="developer images">
						<h3>Bibek Basnet</h3>
						<p>Web Developer</p>
						<ul>
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-instagram"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>

					<div class="developer-wrap">
						<img src="/assets/images/developer-img.jpg" alt="developer images">
						<h3>Bibek Basnet</h3>
						<p>Web Developer</p>
						<ul>
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-instagram"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>

					<div class="developer-wrap">
						<img src="/assets/images/developer-img.jpg" alt="developer images">
						<h3>Bibek Basnet</h3>
						<p>Web Developer</p>
						<ul>
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-instagram"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>

					<div class="developer-wrap">
						<img src="/assets/images/developer-img.jpg" alt="developer images">
						<h3>Bibek Basnet</h3>
						<p>Web Developer</p>
						<ul>
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-instagram"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>

					<div class="developer-wrap">
						<img src="/assets/images/developer-img.jpg" alt="developer images">
						<h3>Bibek Basnet</h3>
						<p>Web Developer</p>
						<ul>
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-instagram"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>

					<div class="developer-wrap">
						<img src="/assets/images/developer-img.jpg" alt="developer images">
						<h3>Bibek Basnet</h3>
						<p>Web Developer</p>
						<ul>
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-instagram"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>

					<div class="developer-wrap">
						<img src="/assets/images/developer-img.jpg" alt="developer images">
						<h3>Bibek Basnet</h3>
						<p>Web Developer</p>
						<ul>
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-instagram"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>

					<div class="developer-wrap">
						<img src="/assets/images/developer-img.jpg" alt="developer images">
						<h3>Bibek Basnet</h3>
						<p>Web Developer</p>
						<ul>
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-instagram"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>
				</article>
			</div>
		</section>
		<!-- Team Members Closed  -->
		
		<section class="what-other-say">
			<div class="container">
				<div class="wrap-others-say">
					<h1 style="color:black">what other say about us</h1>
					<div id="carousel" class="flexslider">
						<ul class="slides">
							<li class="img-wrap">
								<figure>
									<img src="/assets/images/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure>
									<img src="/assets/images/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure>
									<img src="/assets/images/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure>
									<img src="/assets/images/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure>
									<img src="/assets/images/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure>
									<img src="/assets/images/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure>
									<img src="/assets/images/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure>
									<img src="/assets/images/review-big-img.jpg" alt="Person Image">
									<figcaption class="fig">
										<h3 class="hidden">Sagar Sapkota</h3>
										<h4 class="hidden">UI Designer</h4>
									</figcaption>
								</figure>
							</li>
						</ul>
					</div>

					<div id="slider" class="flexslider">
	  					<ul class="slides">
						    <li>
						    	<div class="testimonial-holder">
						    		<strong class="title">Amazing service and amazing team. Thank you!</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder">
						    		<strong class="title">Very Satisfaied with their service</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder">
						    		<strong class="title">Quick, efficient and meets your expectations</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder">
						    		<strong class="title">The website was according our imagination</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder">
						    		<strong class="title">Amazing service and amazing team. Thank you!</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder">
						    		<strong class="title">Very Satisfaied with their service</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder">
						    		<strong class="title">Quick, efficient and meets your expectations</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder">
						    		<strong class="title">The website was according our imagination</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
	  					</ul>
					</div>

					<!-- <div id="sync2" class="owl-carousel owl-theme">
					  <div class="item">
					    <img src="/assets/images/review-big-img.jpg" alt="Person Image"></div>
					  <div class="item">
					    <img src="/assets/images/review-big-img.jpg" alt="Person Image"></div>
					  <div class="item">
					    <img src="/assets/images/review-big-img.jpg" alt="Person Image"></div>
					  <div class="item">
					    <img src="/assets/images/review-big-img.jpg" alt="Person Image"></div>
					  <div class="item">
					    <img src="/assets/images/review-big-img.jpg" alt="Person Image"></div>
					  <div class="item">
					    <img src="/assets/images/review-big-img.jpg" alt="Person Image"></div>
					  <div class="item">
					    <img src="/assets/images/review-big-img.jpg" alt="Person Image"></div>
					  <div class="item">
					    <img src="/assets/images/review-big-img.jpg" alt="Person Image"></div>
					</div> -->

					<!-- <div id="sync1" class="owl-carousel owl-theme">
					 	<div class="item">
					   		<strong class="title">Amazing service and amazing team. Thank you!</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						</div>
					  <div class="item">
					    <strong class="title">Very Satisfaied with their service</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div></div>
					  <div class="item">
					    <strong class="title">Quick, efficient and meets your expectations</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div></div>
					  <div class="item">
					    <strong class="title">Very Satisfaied with their service</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div></div>
					  <div class="item">
					    <strong class="title">Very jhkhkh with their service</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div></div>
					  <div class="item">
					    <strong class="title">Very 7777 with their service</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div></div>
					  <div class="item">
					    <strong class="title">Very 888 with their service</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div></div>
					  <div class="item">
					    <strong class="title">Very 9999 with their service</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div></div>
					</div> -->
				</div>
			</div>
		</section>
		<!-- End of Others talk -->
		*/ ?>
		<section class="query-section">
			<div class="container">
				<p>Any Queries? Ask us a question at<a href="tel:+9779813639131"><i class="fas fa-phone"></i> +977 9813639131</a></p>
			</div>
		</section>
		<!-- End of Query Section -->
@endsection