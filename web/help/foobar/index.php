<? set_include_path(get_include_path() . PATH_SEPARATOR . '../../template'); ?>
<? define('KOMO_LONGPAGE', true); ?>
<? define('KOMO_TITLE', 'Foobar2000 Setup Guide'); ?>
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
		 --><span class="app selected">
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
			<h2>Foobar2000 Setup Guide</h2>
		</span>
	</span>
</div>
</div>
<div class="instructions">
<div class="step">
<div class="img">
	<img src="/images/instructions/foobar-touchremoteinstall.png" class="abs win" />
</div>
<h3>1. Download and install <a href="http://wintense.com/plugins/foo_touchremote" target="_blank">foo_touchremote</a></h3>
<div class="details"><a href="http://wintense.com/plugins/foo_touchremote" target="_blank">foo_touchremote</a> is a free (donations accepted) plugin for Foobar2000.</div>
<div class="details">Remote for WP7 requires foo_touchremote 0.2.6 or later for full compatibility.</div>
<div class="details">
	After downloading foo_touchremote, select <strong>Library</strong> &rarr; <strong>Configure</strong> from the menu bar and select <strong>Components</strong> from the left side of the Preferences window.  Click the <strong>Install</strong> button and locate the foo_touchremote zip file.
</div>
<div class="details">Click <strong>OK</strong> to close the Preferences window and restart Foobar when prompted.</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/foobar-pairingutil1.png" class="abs win" />
</div>
<h3>2. Download and run the Pairing Utility</h3>
<div class="buttonwrapper bw2" style="overflow:hidden;">
<a href="/files/Win_iTunesPairingUtility_<?= KOMO_PAIRINGUTILITY_WIN_VERSION ?>.exe" class="win">
	<img src="/images/dl-win.png" width="60" height="64" class="unitPng" />
	<div>
		<h3>Download for Windows</h3>
		<span>Supports Windows XP, Vista, 7, and 8</span>
		<span><?= KOMO_PAIRINGUTILITY_WIN_SIZE ?> &nbsp;&nbsp;&ndash;&nbsp;&nbsp; v<?= KOMO_PAIRINGUTILITY_WIN_VERSION ?></span>
	</div>
</a>
</div>
<div class="details">
	&nbsp;
	<h4><a href="#" id="q1a">I receive an error message about Bonjour or the Pairing Utility doesn't open</a></h4>
	<div class="issue" id="q1b" style="position:relative;">
		<div>The Bonjour service is necessary for both foo_touchremote and the Pairing Utility to work correctly. <a href="http://support.apple.com/kb/DL999" target="_blank">Download it here</a> from Apple and try running the Pairing Utility again.</div>
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
	<img src="/images/instructions/foobar-wp7d1.png" class="abs win" />
</div>
<h3>3. Open the Foobar2000 Preferences window</h3>
<div class="details">Select <strong>Library</strong> &rarr; <strong>Configure</strong> from the menu bar.</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/foobar-wp7d2.png" class="abs win" />
</div>
<h3>4. Open the TouchRemote pane and click "Add a new device"</h3>
<div class="details">On the left side of the Preferences window, select <strong>Media Library</strong> &rarr; <strong>TouchRemote DACP Server</strong>.  Click the button that says <strong>Add a new device</strong> to continue.</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/foobar-wp7d3.png" class="abs win" />
</div>
<h3>5. Enter the passcode from the Pairing Utility</h3>
<div class="details">"Windows Phone 7 Device" will appear in the Devices list after entering the correct passcode.</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/foobar-pairingutil2.png" class="abs win" />
	<img src="/images/instructions/foobar-pairingutil3.png" class="abs win ip" style="display:none;" />
</div>
<h3>6. Confirm that pairing completed successfully</h3>
<div class="details">The Pairing Utility will display your computer's host name and a PIN to be entered on your phone.</div>
</div>

<div class="step">
<div class="img"><img src="/images/instructions/phone-welcome.png" class="abs" /></div>
<h3>7. Open Remote and tap "Add Library"</h3>
<div class="details">
	Remote will appear in the list of applications on your phone.
	<br /><br />
	If you haven't purchased Remote, click here to open it in the Windows Phone Marketplace:
<div align="center" style="margin: 20px 0;"><a href="<?= KOMO_MARKETPLACE_LINK ?>" target="_blank"><img src="/images/WindowsPhone_208x67_blu.png" /></a></div>
</div>

</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/foobar-phonehost.png" class="abs win" />
	<img src="/images/instructions/foobar-phoneip.png" class="abs win ip" style="display:none;" />
</div>
<h3>8. Enter the host and PIN and tap "Save"</h3>
<div class="details">The phone will save the library details and connect to iTunes.</div>
<div class="details">
	<h4><a href="#" id="qIPa">I receive a "connection error" message</a></h4>
	<div class="issue" id="qIPb" style="position:relative;">
		On some networks, it may be necessary to use the computer's IP address instead of its host name. Click the <strong>IP</strong> button on the last page of the Pairing Utility to toggle between showing the computer's IP and its host name.
		<br /><br />
		Also try disabling any firewall or other security software you may be running as this may prevent your phone from connecting to Foobar2000.
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
