@extends('frontend.layout')
@section('content')
<style>
	.input{
		width: 100%;
		padding: 1em 0.85em;
		margin-bottom: 1.43em; 
		font-size: 1.4rem;
		line-height: 1.5;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<section class="page-content" id="course-page">
			<div class="container">
				<main class="course-detail">
					<h2>{{$car->name}}</h2>
					<!-- <header>
						<div class="course-box">
							<i class="far fa-clock"></i>
							<p>4 years</p>
							<p>(5 hours/day)</p>
						</div>

						<div class="course-box">
							<i class="fas fa-chalkboard-teacher"></i>
							<p>44 students/ class</p>
						</div>

						<div class="course-box">
							<i class="fas fa-money-check-alt"></i>
							<p>$ 5,000</p>
							<p>(Books are included)</p>
						</div>

						<div class="course-box">
							<h3>course syallabus</h3>
							<button>download pdf</button>
						</div>
					</header> -->
					<article>
						<section class="course-intro">
							<img src="{{$car->image }}">
						</section>

						<!-- <section class="course-objective">
							<h3>Objectives</h3>
							<p>After this course student will be able to:</p>
							<ul>
								<li>Develop interactive Web pages using XHTML, HTML/DHTML & CSS</li>
								<li>Create interactive forms that capture and validate user input using JavaScript</li>
								<li>Create interactive forms that capture and validate user input using JavaScript</li>
								<li>Control Java Applets, ActiveX Controls and other plug-ins</li>
								<li>Control Java Applets, ActiveX Controls and other plug-ins</li>
								<li>Enhance PHP programming skills to successfully build interactive, data-driven web applications</li>
								<li>Develop interactive Web pages using XHTML, HTML/DHTML & CSS</li>
								<li>Develop interactive Web pages using XHTML, HTML/DHTML & CSS</li>
								<li>Control Java Applets, ActiveX Controls and other plug-ins</li>
								<li>Create interactive forms that capture and validate user input using JavaScript</li>
								<li>Develop interactive Web pages using XHTML, HTML/DHTML & CSS</li>
							</ul>

							<h3>Certification</h3>
							<p>After this course Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodc illum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

							<h3>Who can apply for this course?</h3>
							<ul>
								<li>+2 with science faculty</li>
								<li>+2 with management faculty</li>
								<li>+2 with science faculty</li>
								<li>+2 with management faculty</li>
							</ul>

							<h3>Training Methodology</h3>
							<ul>
								<li>Weekly test</li>
								<li>Digital Class</li>
								<li>Field Visit and real project demonstration</li>
								<li>+2 with managem</li>
							</ul>
						</section> -->
					</article>					
				</main>
				<aside>
					<div class="reserve-course">
						<h2></h2>
						<form id="quotation">
							<input type="hidden" value="{{encrypt($car->id)}}" name="product">
							<input type="text" id="name" name="name" placeholder="Your Name*" required>
							<input type="text" id="contact" name="contact" placeholder="Contact Number*" required>
							<input name="cnic" id="cnic" type="text" placeholder="CNIC">
							<select name="driver" id="driver" class="input" style="">
								<option value="With Driver">With Driver</option>
								<option value="Without Driver">Without Driver</option>
							</select>
							<input id="origin" type="text" name="origin" placeholder="Origin*" required>
							<input id="destination" type="text" name="destination" placeholder="Destination*" required>
							<label>Booking Date</label>
							<input id="date" type="date" name="date" class="input" required>
							<input id="booking_days" type="number" class="input" name="booking_days" placeholder="Booking Days*" required>
							<textarea id="message" name="message" placeholder="Write your message"></textarea>
							<input id="submit_btn" type="button" value="Submit" style="width: 150px;text-align: center;padding-top: 0.778em;padding-bottom: 0.778em;cursor: pointer;    background: #1c3961;color: #fff;font-size: 1.8rem;font-family: 'Raleway', sans-serif;">
						</form>
					</div>
					<!-- New Letter Ends -->
					<!-- <div class="recent-post">
						<h2>trainers</h2>
						<div class="post">
							<div class="post-wrap">
								<div class="img-wrap">
									<img src="images/recent-post-img.jpg" alt="Post Images">
								</div>
								<div class="post-content">
									<a href="#">
										<h3>Bibek Basnet</h3>
										<p>Web Developer</p>
									</a>
									<span>
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
									</span>
								</div>
							</div>

							<div class="post-wrap">
								<div class="img-wrap">
									<img src="images/recent-post-img.jpg" alt="Post Images">
								</div>
								<div class="post-content">
									<a href="#">
										<h3>Bibek Basnet</h3>
										<p>Web Developer</p>
									</a>
									<span>
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
									</span>
								</div>
							</div>

							<div class="post-wrap">
								<div class="img-wrap">
									<img src="images/recent-post-img.jpg" alt="Post Images">
								</div>
								<div class="post-content">
									<a href="#">
										<h3>Bibek Basnet</h3>
										<p>Web Developer</p>
									</a>
									<span>
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
									</span>
								</div>
							</div>

							<div class="post-wrap">
								<div class="img-wrap">
									<img src="images/recent-post-img.jpg" alt="Post Images">
								</div>
								<div class="post-content">
									<a href="#">
										<h3>Bibek Basnet</h3>
										<p>Web Developer</p>
									</a>
									<span>
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
									</span>
								</div>
							</div>
						</div>
					</div> -->
					<!-- Recent Post Close -->
				</aside>
			</div>
		</section>
		<script>
			$("#submit_btn").click(function() {
				var form_data = $("#quotation").serialize();
				$.ajax({
					url: "/sendQuot",
					data: {data:form_data},
					headers: {
					     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					   },
					method: 'post',
					success: function(response){
						if (response == "success") {
							alert('Your query received successfully, We will contact you soon.');
							$('#quotation').trigger("reset");
						} else if(response == "error"){

						} else {
						var erroJson = response;
						for (var err in erroJson) {
			                for (var errstr of erroJson[err])
			                  $("[name='" + err + "']").before("<div style='color:red'>" + errstr + "</div>");
			            }
			        }
					}
				});
			});
		</script>
@endsection