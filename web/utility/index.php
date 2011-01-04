<? set_include_path(get_include_path() . PATH_SEPARATOR . '../template'); ?>
<? define('KOMO_TITLE', 'Pairing Utility'); ?>
<? require('header.php'); ?>
<h2>Download Pairing Utility</h2>
<p>This utility configures iTunes to allow connections from your phone.  No installation is necessary, just run the utility and follow the displayed instructions.</p>
<p>Your phone must be connected to your local network via Wi-fi to control iTunes.</p>
<h3>Troubleshooting and Support</h3>
<p>If you have any trouble using the pairing utility or connecting your phone, please check the <a href="/troubleshooting">troubleshooting page</a> or <a href="<?= KOMO_CONTACT_LINK ?>">contact us</a> for support.
<div class="buttonwrapper">
	<a href="/files/Win_iTunesPairingUtility_1.0.3.exe">
		<img src="/images/dl-win.png" width="60" height="64" class="unitPng" />
		<div>
			<h3>Download for Windows</h3>
			<span>Supports Windows XP, Vista, and 7</span>
			<span>312kb &nbsp;&nbsp;&ndash;&nbsp;&nbsp; v1.0.3</span>
		</div>
	</a>
	<a href="/files/Mac_iTunesPairingUtility_1.0.2.zip">
		<img src="/images/dl-mac.png" width="60" height="64" class="unitPng" />
		<div>
			<h3>Download for Mac OS X</h3>
			<span>Supports OS X 10.5.8+ and 10.6.5+</span>
			<span>332kb &nbsp;&nbsp;&ndash;&nbsp;&nbsp; v1.0.2</span>
		</div>
	</a>
</div>
<p><strong>If you have any trouble using the pairing utility or connecting your phone to iTunes, please <a href="<?= KOMO_CONTACT_LINK ?>">contact us</a> for assistance.</strong></p>
<? require('footer.php'); ?>