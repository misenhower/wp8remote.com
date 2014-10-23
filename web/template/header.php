<?php
define('KOMO_MARKETPLACE_LINK', 'http://windowsphone.com/s?appid=65cf6aa1-5503-e011-9264-00237de2db9e');
define('KOMO_CONTACT_LINK', 'http://komodex.com/contact');

define('KOMO_WPSTOREBADGE_LARGE', '/images/258x67_WPS_Download_wpcyan.png');
define('KOMO_WPSTOREBADGE_SMALL', '/images/154x40_WPS_Download_wpcyan.png');

define('KOMO_PAIRINGUTILITY_WIN_VERSION', '2.0.0');
define('KOMO_PAIRINGUTILITY_WIN_SIZE', '368kb');
define('KOMO_PAIRINGUTILITY_WIN_SUPPORTS', 'Windows XP, Vista, 7, and 8');
define('KOMO_PAIRINGUTILITY_MAC_VERSION', '2.0.1');
define('KOMO_PAIRINGUTILITY_MAC_SIZE', '327kb');
define('KOMO_PAIRINGUTILITY_MAC_SUPPORTS', 'OS X 10.5.8 &ndash; 10.10');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Remote for Windows Phone<?php if (defined('KOMO_TITLE')) print " &mdash; " . KOMO_TITLE; ?></title>
<link rel="stylesheet" href="/css/style.css?2" type="text/css" media="screen" />
<!-- Mobile -->
<link rel="stylesheet" type="text/css" href="/css/mobile.css" media="screen and (max-device-width: 480px)" />
<!--[if IEMobile 7]>
<link rel="stylesheet" type="text/css" href="/css/mobile.css" media="screen"  />
<![endif]-->
<link rel="image_src" href="http://wp8remote.com/images/RemoteIcon.png" />
<meta name="description" content="With Remote, you can control iTunes from your Windows Phone device.">
<meta name="keywords" content="iTunes, remote, windows phone, windows phone 8, iTunes remote, windows phone 8 app">
</head>

<?php if (!defined('KOMO_LONGPAGE')): ?>
<body>
<?php else: ?>
<body class="longpage">
<?php endif; ?>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.cycle.all.min.js?3.0.3"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>

<!--[if lte IE 6]>
<script type="text/javascript">
var clear="http://komodex.com/wordpress/wp-content/themes/komodex/images/clear.gif";
</script>
<script type="text/javascript" src="http://komodex.com/wordpress/wp-content/themes/komodex/js/unitpngfix.js"></script>
<![endif]-->

<!-- Google Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26371738-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php if (!defined('KOMO_LONGPAGE')): ?>
<div class="fl">&nbsp;</div>
<?php endif; ?>
<div class="content-w">
<?php if (defined('KOMO_SHOW_PHONE')): ?>
	<div class="phonepreview unitPng" id="phone">
		<div id="s1" class="phoneimageslide">
			<img src="/images/ss/en.WP8.01.web.png" />
			<img src="/images/ss/en.WP8.02.web.png" style="display:none;" />
			<img src="/images/ss/en.WP8.03.web.png" style="display:none;" />
			<img src="/images/ss/en.WP8.04.web.png" style="display:none;" />
			<img src="/images/ss/en.WP8.05.web.png" style="display:none;" />
			<img src="/images/ss/en.WP8.06.web.png" style="display:none;" />
			<img src="/images/ss/en.WP8.07.web.png" style="display:none;" />
			<img src="/images/ss/en.WP8.08.web.png" style="display:none;" />
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
<?php endif; ?>
	<div class="head">
<?php if (defined('KOMO_PAGETITLE')): ?>
		<div class="pagetitle">
			<?php echo KOMO_PAGETITLE ?>
		</div>
<?php elseif (defined('KOMO_TITLE')): ?>
		<div class="pagetitle">
			<?php echo KOMO_TITLE ?>
		</div>
<?php else: ?>
		<div class="utilitylink">
			<a href="/utility">Download Pairing Utility</a>
		</div>
<?php endif; ?>
	<a href="/"><img src="/images/remote-logo.png" height="73" width="270" /></a>
	</div>
	<div class="content">
