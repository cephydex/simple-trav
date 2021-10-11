<!DOCTYPE html>
<html lang="en">
<head>
<title>Course</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('assets/site/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('assets/site/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/site/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/site/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/site/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/site/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/site/styles/responsive.css')}}">
</head>
<body>

<div class="super_container">

	<!-- Header -->
	@include('site.nav')
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="#">Home</a></li>
					<li class="menu_item menu_mm"><a href="#">About us</a></li>
					<li class="menu_item menu_mm"><a href="courses.html">Courses</a></li>
					<li class="menu_item menu_mm"><a href="elements.html">Elements</a></li>
					<li class="menu_item menu_mm"><a href="news.html">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	@yield('content')

	

	<!-- Footer -->
    @include('site.footer')
</div>

<script src="{{asset('assets/site/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/site/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('assets/site/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/site/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('assets/site/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('assets/site/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('assets/site/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('assets/site/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('assets/site/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('assets/site/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('assets/site/plugins/easing/easing.js')}}"></script>
<script src="{{asset('assets/site/js/custom.js')}}"></script>

</body>
</html>