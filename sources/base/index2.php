<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>iTunes Remote for Windows Phone 7</title>
<link rel="stylesheet" href="/style.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<!--[if lte IE 6]>
<script type="text/javascript">
var clear="http://komodex.com/wordpress/wp-content/themes/komodex/images/clear.gif";
</script>
<script type="text/javascript" src="http://komodex.com/wordpress/wp-content/themes/komodex/js/unitpngfix.js"></script>
<![endif]-->
</head>

<body>
<div class="fl">&nbsp;</div>
<div class="content-w">
	<div class="phonepreview unitPng" id="phone">
		<div id="s1" class="phoneimageslide">
			<img src="/images/ss/01.png" />
			<img src="/images/ss/02.png" style="display:none;" />
			<img src="/images/ss/03.png" style="display:none;" />
			<img src="/images/ss/04.png" style="display:none;" />
			<img src="/images/ss/05.png" style="display:none;" />
			<img src="/images/ss/06.png" style="display:none;" />
			<img src="/images/ss/07.png" style="display:none;" />
			<img src="/images/ss/08.png" style="display:none;" />
		</div>
		<div id="s1cont" class="phoneimageslidecontrols" style="display:none;">
			<a href="#" class="l" id="slide-left"><img src="/images/slide-left.png" width="40" height="32" /></a>
			<a href="#" class="r" id="slide-right"><img src="/images/slide-right.png" width="40" height="32" /></a>
		</div>
		<script type="text/javascript">
			$('#s1').cycle({
				fx: 'scrollHorz',
				easing: 'easeOutQuart',
				delay: -2000,
				speed: 300,
				next: '#slide-right',
				prev: '#slide-left'
			});
			
			$('#phone').hover(
				function() { $('#s1cont').fadeIn('fast'); $('#s1').cycle('pause'); },
				function() { $('#s1cont').fadeOut('fast'); $('#s1').cycle('resume'); }
			);
		</script>
	</div>
	<div class="head">
		<div class="utilitylink">
			<a href="/utility">Download Pairing Utility</a>
		</div>
		<a href="/"><img src="/images/remote-logo.png" height="73" width="270" /></a>
	</div>
	<div class="content">
		<h2>Control iTunes From Your Phone</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<p>&nbsp;</p>
		<div style="text-align:center;">
			<img src="/images/wp7_English_320x50_blue.png" />
		</div>
	</div>
	<div class="footer">
		<a href="http://komodex.com/" class="komolink"><img src="/images/komodex-38.png" /></a>
		<div>Contact Us</div>
	</div>
</div>
</body>
</html>
