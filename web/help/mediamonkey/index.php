<? set_include_path(get_include_path() . PATH_SEPARATOR . '../../template'); ?>
<? define('KOMO_LONGPAGE', true); ?>
<? define('KOMO_TITLE', 'MediaMonkey Setup Guide'); ?>
<? define('KOMO_PAGETITLE', 'Setup Guide'); ?>
<? require('header.php'); ?>
<script type="text/javascript">
var showIPaddresses = false;
</script>
<div style="overflow:hidden; margin-bottom:15px">
<div class="helplinks hl2">
	<span class="inner">
		<div style="float:right;">
			<span class="app">
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
		 --><span class="app selected">
				<a href="/help/mediamonkey/" class="main">
					<img src="/images/app-mediamonkey.png" class="unitPng" />
					<span>MediaMonkey</span>
				</a>
		</span>
		</div>
		<span class="inst">
			<h2>MediaMonkey Setup Guide</h2>
		</span>
	</span>
</div>
</div>
<div class="instructions">
<div class="step">
<div class="img">
	<img src="/images/instructions/mediamonkey-monkeytunesinstall.png" class="abs win" />
</div>
<h3>1. Download and install <a href="http://melloware.com/products/monkeytunes/" target="_blank">MonkeyTunes</a></h3>
<div class="details">
	<a href="http://melloware.com/products/monkeytunes/" target="_blank">MonkeyTunes</a> is a commercial plugin for MediaMonkey, written by <a href="http://melloware.com/" target="_blank">Melloware</a>.  A fully-functional trial version is available.  <!--This plugin also allows you to use other compatible remote applications (for iOS and Android devices) with MediaMonkey.-->
</div>
<div class="details">
	Remote for WP7 requires MonkeyTunes 1.5.0 or later for full compatibility.
</div>
<div class="details">
	After the MonkeyTunes installation has completed, open MediaMonkey.
</div>
</div>
<div class="step">
<div class="img">
	<img src="/images/instructions/mediamonkey-pairingutil1.png" class="abs win" />
</div>
<h3>2. Download and run the Pairing Utility</h3>
<div class="buttonwrapper bw2">
<a href="/files/Win_iTunesPairingUtility_<?= KOMO_PAIRINGUTILITY_WIN_VERSION ?>.exe" class="win" style="position:absolute;">
	<img src="/images/dl-win.png" width="60" height="64" class="unitPng" />
	<div>
		<h3>Download for Windows</h3>
		<span>Supports Windows XP, Vista, and 7</span>
		<span><?= KOMO_PAIRINGUTILITY_WIN_SIZE ?> &nbsp;&nbsp;&ndash;&nbsp;&nbsp; v<?= KOMO_PAIRINGUTILITY_WIN_VERSION ?></span>
	</div>
</a>
</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/mediamonkey-wp7d1.png" class="abs win" />
</div>
<h3>3. Click "Windows Phone 7 Device" in MediaMonkey</h3>
<div class="details">This will appear under the "MonkeyTunes" header on the left side of the window.</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/mediamonkey-wp7d2.png" class="abs win" />
</div>
<h3>4. Enter the passcode from the Pairing Utility</h3>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/mediamonkey-pairingutil2.png" class="abs win" />
	<img src="/images/instructions/mediamonkey-pairingutil3.png" class="abs win ip" style="display:none;" />
</div>
<h3>5. Confirm that pairing completed successfully</h3>
<div class="details">The Pairing Utility will display your computer's host name and a PIN to be entered on your phone.</div>
</div>

<div class="step">
<div class="img"><img src="/images/instructions/phone-welcome.png" class="abs" /></div>
<h3>6. Open Remote and tap "Add Library"</h3>
<div class="details">
	Remote will appear in the list of applications on your phone.
	<br /><br />
	If you haven't purchased Remote, click here to open it in the Windows Phone Marketplace:
<div align="center" style="margin: 20px 0;"><a href="<?= KOMO_MARKETPLACE_LINK ?>" target="_blank"><img src="/images/wp7_English_300x50_blue.png" /></a></div>
</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/mediamonkey-phonehost.png" class="abs win" />
	<img src="/images/instructions/mediamonkey-phoneip.png" class="abs win ip" style="display:none;" />
</div>
<h3>7. Enter the host and PIN and tap "Save"</h3>
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
<p><strong>If you have any trouble using the pairing utility or connecting your phone, please check the <a href="/troubleshooting">troubleshooting page</a> or <a href="<?= KOMO_CONTACT_LINK ?>">contact us</a> for support.</strong></p>	
<? require('footer.php'); ?>
