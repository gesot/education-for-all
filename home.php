<!DOCTYPE html>
<html lang="en" dir="ltr">

	<head>
		<meta charset="utf-8">
		<title>Education For All</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
			rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="index.css">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>

	<body>
		<?php include('nav/navbar.php');?>
		<section class="img-slider">
			<div class="slide active">
				<img src="images/1.jpg" alt="">
				<div class="info">
					<h2><span class="prim-color">Education</span> For All</h2>
					<p>Lets make this world a better place for everyone</p>
					<a href="#main-page" class="hero-btn">Learn More</a>
				</div>
			</div>
			<div class="slide">
				<img src="images/2n.jpg" alt="">
				<div class="info">
					<h2><span class="prim-color">Education</span> For All</h2>
					<p>Lets make this world a better place for everyone</p>
					<a href="#main-page" class="hero-btn">Learn More</a>
				</div>
			</div>
			<div class="slide">
				<img src="images/3.jpg" alt="">
				<div class="info">
					<h2><span class="prim-color">Education</span> For All</h2>
					<p>Lets make this world a better place for everyone</p>
					<a href="#main-page" class="hero-btn">Learn More</a>
				</div>
			</div>
			<div class="navigation">
				<div class="btn active"></div>
				<div class="btn"></div>
				<div class="btn"></div>
			</div>
		</section>
		<!--START OF CONTEINER-->
		<div  id="main-page">
		<div class="container startofpage" >
			<div class="row">
				<div class="col-lg-6">
					<img class="img-fluid" src="images/homephoto1.webp" alt="">
				</div>
				<div class="col-lg-6">
					<h3> Education For All</h3>
					<p> Education is widely accepted to be essential for a healthy and self-determined life.
						<br><br>According to Unicef, an estimate of 617 million children and adolescents around the
						world are unable to reach minimum proficiency levels in reading and mathematics, even though two
						thirds of them are in school. <br><br>What’s more, roughly one in five school-aged children are
						not in school at all and only 66 per cent of countries have achieved gender parity in primary
						education. <br><br>We could keep going about all the notable things going around the world
						education wise, but one thing’s for sure. We need quality education for everyone. </p>
				</div>
			</div>
		</div>
	</div>
		<div class="container-fluid aristotle ">
			<div class="row">
				<div class="col-md-8 my-auto tex">
					<figure>
						<blockquote class="blockquote" id="quote">
							<p>The roots of education are bitter, but the fruit is sweet.</p>
						</blockquote>
						<figcaption class="blockquote-footer blq"> Aristotle </figcaption>
					</figure>
				</div>
				<div class="col-md-4 text-center">
					<img class='img-fluid aristotleimg' src="images/aristotle.png" alt="aristotle">
				</div>
			</div>
		</div>
		<div class="container startofpage" style='margin-top:100px;'>
			<!--ΕΙΚΟΝΑ ΜΕ ΚΕΙΜΕΝΟ-->
			<div class="row" style='margin-top:100px;'>
				<!--ΚΕΙΜΕΝΟ ΜΕ ΕΙΚΟΝΑ-->
				<div class="col-md-6">
					<h3>Who are we?</h3>
					<p>One of the UN envisions by 2030 is to ensure inclusive and equitable quality education and
						promote lifelong learning opportunities for all. <br><br>Specifically: ensure free primary and
						secondary education for all boys and girls, eliminate gender disparities in education and ensure
						equal access for the vulnerable, increase the supply and quality of teachers and so much more.
						<br><br>EducationForAll is an organization that aspires to spread information and resources to
						help reach the goal of UN's envision regarding education.<br><br>In here you will find
						information about the state of Education in the globe, ways to contribute to the cause and
						various resources and website where you can go learn and increase your knowledge among others.
					</p>
				</div>
				<div class="col-md-6 ">
					<img class='img-fluid' src="images/homephoto2.webp" alt="Home photo">
				</div>
			</div>
		</div>
		<!--JAVASCRIPT ΓΙΑ ΕΝΑΛΛΑΓΕΣ SLIDE-->
		<script type="text/javascript">
			var slides = document.querySelectorAll('.slide');
			var btns = document.querySelectorAll('.btn');
			let currentSlide = 1;

			// Javascript for image slider autoplay navigation
			var repeat = function (activeClass) {
				let active = document.getElementsByClassName('active');
				let i = 1;

				var repeater = () => {
					setTimeout(function () {
						[...active].forEach((activeSlide) => {
							activeSlide.classList.remove('active');
						});

						slides[i].classList.add('active');
						btns[i].classList.add('active');
						i++;

						if (slides.length == i) {
							i = 0;
						}
						if (i >= slides.length) {
							return;
						}
						repeater();
					}, 10000);
				}
				repeater();
			}
			repeat();

			$('.icon').click(function () {
				$('span').toggleClass("cancel");
			});

			// Javascript for image slider manual navigation
			var manualNav = function (manual) {
				slides.forEach((slide) => {
					slide.classList.remove('active');

					btns.forEach((btn) => {
						btn.classList.remove('active');
					});
				});

				slides[manual].classList.add('active');
				btns[manual].classList.add('active');
			}

			btns.forEach((btn, i) => {
				btn.addEventListener("click", () => {
					manualNav(i);
					currentSlide = i;
				});
			});


		</script>
		<!--END of CONTEINER-->
		<!--START OF FOOTER-->
		<footer>
		<?php include('nav/footer.php');?>
		</footer>
		<!--END OF FOOTER-->
		<!--START OF <TOP> BUTTON-->
		<a href="#"><i class="gotopbtn" href="#"><i class="fa fa-arrow-circle-up"></i></i></a>
		<!--END OF TOP BUTTON-->
	</body>

</html>
