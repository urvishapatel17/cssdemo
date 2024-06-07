<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Scorll text Up-Down</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
					
	<style type="text/css">
		.topbar-info-1{
			padding: 10px;
			color: #393636;
			font-size: 15px;
			font-weight: 500;
			text-align: center;
			background: #ccc;
		}
		@media (max-width: 768px){
			.topbar {font-size: 11px;}
		}
	</style>
</head>
<body>
	<div class="topbar-info-1">
		<p id="text1" class="marquee-text">GET 10% OFF ON YOUR FIRST PURCHASE USE CODE - RR10</p>
		<p id="text2" class="marquee-text">FREE DOMESTIC SHIPPING / FREE INTERNATIONAL SHIPPING ABOVE ₹20,000</p>
	</div>
	
	<script type="text/javascript">
		function setMaxHeight() {
		    var maxHeight = 0;
		    jQuery('.topbar-info-1 .slick-slide').each(function() {
		        var slideHeight = jQuery(this).outerHeight();
		        if (slideHeight > maxHeight) {
		            maxHeight = slideHeight;
		        }
		    });
		    jQuery('.topbar-info-1 .slick-slide').css('height', maxHeight + 'px');
		}
		jQuery('.topbar-info-1').on('init', function() {
		    setMaxHeight();
		});

		jQuery('.topbar-info-1').on('afterChange', function() {
		    setMaxHeight();
		});

		jQuery('.topbar-info-1').slick({
		    slidesToShow: 1,
		    slidesToScroll: 1,
		    dots: false,
		    arrows: false,
		    adaptiveHeight: true,
		    autoplay: true,
		    autoplaySpeed: 2000,
		    vertical: true, 
		    verticalSwiping: true,
		});
	</script>
</body>
</html>