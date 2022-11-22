@extends('frontend.layout')
@section('content')
<style type="text/css">
	.flexbox{
		display: grid;
		grid-template-columns: repeat(3, 1fr);
		grid-template-rows: repeat(3, 1fr);
		grid-column-gap: 20px;
		grid-row-gap: 20px;
	}
	.flexb_div .img-wrap img{
		width: 100%;
		object-fit: cover;
	}
</style>
<div class="banner">
	<div class="owl-four owl-carousel imgheight_forinner">
		<img src="/assets/images/page-banner.jpg" alt="Image of Bannner">
		<img src="/assets/images/page-banner2.jpg" alt="Image of Bannner">
		<img src="/assets/images/page-banner3.jpg" alt="Image of Bannner">
	</div>
	<div class="container">
		<h1>Vehicles </h1>
	</div>
	<div id="owl-four-nav" class="owl-nav"></div>
</div>
<div class="learn-courses" style="margin-top: 150px">
	<div class="container">
		<div class="courses">
			<div class="flexbox">
				<div class="flexb_div">
					<div class="box-wrap" itemprop="event" itemscope itemtype="">
						<div class="img-wrap" itemprop="image"><img src="/assets/images/vehicles/rolce-1.jpeg" alt=""></div>
	<!-- 					<a href="#" class="learn-desining-banner" itemprop="name">Hunza Valley Tour >>></a> -->
						<div class="box-body" itemprop="description">
							<p>Rolce Royce Black</p>
							<section itemprop="time">
								<!-- <p><span>Duration:</span> 1 Day</p> -->
								<!-- <p><span>Class Time:</span> 6am-12am / 11am-5pm</p> -->
								<!-- <p><span>RS:</span> 25000 </p> -->
							</section>
						</div>
					</div>
				</div>	


				<div class="flexb_div">
					<div class="box-wrap" itemprop="event" itemscope itemtype="">
						<div class="img-wrap"  itemprop="image"><img src="/assets/images/vehicles/rolce-2.jpeg" alt=""></div>
						<!-- <a href="#" class="learn-desining-banner" itemprop="name">Naran Valley Tour >>></a> -->
						<div class="box-body" itemprop="description">
							<p>Rolce Royce White</p>
							<section itemprop="time">
								<!-- <p><span>Duration:</span> 4 Days</p> -->
								<!-- <p><span>Class Time:</span> 6am-12am / 11am-5pm</p> -->
								<!-- <p><span>RS:</span> 25000 </p> -->
							</section>
						</div>
					</div>
				</div>	


				<div class="flexb_div">
					<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
						<div class="img-wrap"  itemprop="image">
							<img src="/assets/images/vehicles/E200.jpeg" alt="">
						</div>
						<!-- <a href="#" class="learn-desining-banner" itemprop="name">Neelum Valley Tour >>></a> -->
						<div class="box-body" itemprop="description">
							<p>Mercedes</p>
							<section itemprop="time">
								<!-- <p><span>Duration:</span> 1 Day</p> -->
								<!-- <p><span>Class Time:</span> 6am-12am / 11am-5pm</p> -->
								<!-- <p><span>RS:</span> 3000 </p> -->
							</section>
						</div>
					</div>
				</div>	


				<div class="flexb_div">
					<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
						<div class="img-wrap"  itemprop="image">
							<img src="/assets/images/vehicles/Land Cruiser.jpeg" alt=""></div>
						<!-- <a href="#" class="learn-desining-banner" itemprop="name">Learn Web Designing >>></a> -->
						<div class="box-body" itemprop="description">
							<p>Land Cruiser</p>
							<section itemprop="time">
								<!-- <p><span>Duration:</span> 4 Years</p>
								<p><span>Class Time:</span> 6am-12am / 11am-5pm</p> -->
								<!-- <p><span style="font-weight: bold">Fee:</span> 15000 Per Day</p> -->
							</section>
						</div>
					</div>
				</div>

				<div class="flexb_div">
					<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
						<div class="img-wrap"  itemprop="image">
							<img src="/assets/images/vehicles/Hilux.jpeg" alt="">
						</div>
						<div class="box-body" itemprop="description">
							<p>Hilux</p>
							<section itemprop="time">
							</section>
						</div>
					</div>
				</div>

				<div class="flexb_div">
					<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
						<div class="img-wrap"  itemprop="image">
							<img src="/assets/images/vehicles/prado.jpeg" alt="">
						</div>
						<div class="box-body" itemprop="description">
							<p>Prado</p>
							<section itemprop="time">
							</section>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection