@extends('frontend.layout')
@section('content')
<div class="banner">
			<div class="owl-four owl-carousel" itemprop="image">
				<img src="assets/images/page-banner.jpg" alt="Image of Bannner">
				<img src="assets/images/page-banner2.jpg" alt="Image of Bannner">
				<img src="assets/images/page-banner3.jpg" alt="Image of Bannner">
			</div>
			<div class="container" itemprop="description">
				<h1>welcome to Raja Travel and Tours</h1>
				<h3>With our advance search feature you can now find the trips for you...</h3>
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
		<!-- Banner Close -->
		<!-- <div class="page-heading">
			<div class="container">
				<h2>popular tours</h2>
			</div>
		</div> -->

		<!-- Popular courses End -->
		<?php 
		/*
		<div class="learn-courses">
			<div class="container">
				<div class="courses">
					<div class="owl-one owl-carousel">
						<div class="box-wrap" itemprop="event" itemscope itemtype="">
							<div class="img-wrap" itemprop="image"><img src="/assets/images/tours/Hunza-Valley.jpg" alt="Hunza Valley"></div>
								<a href="#" class="learn-desining-banner" itemprop="name">Hunza Valley Tour >>></a>
							<div class="box-body" itemprop="description">
								<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
								<section itemprop="time">
									<p><span>Duration:</span> 4 Days</p>
									<!-- <p><span>Class Time:</span> 6am-12am / 11am-5pm</p> -->
									<p><span>RS:</span> 25000 </p>
								</section>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype="">
							<div class="img-wrap"  itemprop="image"><img src="/assets/images/tours/Naran-Kaghan-Valley.jpg" alt="Kaghan tour"></div>
								<a href="#" class="learn-desining-banner" itemprop="name">Naran Valley Tour >>></a>
							<div class="box-body" itemprop="description">
								<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
								<section itemprop="time">
									<p><span>Duration:</span> 4 Days</p>
									<!-- <p><span>Class Time:</span> 6am-12am / 11am-5pm</p> -->
									<p><span>RS:</span> 25000 </p>
								</section>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="/assets/images/tours/Neelum-Valley.jpg" alt="courses picture"></div>
								<a href="#" class="learn-desining-banner" itemprop="name">Neelum Valley Tour >>></a>
							<div class="box-body" itemprop="description">
								<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
								<section itemprop="time">
								<p><span>Duration:</span> 4 Days</p>
									<!-- <p><span>Class Time:</span> 6am-12am / 11am-5pm</p> -->
									<p><span>RS:</span> 25000 </p>
								</section>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="assets/images/course-pic.jpg" alt="courses picture"></div>
								<a href="#" class="learn-desining-banner" itemprop="name">Learn Web Designing >>></a>
							<div class="box-body" itemprop="description">
								<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
								<section itemprop="time">
									<p><span>Duration:</span> 4 Years</p>
									<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
									<p><span>Fee:</span> 4,00,000</p>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		*/ ?>
		<!-- Learn courses End -->

		<!-- Banner Close -->
		<div class="page-heading">
			<div class="container">
				<h2>Vehicles</h2>
			</div>
		</div>

		<!-- Vehicles End -->
		<div class="learn-courses">
			<div class="container">
				<div class="courses">
					<div class="owl-one owl-carousel">
						@if(!empty($cars))
						@foreach($cars as $car)
						<a href="{{ $car->slug}}">
						<div class="box-wrap" itemprop="event" itemscope itemtype="">
							<div class="img-wrap" itemprop="image"><img src="{{ $car->image }}" alt=""></div>
								<!-- <a href="#" class="learn-desining-banner" itemprop="name">Hunza Valley Tour >>></a> -->
							<div class="box-body" itemprop="description">
								<p>{{ $car->name }}</p>
								<section itemprop="time">
									<!-- <p><span>Duration:</span> 4 Days</p> -->
									<!-- <p><span>Class Time:</span> 6am-12am / 11am-5pm</p> -->
									<!-- <p><span>RS:</span> 25000 </p> -->
								</section>
							</div>
						</div>
						</a>
						@endforeach
						@endif

					</div>
				</div>
			</div>
		</div>
		<!-- Vehicles End -->
		<section class="whyUs-section">
			<div class="container">
				<div class="featured-points">
					<ul>
						<li><i class="fas fa-book"></i> free breakfast for tourists</li>
						<li><i class="fas fa-money-check-alt"></i> affordable packages</li>
						<li><i class="fas fa-chalkboard-teacher"></i> experienced guide</li>
						
					</ul>
				</div>
				<div class="whyus-wrap">
					<h1>why us?</h1>
					<p itemprop="description">Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsumLorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsumLorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsumLorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsumLorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsumLorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>

					<a href="#" class="read-more-btn">read more</a>
				</div>
			</div>
		</section>
		<!-- Closed WhyUs section -->
		<section class="page-heading">
			<div class="container">
				<h2>gallery</h2>
			</div>
		</section>
		<section class="gallery-images-section" itemprop="image" itemscope itemtype=" http://schema.org/ImageGallery">
			<div class="gallery-img-wrap">
				<a href="/assets/images/vehicles/Hilux.jpeg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="/assets/images/vehicles/Hilux.jpeg" alt="">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="/assets/images/vehicles/prado.jpeg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
				<img src="/assets/images/vehicles/prado.jpeg" alt="">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="/assets/images/vehicles/Land Cruiser.jpeg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
				<img src="/assets/images/vehicles/Land Cruiser.jpeg" alt="">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="/assets/images/vehicles/E200.jpeg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
				<img src="/assets/images/vehicles/E200.jpeg" alt="">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="/assets/images/vehicles/rolce-2.jpeg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
				<img src="/assets/images/vehicles/rolce-2.jpeg" alt="">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="/assets/images/vehicles/rolce-1.jpeg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
				<img src="/assets/images/vehicles/rolce-1.jpeg" alt="">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="/assets/images/vehicles/Hilux.jpeg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="/assets/images/vehicles/Hilux.jpeg" alt="">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="/assets/images/vehicles/prado.jpeg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
				<img src="/assets/images/vehicles/prado.jpeg" alt="">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="/assets/images/vehicles/Land Cruiser.jpeg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
				<img src="/assets/images/vehicles/Land Cruiser.jpeg" alt="">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="/assets/images/vehicles/E200.jpeg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
				<img src="/assets/images/vehicles/E200.jpeg" alt="">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="/assets/images/vehicles/rolce-2.jpeg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
				<img src="/assets/images/vehicles/rolce-2.jpeg" alt="">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="/assets/images/vehicles/rolce-1.jpeg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
				<img src="/assets/images/vehicles/rolce-1.jpeg" alt="">
				</a>
			</div>
		</section>
		<!-- End of gallery Images -->
		<?php /*
		<section class="page-heading">
			<div class="container">
				<h2>upcoming tours</h2>
			</div>
		</section>
		<section class="events-section" itemprop="event" itemscope itemtype=" http://schema.org/Event">
			<div class="container">
				<div class="event-wrap">
					<div class="img-wrap" itemprop="image">
						<img src="assets/images/events.jpg" alt="event images">
					</div>
					<div class="details">
						<a href=""><h3 itemprop="name">Naran Valley Tour.</h3></a>
						<p itemprop="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. quis ipsum numquam id labore.</p>
						<h5 itemprop="startDate"><i class="far fa-clock"></i> Dec 30,2022 | 11am</h5>
						<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> Thokar Niaz Baig</h5>
					</div>
				</div>

				<div class="event-wrap">
					<div class="img-wrap" itemprop="image">
						<img src="assets/images/events.jpg" alt="event images">
					</div>
					<div class="details">
					<a href=""><h3 itemprop="name">Neelum Valley Tour.</h3></a>
						<p itemprop="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. quis ipsum numquam id labore.</p>
						<h5 itemprop="startDate"><i class="far fa-clock"></i> Dec 30,2022 | 11am</h5>
						<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> Thokar Niaz Baig</h5>
					</div>
				</div>
			</div>
		</section>

		*/ ?>
		<!-- End of Events section -->
		<section class="what-other-say" style="margin-top: 150px">
			<div class="container">
				<h4 class="article-subtitle">Get to Know</h4>
				<h2 class="head">what our customer say</h2>
				<div class="three owl-carousel owl-theme">
					<div class="customer-item" itemscope itemtype="http://schema.org/Rating">
						<div class="border">
							<div class="customer">
								<figure>
									<img class="customer-img" src="assets/images/testimonials/1.jpeg" alt="">
									<figcaption>
										<span itemprop="author">Asad Akhtar</span>
										<div class="rateYo" itemprop="5"></div>
									</figcaption>
								</figure>
							</div>
							<div class="customer-review">
								<p itemprop="description">
									I have experienced Raja Travels  & Tours very experienced and professional.
Whenever and wherever i asked them for a transport support they were prompt.
And responded with exact transporr requirement.
Raja, plz keep up this spirit.
Stay blessed.
								</p>
							</div>
						</div>
					</div>
					<div class="customer-item" itemscope itemtype="http://schema.org/Rating">
						<div class="border">
							<div class="customer">
								<figure>
									<img class="customer-img" src="assets/images/testimonials/2.jpeg" alt="">
									<figcaption>
										<span itemprop="author">Imran Jahangir</span>
										<div class="rateYo" itemprop="ratingValue"></div>
									</figcaption>
								</figure>
							</div>
							<div class="customer-review">
								<p itemprop="description">
									Wow!!!! I love the services they provide.
Right company for the right travellers.
The estimate name in travel industry.
Very caring loving honest reliable & trustworthy staff.
Allah always bless you Raja Travels & Tours
								</p>
							</div>
						</div>
					</div>

					<div class="customer-item" itemscope itemtype="http://schema.org/Rating">
						<div class="border">
							<div class="customer">
								<figure>
									<img class="customer-img" src="assets/images/testimonials/3.jpeg" alt="">
									<figcaption>
										<span itemprop="author">Muhammad Usman</span>
										<div class="rateYo" itemprop="5"></div>
									</figcaption>
								</figure>
							</div>
							<div class="customer-review">
								<p itemprop="description">
									اسلام علیکم
میں نے فیصل آباد جانا تھا مجھے کار رینٹ پر چاہیے تھی میں نے فیسبک پر راجا ٹریولز اینڈ ٹورز کا پڑھا تھا۔ ان کو کال کی اچھے اخلاق والے بھائی نے بات سنی اور ایک گھنٹہ میں میرے گھر کے دروازہ پر مناسب کرائے پر نئی کار پہنچ گئی۔ ڈرائیور بھی بہت اخلاق والا تھا ۔
بہت سکون اور آرام دے سفر رہا۔ شکریہ راجا ٹریولز اینڈ ٹورز
						
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End of Others talk -->
		<!-- <section class="page-heading">
			<div class="container">
				<h2>latest news</h2>
			</div>
		</section> -->
		<!-- <section class="latest-news">
			<div class="container" itemprop="event" itemscope itemtype=" http://schema.org/Event">
				<div class="owl-two owl-carousel">
					<div class="news-wrap" itemprop="event">
						<div class="news-img-wrap" itemprop="image">
							<img src="assets/images/latest-new-img.jpg" alt="Latest News Images">
						</div>
						<div class="news-detail" itemprop="description">
							<a href=""><h1>Orientation Programme for new Students.</h1></a>
							<h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>

							<p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students.. Orientatin Programmes for new Students</p>
						</div>
					</div>

					<div class="news-wrap" itemprop="event">
						<div class="news-img-wrap" itemprop="image">
							<img src="assets/images/latest-new-img.jpg" alt="Latest News Images">
						</div>
						<div class="news-detail" itemprop="description">
							<a href=""><h1>Orientation Programme for new Students.</h1></a>
							<h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>

							<p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students.. Orientatin Programmes for new Students</p>
						</div>
					</div>

					<div class="news-wrap" itemprop="event">
						<div class="news-img-wrap" itemprop="image">
							<img src="assets/images/latest-new-img.jpg" alt="Latest News Images">
						</div>
						<div class="news-detail" itemprop="description">
							<a href=""><h1>Orientation Programme for new Students.</h1></a>
							<h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>

							<p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students.. Orientatin Programmes for new Students</p>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- Latest News CLosed -->
		<section class="query-section">
			<div class="container">
				<p>Any Queries? Ask us a question at<a href="tel:+9779813639131"><i class="fas fa-phone"></i> +92 300 9794094 - 98</a></p>
			</div>
		</section>
		<!-- End of Query Section -->
@endsection