<? set_include_path(get_include_path() . PATH_SEPARATOR . 'template'); ?>
<? define('KOMO_TITLE', 'Pairing Utility'); ?>
<? require('header.php'); ?>
<h2>Download Pairing Utility</h2>
<p>This utility is used to configure iTunes to allow connections from your phone.  No installation is necessary and you can delete the utility after completing the pairing procedure.</p>
<p>Please note it is necessary for your phone to be connected to your local network via Wi-fi for this application to connect.</p>
<h3>Troubleshooting and Support</h3>
<p>If you have any trouble using the pairing utility, please <a href="<?= KOMO_CONTACT_LINK ?>">contact us</a> for support.
<div class="buttonwrapper">
	<a href="/files/Win_iTunesPairingUtility.exe">
		<img src="/images/dl-win.png" width="60" height="64" />
		<div>
			<h3>Download for Windows</h3>
			<span>Supports Windows XP, Vista, and 7</span>
			<span>512kb &nbsp;&nbsp;&ndash;&nbsp;&nbsp; v1.0.0</span>
		</div>
	</a>
	<a href="/files/Mac_iTunesPairingUtility.zip">
		<img src="/images/dl-mac.png" width="60" height="64" />
		<div>
			<h3>Download for Mac OS X</h3>
			<span>Supports OS X 10.5.8+ and 10.6.5+</span>
			<span>512kb &nbsp;&nbsp;&ndash;&nbsp;&nbsp; v1.0.0</span>
		</div>
	</a>
</div>
<? require('footer.php'); ?>