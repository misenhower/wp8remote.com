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
	<img src="/images/instructions/itunes-win-pairingutil1.png" class="abs win" />
</div>
<h3>1. Download and run the Pairing Utility</h3>
<div class="details"><a href="#">Click here</a> to download the Pairing Utility.  After downloading, open or run the utility.</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/itunes-win-wp7d1.png" class="abs win" />
</div>
<h3>2. Click "Windows Phone 7 Device" in iTunes</h3>
<div class="details">This will appear under the "Devices" header on the left side of the window.</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/itunes-win-wp7d2.png" class="abs win" />
</div>
<h3>3. Type the PIN from the Pairing Utility into iTunes</h3>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/itunes-win-pairingutil2.png" class="abs win" />
	<img src="/images/instructions/itunes-win-pairingutil3.png" class="abs win ip" style="display:none;" />
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