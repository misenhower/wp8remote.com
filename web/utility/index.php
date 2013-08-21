<?php set_include_path(get_include_path() . PATH_SEPARATOR . '../template'); ?>
<?php define('KOMO_TITLE', 'Pairing Utility'); ?>
<?php require('header.php'); ?>
<h2>Download Pairing Utility</h2>
<p>
	This utility configures iTunes to allow connections from your phone.
	Once you have paired your phone with iTunes, the Pairing Utility is no longer needed and can be deleted from your computer.
</p>
<p>
	Your phone must be connected to your local network via Wi-fi to control iTunes.
</p>
<div class="buttonwrapper bw1" style="margin:25px 0 20px;">
	<a href="/files/Win_iTunesPairingUtility_<?php echo KOMO_PAIRINGUTILITY_WIN_VERSION ?>.exe">
		<img src="/images/dl-win.png" width="60" height="64" class="unitPng" />
		<div>
			<h3>Download for Windows</h3>
			<span><?php echo KOMO_PAIRINGUTILITY_WIN_SUPPORTS ?></span>
			<span><?php echo KOMO_PAIRINGUTILITY_WIN_SIZE ?> &nbsp;&nbsp;&ndash;&nbsp;&nbsp; v<?php echo KOMO_PAIRINGUTILITY_WIN_VERSION ?></span>
		</div>
	</a>
	<a href="/files/Mac_iTunesPairingUtility_<?php echo KOMO_PAIRINGUTILITY_MAC_VERSION ?>.zip">
		<img src="/images/dl-mac.png" width="60" height="64" class="unitPng" />
		<div>
			<h3>Download for Mac OS X</h3>
			<span><?php echo KOMO_PAIRINGUTILITY_MAC_SUPPORTS ?></span>
			<span><?php echo KOMO_PAIRINGUTILITY_MAC_SIZE ?> &nbsp;&nbsp;&ndash;&nbsp;&nbsp; v<?php echo KOMO_PAIRINGUTILITY_MAC_VERSION ?></span>
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
	</span>
</div>
<p><strong>If you have any trouble using the pairing utility or connecting your phone to iTunes, please <a href="<?php echo KOMO_CONTACT_LINK ?>">contact us</a> for assistance.</strong></p>
<?php require('footer.php'); ?>