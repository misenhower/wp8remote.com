<?php set_include_path(get_include_path() . PATH_SEPARATOR . '../../template'); ?>
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
			<div class="app selected">
				<a href="#" class="right winselector<?php if ($is_mac) print(' unsel'); ?>"><img src="/images/app-itunes-win.png" class="unitPng" /></a>
				<a href="#" class="right macselector<?php if (!$is_mac) print(' unsel'); ?>"><img src="/images/app-itunes-mac.png" class="unitPng" /></a>
				<a href="/help/itunes/" class="main ituneshelplink">
					<img src="/images/app-itunes.png" class="unitPng" width="50" height="42" />
					<span>iTunes</span><!--
			 --></a>
			</div><!--
		 --><div class="app">
				<a href="/help/foobar/" class="main">
					<img src="/images/app-foobar.png" class="unitPng" width="50" height="42" />
					<span>Foobar2000</span>
				</a>
			</div><!--
		 --><div class="app">
				<a href="/help/mediamonkey/" class="main">
					<img src="/images/app-mediamonkey.png" class="unitPng" width="50" height="42" />
					<span>MediaMonkey</span>
				</a>
			</div>
		</div>
		<div class="inst">
			<h2>iTunes Setup Guide</h2>
		</div>
	</div>
</div>
</div>
<p>
	<strong>These instructions are for the WP7 version of Remote.</strong>
	If you have a WP8 device, it is not necessary to download the Pairing Utility when using Remote 2.0.
	Please <a href="<?php echo KOMO_CONTACT_LINK ?>">contact us</a> if you have any questions.
</p>
<div class="instructions">
<div class="step">
<div class="img">
	<img src="/images/instructions/itunes-win-pairingutility-1.png" class="abs win" />
	<img src="/images/instructions/itunes-mac-pairingutility-1.png" class="abs mac" <?php echo $mac ?> />
</div>
<h3>1. Download and run the Pairing Utility</h3>
<div class="buttonwrapper bw2">
<a href="/files/Win_iTunesPairingUtility_<?php echo KOMO_PAIRINGUTILITY_WIN_VERSION ?>.exe" class="win" style="position:absolute;">
	<img src="/images/dl-win.png" width="60" height="64" class="unitPng" />
	<div>
		<h3>Download for Windows</h3>
		<span><?php echo KOMO_PAIRINGUTILITY_WIN_SUPPORTS ?></span>
		<span><?php echo KOMO_PAIRINGUTILITY_WIN_SIZE ?> &nbsp;&nbsp;&ndash;&nbsp;&nbsp; v<?php echo KOMO_PAIRINGUTILITY_WIN_VERSION ?></span>
	</div>
</a>
<a href="/files/Mac_iTunesPairingUtility_<?php echo KOMO_PAIRINGUTILITY_MAC_VERSION ?>.zip" class="mac" style="position:absolute;<?php if (!$is_mac) print 'display:none;'; ?>">
	<img src="/images/dl-mac.png" width="60" height="64" class="unitPng" />
	<div>
		<h3>Download for Mac OS X</h3>
		<span><?php echo KOMO_PAIRINGUTILITY_MAC_SUPPORTS ?></span>
		<span><?php echo KOMO_PAIRINGUTILITY_MAC_SIZE ?> &nbsp;&nbsp;&ndash;&nbsp;&nbsp; v<?php echo KOMO_PAIRINGUTILITY_MAC_VERSION ?></span>
	</div>
</a>
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
	<img src="/images/instructions/itunes-win-wp7-pinentry1.png" class="abs win" />
	<img src="/images/instructions/itunes-mac-wp7-pinentry1.png" class="abs mac" <?php echo $mac ?> />
</div>
<h3>3. Enter the passcode from the Pairing Utility</h3>
<div class="details">iTunes will display a confirmation message after entering the correct passcode.</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/itunes-win-pairingutility-2.png" class="abs win" />
	<img src="/images/instructions/itunes-mac-pairingutility-2.png" class="abs mac" <?php echo $mac ?> />
</div>
<h3>4. Confirm that pairing completed successfully</h3>
<div class="details">The Pairing Utility will display your library's name and a PIN to be entered on your phone.</div>
</div>

<div class="step">
<div class="img"><img src="/images/instructions/remote-firstrun.png" class="abs" /></div>
<h3>5. Open Remote and tap "Add a Library"</h3>
<div class="details">
	Once installed, Remote will appear in the list of applications on your phone.
	<br /><br />
	If you haven't purchased or installed Remote, click here to open it in the Windows Phone Marketplace:
<div align="center" style="margin: 20px 0;"><a href="<?php echo KOMO_MARKETPLACE_LINK ?>" target="_blank"><img src="<?php echo KOMO_WPSTOREBADGE_LARGE ?>" /></a></div>
</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/itunes-win-wp7-pinentry2.png" class="abs win" />
	<img src="/images/instructions/itunes-mac-wp7-pinentry2.png" class="abs mac" <?php echo $mac ?> />
</div>
<h3>6. Enter the PIN and tap "Connect"</h3>
<div class="details">The phone will save the library details and connect to iTunes.</div>
</div>
</div>
<p><strong>If you have any trouble using the pairing utility or connecting your phone, please check the <a href="/troubleshooting">troubleshooting page</a> or <a href="<?php echo KOMO_CONTACT_LINK ?>">contact us</a> for support.</strong></p>
<?php require('footer.php'); ?>
