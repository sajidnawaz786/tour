@extends('frontend.layout')
@section('content')
		<div class="banner">
			<div class="owl-four owl-carousel imgheight_forinner">
				<img src="/assets/images/page-banner.jpg" alt="Image of Bannner">
			</div>
			<div class="container">
				<h1>Gallery</h1>
			</div>
			<div id="owl-four-nav" class="owl-nav"></div>
		</div>

		<section class="gallery-section2">
			<div class="container">
				<div id="filters" class="button-group">
					<button class="button" data-filter="*">all</button>
  					<button class="button" data-filter=".business">business</button>
  					<button class="button" data-filter=".design">design</button>
  					<button class="button" data-filter=".development">development</button>
  					<button class="button" data-filter=".seo">seo</button>
  					<button class="button" data-filter=".marketing">marketing</button>
				</div>
			</div>
				<section class="gallery-images-section gallery2" id="cGrid">
					<div class="gallery-img-wrap grid-item business" data-category="business">
						<a href="images/gallery-img1.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="/assets/images/gallery-img1.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item business" data-category="business">
						<a href="images/gallery-img2.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="/assets/images/gallery-img2.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item design" data-category="design">
						<a href="images/gallery-img3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="/assets/images/gallery-img3.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item design" data-category="design">
						<a href="images/gallery-img4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="/assets/images/gallery-img4.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item development" data-category="development">
						<a href="images/gallery-img5.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="/assets/images/gallery-img5.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item design" data-category="design">
						<a href="images/gallery-img6.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="/assets/images/gallery-img6.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item seo" data-category="seo">
						<a href="images/gallery-img7.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="/assets/images/gallery-img7.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item marketing" data-category="marketing">
						<a href="images/gallery-img8.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="/assets/images/gallery-img8.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item seo" data-category="seo">
						<a href="images/gallery-img9.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="/assets/images/gallery-img9.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item seo" data-category="seo">
						<a href="images/gallery-img10.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="/assets/images/gallery-img10.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item seo" data-category="seo">
						<a href="images/gallery-img11.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="/assets/images/gallery-img11.jpg" alt="gallery-images">
						</a>
					</div>
					<div class="gallery-img-wrap grid-item seo" data-category="seo">
						<a href="images/gallery-img12.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
							<img src="/assets/images/gallery-img12.jpg" alt="gallery-images">
						</a>
					</div>
				</section>
				<!-- End of gallery Images -->				
		</section>

		<section class="query-section">
			<div class="container">
				<p>Any Queries? Ask us a question at<a href="tel:+923009794094"><i class="fas fa-phone"></i> +923009794094</a></p>
			</div>
		</section>
@endsection