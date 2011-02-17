<? set_include_path(get_include_path() . PATH_SEPARATOR . '../../template'); ?>
<? define('KOMO_LONGPAGE', true); ?>
<? define('KOMO_TITLE', 'iTunes Setup Guide'); ?>
<? define('KOMO_PAGETITLE', 'Setup Guide'); ?>
<? require('header.php'); ?>
<?
$is_mac = !(strpos($_SERVER['HTTP_USER_AGENT'], 'Mac OS X') === false);

if (!$is_mac)
	$mac = 'style="display:none;"';
else
	$mac = '';

?>
<script type="text/javascript">
var showIPaddresses = false;

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
		if (showIPaddresses)
			$('.ip').show();
		else
			$('.ip').hide();
		$('.helplinks a.winselector').removeClass('unsel');
		$('.helplinks a.macselector').addClass('unsel');
		return false;
	});
	
	$('.helplinks a.macselector').click(function() {
		$('.mac').fadeIn();
		if (showIPaddresses)
			$('.ip').show();
		else
			$('.ip').hide();
		$('.helplinks a.winselector').addClass('unsel');
		$('.helplinks a.macselector').removeClass('unsel');
		return false;
	});
});
</script>
<div style="overflow:hidden; margin-bottom:15px">
<div class="helplinks hl2">
	<span class="inner">
		<div style="float:right;">
			<span class="app selected">
				<a href="#" class="right winselector<? if ($is_mac) print(' unsel'); ?>"><img src="/images/app-itunes-win.png" class="unitPng" /></a>
				<a href="#" class="right macselector<? if (!$is_mac) print(' unsel'); ?>"><img src="/images/app-itunes-mac.png" class="unitPng" /></a>
				<a href="/help/itunes/" class="main">
					<img src="/images/app-itunes.png" class="unitPng" />
					<span>iTunes</span><!--
			 --></a>
			</span><!--
		 --><span class="app">
				<a href="/help/foobar/" class="main">
					<img src="/images/app-foobar.png" class="unitPng" />
					<span>Foobar2000</span>
				</a>
			</span><!--
		 --><span class="app">
				<a href="/help/mediamonkey/" class="main">
					<img src="/images/app-mediamonkey.png" class="unitPng" />
					<span>MediaMonkey</span>
				</a>
		</span>
		</div>
		<span class="inst">
			<h2>iTunes Setup Guide</h2>
		</span>
	</span>
</div>
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
<div class="details">This will appear under the "Devices" header on the left side of the window.</div>
<div class="details">
	<h4><a href="#" id="q1a">I don't see "Windows Phone 7 Device" in the sidebar</a></h4>
	<div class="issue" id="q1b" style="position:relative;">
		<div class="mac" style="position:absolute; background-color:#131417;">Open the iTunes Preferences window (<strong>iTunes</strong> &rarr; <strong>Preferences</strong> from the menu bar),  go to the <strong>Devices</strong> tab, and make sure the option that says <strong>Look for iPod touch, iPhone and iPad Remotes</strong> is checked.</div>
		<div>Open the iTunes Preferences window (<strong>Edit</strong> &rarr; <strong>Preferences</strong> at the top of the iTunes window),  go to the <strong>Devices</strong> tab, and make sure the option that says <strong>Look for iPod touch, iPhone and iPad Remotes</strong> is checked.</div>
	</div>
	<script type="text/javascript">
		$('#q1b').hide();
		$('#q1a').click(function () {
			$('#q1b').slideToggle();
			return false;
		});
	</script>
</div>
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
		<img src="/images/instructions/itunes-mac-pairingutil2.png" class="abs" />
		<img src="/images/instructions/itunes-mac-pairingutil3.png" class="abs ip" style="display:none;" />
	</div>
</div>
<h3>4. Confirm that pairing completed successfully</h3>
</div>

<div class="step">
<div class="img"><img src="/images/instructions/phone-welcome.png" class="abs" /></div>
<h3>5. Open Remote on your phone and tap "Add Library"</h3>
<div class="details">Remote should appear in the list of applications on your phone.  If you haven't purchased Remote yet, you can use the following link to open its Marketplace page:</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/itunes-win-phonehost.png" class="abs win" />
	<img src="/images/instructions/itunes-win-phoneip.png" class="abs win ip" style="display:none;" />
	<div class="abs mac" <?= $mac ?>>
		<img src="/images/instructions/itunes-mac-phonehost.png" class="abs" />
		<img src="/images/instructions/itunes-mac-phoneip.png" class="abs ip" style="display:none;" />
	</div>
</div>
<h3>6. Enter the host and PIN and tap "Save"</h3>
<div class="details">The phone will save the library details and connect to iTunes.</div>
<div class="details">
	<h4><a href="#" id="qIPa">I receive a "connection error" message</a></h4>
	<div class="issue" id="qIPb" style="position:relative;">
		On some networks, it may be necessary to use the computer's IP address instead of its host name. Click the <strong>IP</strong> button on the last page of the Pairing Utility to toggle between showing the computer's IP and its host name.
		<br /><br />
		Also try disabling any firewall or other security software you may be running as this may prevent your phone from connecting to iTunes.
	</div>
	<script type="text/javascript">
		$('#qIPb').hide();
		$('#qIPa').click(function () {
			if (showIPaddresses) {
				showIPaddresses = false;
				$('#qIPb').slideUp();
				$('.ip').fadeOut();
			}
			else {
				showIPaddresses = true;
				$('#qIPb').slideDown();
				$('.ip').fadeIn();
			}
			return false;
		});
	</script>
</div>
</div>
</div>
<? require('footer.php'); ?>