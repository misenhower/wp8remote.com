<? set_include_path(get_include_path() . PATH_SEPARATOR . '../../template'); ?>
<? define('KOMO_LONGPAGE', true); ?>
<? define('KOMO_TITLE', 'iTunes Instructions'); ?>
<? require('header.php'); ?>
<?
$is_mac = !(strpos($_SERVER['HTTP_USER_AGENT'], 'Mac OS X') === false);

if (!$is_mac)
	$mac = 'style="display:none;"';
else
	$mac = '';

?>
<script type="text/javascript">
$(document).ready(function() {
	$('.helplinks a.winselector, .helplinks a.macselector').hover(
		function() {
			$('.helplinks .selected').addClass('fakehover');
		},
		function () {
			$('.helplinks .selected').removeClass('fakehover');
		}
	);
	
	$('.helplinks a.winselector').click(function() {
		$('.mac').fadeOut();
		$('.helplinks a.winselector').removeClass('unsel');
		$('.helplinks a.macselector').addClass('unsel');
	});
	
	$('.helplinks a.macselector').click(function() {
		$('.mac').fadeIn();
		$('.helplinks a.winselector').addClass('unsel');
		$('.helplinks a.macselector').removeClass('unsel');
	});
});
</script>
<div style="overflow:hidden; margin-bottom:15px">
<div class="helplinks hl2">
	<span class="inner">
		<span class="app selected">
			<a href="#" class="right winselector<? if ($is_mac) print(' unsel'); ?>"><img src="/images/app-itunes-win.png" class="unitPng" /></a>
			<a href="#" class="right macselector<? if (!$is_mac) print(' unsel'); ?>"><img src="/images/app-itunes-mac.png" class="unitPng" /></a>
			<a href="#" class="main">
				<img src="/images/app-itunes.png" class="unitPng" />
				<span>iTunes</span><!--
		 --></a>
		</span><!--
	 --><span class="app">
			<a href="#" class="main">
				<img src="/images/app-foobar.png" class="unitPng" />
				<span>Foobar2000</span>
			</a>
		</span><!--
	 --><span class="app">
			<a href="#" class="main">
				<img src="/images/app-mediamonkey.png" class="unitPng" />
				<span>MediaMonkey</span>
			</a>
		</span>
	</span>
</div>
<h2>iTunes</h2>
</div>
<div class="instructions">
<div class="step">
<div class="img">
	<img src="/images/instructions/itunes-win-pairingutil1.png" class="abs win" />
	<img src="/images/instructions/itunes-mac-pairingutil1.png" class="abs mac" <?= $mac ?> />
</div>
<h3>1. Download and run the Pairing Utility</h3>
<div class="details"><a href="#">Click here</a> to download the Pairing Utility.  After downloading, open or run the utility.</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/itunes-win-wp7d1.png" class="abs win" />
	<img src="/images/instructions/itunes-mac-wp7d1.png" class="abs mac" <?= $mac ?> />
</div>
<h3>2. Click "Windows Phone 7 Device" in iTunes</h3>
<div class="details">This should appear under the "DEVICES" header on the left side of the window.</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/itunes-win-wp7d2.png" class="abs win" />
	<img src="/images/instructions/itunes-mac-wp7d2.png" class="abs mac" <?= $mac ?> />
</div>
<h3>3. Type the PIN from the Pairing Utility into iTunes</h3>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/itunes-win-pairingutil2.png" class="abs win" />
	<img src="/images/instructions/itunes-win-pairingutil3.png" class="abs win ip" style="display:none;" />
	<div class="abs mac" <?= $mac ?>>
		<img src="/images/instructions/itunes-mac-pairingutil2.png" />
		<img src="/images/instructions/itunes-mac-pairingutil3.png" class="ip" style="display:none;" />
	</div>
</div>
<h3>4. Confirm that pairing completed successfully</h3>
</div>

<div class="step">
<div class="img"><img src="/images/instructions/phone-welcome.png" class="abs unitPng" /></div>
<h3>5. Open Remote on your phone and tap "Add Library"</h3>
<div class="details">Remote should appear in the list of applications on your phone.  If you haven't purchased Remote yet, you can use the following link to open its Marketplace page:</div>
</div>

<div class="step">
<div class="img"><img src="/images/instructions/TEMP.png" class="abs" /</div>
<!-- <h3>6. Enter the host and PIN from the Pairing Utility and tap the "Save" icon</h3> -->
<h3>6. Enter the host and PIN and tap "Save"</h3>
</div>

<!-- <h4>It didn't work</h4> -->
</div>
<? require('footer.php'); ?>
