<!DOCTYPE html>
<html lang="en">
<head>
	<title>朝湘門小館</title>
	<meta charset="utf-8">
	<link rel="icon" href="images/favicon.ico">
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/slider.css') }}">
	<link rel="stylesheet" href="{{ asset('css/form.css') }}">
	<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/jquery-migrate-1.1.1.js') }}"></script>
	<script src="{{ asset('js/superfish.js') }}"></script>
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('js/sForm.js') }}"></script>
	<script src="{{ asset('js/forms.js') }}"></script>
	<script src="{{ asset('js/jquery.carouFredSel-6.1.0-packed.js') }}"></script>
	<script src="{{ asset('js/tms-0.4.1.js') }}"></script>

	<script>
		$(window).load(function(){
			$('.slider')._TMS({
				show:0,
				pauseOnHover:false,
				prevBu:'.prev',
				nextBu:'.next',
				playBu:false,
				duration:800,
				preset:'fade',
				pagination:true,
				pagNums:false,
				slideshow:8000,
				numStatus:false,
				banners:false,
				waitBannerAnimation:false,
				progressBar:false
			})
		});

		$(window).load (
			function(){$('.carousel1').carouFredSel({auto: false,prev: '.prev',next: '.next', width: 960, items: {
				visible : {min: 1,
					max: 4
				},
				height: 'auto',
				width: 240,
			}, responsive: false,
			scroll: 1,
			mousewheel: false,
			swipe: {onMouse: false, onTouch: false}});
		});

	</script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
	<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
	</a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<link rel="stylesheet" media="screen" href="css/ie.css">

	<![endif]-->
	</head>
	<body>
		<div class="main">
			@include('frontend.blocks.header')
			@if(isset($slider))
				@include('frontend.blocks.slider')
			@endif

			<div class="{{ $bodyClass or 'content' }}">
				@yield('content')
			</div>
		</div>
		@include('frontend.blocks.footer')
	</body>
</html>