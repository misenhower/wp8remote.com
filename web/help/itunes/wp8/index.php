<?php set_include_path(get_include_path() . PATH_SEPARATOR . '../../../template'); ?>
<?php define('KOMO_LONGPAGE', true); ?>
<?php define('KOMO_TITLE', 'iTunes Setup Guide'); ?>
<?php define('KOMO_PAGETITLE', 'Setup Guide'); ?>
<?php require('header.php'); ?>
<?php
$is_mac = !(strpos($_SERVER['HTTP_USER_AGENT'], 'Mac OS X') === false);

if (!$is_mac)
	$mac = 'style="display:none;"';
else
	$mac = '';

?>
<script type="text/javascript">

$(document).ready(function() {
	$('.ituneshelplink').click(function () { return false; });
	
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
		return false;
	});
	
	$('.helplinks a.macselector').click(function() {
		$('.mac').fadeIn();
		$('.helplinks a.winselector').addClass('unsel');
		$('.helplinks a.macselector').removeClass('unsel');
		return false;
	});

	updateWPDevice();
});

var wpDevice_i = -1;
function updateWPDevice()
{
	var timeout = 4000;

	switch (wpDevice_i)
	{
		case 0:
			$('.wpdevice-ss2').fadeIn();
			wpDevice_i = 1;
			//timeout = 2000;
			break;

		case 1:
			$('.wpdevice-ss3').fadeIn();
			wpDevice_i = 2;
			//timeout = 4000;
			break;

		default:
			$('.wpdevice-ss2').hide();
			$('.wpdevice-ss3').fadeOut();
			wpDevice_i = 0;
			//timeout = 2000;
			break;
	}

	setTimeout(updateWPDevice, timeout);
}

</script>
<div style="overflow:hidden; margin-bottom:15px">
<div class="helplinks hl2">
	<div class="inner">
		<div style="float:right;">
			<span class="os">
				<a href="/help/itunes/">WP7</a>
				<a href="/help/itunes/wp8/" class="selected">WP8</a>
			</span><!--
		 --><span class="app selected">
				<a href="#" class="right winselector<?php if ($is_mac) print(' unsel'); ?>"><img src="/images/app-itunes-win.png" class="unitPng" /></a>
				<a href="#" class="right macselector<?php if (!$is_mac) print(' unsel'); ?>"><img src="/images/app-itunes-mac.png" class="unitPng" /></a>
				<a href="/help/itunes/wp8/" class="main ituneshelplink">
					<img src="/images/app-itunes.png" class="unitPng" width="50" height="42" />
					<span>iTunes</span><!--
			 --></a>
			</span><!--
		 --><span class="app">
				<a href="/help/foobar/wp8/" class="main">
					<img src="/images/app-foobar.png" class="unitPng" width="50" height="42" />
					<span>Foobar2000</span>
				</a>
			</span><!--
		 --><span class="app">
				<a href="/help/mediamonkey/wp8/" class="main">
					<img src="/images/app-mediamonkey.png" class="unitPng" width="50" height="42" />
					<span>MediaMonkey</span>
				</a>
			</span>
		</div>
		<div class="inst">
			<h2>iTunes Setup Guide</h2>
		</div>
	</div>
</div>
</div>
<p>
	<strong>These instructions are for the WP8 version of Remote.</strong>
	<a href="/help/itunes/">Click here for WP7 instructions.</a>
</p>
<div class="instructions">
<div class="step">
<div class="img">
	<img src="/images/instructions/itunes-win-wp8-pairingdialog.png" class="abs win" />
	<img src="/images/instructions/itunes-mac-wp8-pairingdialog.png" class="abs mac" <?php echo $mac ?> />
</div>
<h3>1. Open Remote and tap "Add a Library"</h3>
<div class="details">
	Once installed, Remote will appear in the list of applications on your phone.
	<br /><br />
	If you have already paired with another library, open the menu at the bottom of the screen, tap "choose library", and tap the "add" button.
	<br /><br />
	If you haven't purchased or installed Remote, click here to open it in the Windows Phone Marketplace:
	<div align="center" style="margin: 20px 0;"><a href="<?php echo KOMO_MARKETPLACE_LINK ?>" target="_blank"><img src="<?php echo KOMO_WPSTOREBADGE_LARGE ?>" /></a></div>
</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/itunes-win-wpdevice-1.png" class="abs win wpdevice-ss1" />
	<img src="/images/instructions/itunes-win-wpdevice-2.png" class="abs win wpdevice-ss2" style="display:none;" />
	<img src="/images/instructions/itunes-win-wpdevice-3.png" class="abs win wpdevice-ss3" style="display:none;" />
	<div class="abs mac" <?php echo $mac ?>>
		<img src="/images/instructions/itunes-mac-wpdevice-1.png" class="abs wpdevice-ss1" />
		<img src="/images/instructions/itunes-mac-wpdevice-2.png" class="abs wpdevice-ss2" style="display:none;" />
		<img src="/images/instructions/itunes-mac-wpdevice-3.png" class="abs wpdevice-ss3" style="display:none;" />
	</div>
</div>
<h3>2. Find "Windows Phone Device" in iTunes</h3>
<div class="details">"Remote" or "Devices" will appear in the top right corner of the iTunes window.</div>
<div class="details">If the iTunes sidebar is visible, "Windows Phone Device" will appear under the "Devices" header on the left side of the window.</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/itunes-win-wp8-pinentry.png" class="abs win" />
	<img src="/images/instructions/itunes-mac-wp8-pinentry.png" class="abs mac" <?php echo $mac ?> />
</div>
<h3>3. Enter the passcode from Remote</h3>
<div class="details">
	iTunes will display a confirmation message after entering the correct passcode.
	<br /><br />
	Once pairing is complete, Remote will connect to iTunes.
</div>
</div>

</div>
<p><strong>If you have any trouble pairing, please check the <a href="/troubleshooting">troubleshooting page</a> or <a href="<?php echo KOMO_CONTACT_LINK ?>">contact us</a> for support.</strong></p>
<?php require('footer.php'); ?>
