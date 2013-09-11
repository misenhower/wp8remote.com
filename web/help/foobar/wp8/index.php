<?php set_include_path(get_include_path() . PATH_SEPARATOR . '../../../template'); ?>
<?php define('KOMO_LONGPAGE', true); ?>
<?php define('KOMO_TITLE', 'Foobar2000 Setup Guide'); ?>
<?php define('KOMO_PAGETITLE', 'Setup Guide'); ?>
<?php require('header.php'); ?>
<div style="overflow:hidden; margin-bottom:15px">
<div class="helplinks hl2">
	<div class="inner">
		<div style="float:right;">
			<span class="os">
				<a href="/help/foobar/">WP7</a>
				<a href="/help/foobar/wp8/" class="selected">WP8</a>
			</span><!--
		 --><span class="app">
				<a href="/help/itunes/wp8/" class="main">
					<img src="/images/app-itunes.png" class="unitPng" width="50" height="42" />
					<span>iTunes</span><!--
			 --></a>
			</span><!--
		 --><span class="app selected">
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
			<h2>Foobar2000 Setup Guide</h2>
		</div>
	</div>
</div>
</div>
<p>
	<strong>These instructions are for the WP8 version of Remote.</strong>
	<a href="/help/foobar/">Click here for WP7 instructions.</a>
</p>
<div class="instructions">
<div class="step">
<div class="img">
	<img src="/images/instructions/foobar-touchremote-install.png" class="abs win" />
</div>
<h3>1. Download and install <a href="http://wintense.com/plugins/foo_touchremote" target="_blank">foo_touchremote</a></h3>
<div class="details"><a href="http://wintense.com/plugins/foo_touchremote" target="_blank">foo_touchremote</a> is a free (donations accepted) plugin for Foobar2000.</div>
<div class="details">Remote requires foo_touchremote 0.2.6 or later for full compatibility.</div>
<div class="details">
	After downloading foo_touchremote, select <strong>Library</strong> &rarr; <strong>Configure</strong> from the menu bar and select <strong>Components</strong> from the left side of the Preferences window.  Click the <strong>Install</strong> button and locate the foo_touchremote zip file.
</div>
<div class="details">Click <strong>OK</strong> to close the Preferences window and restart Foobar when prompted.</div>
<div class="details">
	If Foobar is unable to load the foo_touchremote plugin, make sure you have the
	<a href="http://www.microsoft.com/download/en/details.aspx?id=17851">.NET Framework 4</a>
	and
	<a href="http://www.microsoft.com/download/en/details.aspx?id=8328"> Visual C++ Runtime</a>
	installed.
</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/foobar-wp8-pairingdialog.png" class="abs win" />
</div>
<h3>2. Open Remote and tap "Add a Library"</h3>
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
	<img src="/images/instructions/foobar-configuremenu.png" class="abs win" />
</div>
<h3>3. Open the Foobar2000 Preferences window</h3>
<div class="details">Select <strong>Library</strong> &rarr; <strong>Configure</strong> from the menu bar.</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/foobar-touchremote-adddevice.png" class="abs win" />
</div>
<h3>4. Open the TouchRemote pane and click "Add a new device"</h3>
<div class="details">On the left side of the Preferences window, select <strong>Media Library</strong> &rarr; <strong>TouchRemote DACP Server</strong>.  Click the button that says <strong>Add a new device</strong> to continue.</div>
</div>

<div class="step">
<div class="img">
	<img src="/images/instructions/foobar-touchremote-wp8-pin.png" class="abs win" />
</div>
<h3>5. Enter the passcode from Remote</h3>
<div class="details">
	"Windows Phone Device" will appear in the Devices list after entering the correct passcode.
	<br /><br />
	Once pairing is complete, Remote will connect to Foobar2000.
</div>
</div>

</div>
<p><strong>If you have any trouble pairing, please check the <a href="/troubleshooting">troubleshooting page</a> or <a href="<?php echo KOMO_CONTACT_LINK ?>">contact us</a> for support.</strong></p>
<?php require('footer.php'); ?>
