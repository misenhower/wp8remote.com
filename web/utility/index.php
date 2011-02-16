<? set_include_path(get_include_path() . PATH_SEPARATOR . '../template'); ?>
<? define('KOMO_TITLE', 'Pairing Utility'); ?>
<? require('header.php'); ?>
<h2>Download Pairing Utility</h2>
<p>This utility configures iTunes to allow connections from your phone.  No installation is necessary, just run the utility and follow the displayed instructions.  Once you have paired your phone with iTunes, the Pairing Utility is no longer needed and can be deleted from your computer.</p>
<!--
<h3>Troubleshooting and Support</h3>
<p>If you have any trouble using the pairing utility or connecting your phone, please check the <a href="/troubleshooting">troubleshooting page</a> or <a href="<?= KOMO_CONTACT_LINK ?>">contact us</a> for support.</p>
<p>Your phone must be connected to your local network via Wi-fi to control iTunes.</p>
-->
<div class="buttonwrapper">
	<a href="/files/Win_iTunesPairingUtility_1.0.6.exe">
		<img src="/images/dl-win.png" width="60" height="64" class="unitPng" />
		<div>
			<h3>Download for Windows</h3>
			<span>Supports Windows XP, Vista, and 7</span>
			<span>312kb &nbsp;&nbsp;&ndash;&nbsp;&nbsp; v1.0.6</span>
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
<div class="helplinks hl1">
	<span class="inner">
		<span class="inst">
			<h3>Setup Guide</h3>
			<span>Select an application:</span>
		</span><!--
	 --><span class="app">
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
<p><strong>If you have any trouble using the pairing utility or connecting your phone to iTunes, please <a href="<?= KOMO_CONTACT_LINK ?>">contact us</a> for assistance.</strong></p>
<? require('footer.php'); ?>