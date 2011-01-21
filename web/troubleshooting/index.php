<? set_include_path(get_include_path() . PATH_SEPARATOR . '../template'); ?>
<? define('KOMO_LONGPAGE', true); ?>
<? define('KOMO_TITLE', 'Troubleshooting'); ?>
<? require('header.php'); ?>
<script>
$(document).ready(function() {
	//$('dd').hide();
	//$('dt').click(function(e) { 
	//	$(this).nextUntil('dt').slideDown();
	//});
});
</script>
<h2>Troubleshooting</h2>
<p>To configure iTunes to allow connections from your phone, please <a href="/utility">download the pairing utility</a>.  If you have any trouble using this utility or connecting your phone, please try the steps below or <a href="<?= KOMO_CONTACT_LINK ?>">contact us</a> for further assistance.</p>
<h3>FAQs</h3>
<h4>Phone Connection Issues</h4>
<dl>
	<dt>I receive a "Connection Error" message</dt>
	<dd>
		<p>First, make sure your phone is connected to your local network via Wi-fi.  Verify that you have entered the host displayed within the Pairing Utility correctly, without any extra spaces or other characters.</p>
		<!-- <p>On some networks, it may be necessary to add ".local" to the end of the host, such as "mycomputer.local".</p> -->
		<p>On some networks, it may be necessary to use the computer's IP address instead of its host name. Click the "IP" button on the last page of the Pairing Utility to toggle between showing the computer's IP and its host name.</p>
		<p>Also please see these support documents from Apple: <a href="http://support.apple.com/kb/HT1947" target="_blank">Initial Setup</a> and <a href="http://support.apple.com/kb/TS1741" target="_blank">Connectivity Issues</a>.</p>
	</dd>
	<dt>I receive an "Invalid PIN" message</dt>
	<dd>Please check the PIN to make sure you have entered it correctly. If you still receive this message, try completing the pairing procedure again by closing and re-opening the pairing utility.</dd>
	<dt>I receive an iTunes version error</dt>
	<dd>Only iTunes versions 10.1 and later are currently supported by this application.  Please update to the latest version of iTunes to fix this issue.</dd>
</dl>
<h4>Pairing Utility</h4>
<dl>
	<dt>The pairing utility will not open</dt>
	<dd>
		<p>On Windows, make sure you have the <a href="http://www.microsoft.com/downloads/en/details.aspx?FamilyID=ab99342f-5d1a-413d-8319-81da479ab0d7" target="_blank">.NET framework version 3.5</a> installed. On OS X, make sure you are running OS X version 10.5.8 or 10.6.5 or later.</p>
		<p>If you receive an error message immediately after launching the application, you may need to check your network settings. Make sure you are connected to a local area network and try disabling any firewall or security software you may be running.</p>
	</dd>
	<dt>"Windows Phone 7 Device" doesn't appear in iTunes</dt>
	<dd>
		<p>Make sure iTunes has been configured to look for remotes.  Open the iTunes Preferences (Edit &rarr; Preferences on Windows, or iTunes &rarr; Preferences on OS X), go to the Devices tab, and make sure the option that says "Look for iPod touch, iPhone and iPad Remotes" is checked.</p>
		<p>If "Windows Phone 7 Device" still doesn't appear within iTunes, try disabling any firewall software that may be running on your machine. On Windows this may include the Windows Firewall which can be disabled from the Control Panel. On OS X this may include the built-in firewall that can be disabled from the Security section in System Preferences.</p>
	</dd>
	<dt>The pairing code isn't accepted, iTunes gets stuck on "verifying pairing code," and other issues</dt>
	<dd>Try closing iTunes and the pairing utility and open them again. If iTunes still doesn't see the pairing utility, you can also try running it from another computer on your network.</dd>
	<dt>Why is the Pairing Utility needed?</dt>
	<dd>Third-party Windows Phone 7 application developers do not currently have access to the network protocols needed to complete the pairing procedure with iTunes.  Once you have paired your phone with iTunes, the Pairing Utility is no longer needed and can be deleted from your computer.</dd>
</dl>
<h4>Application Use</h4>
<dl>
	<dt>How do I change the play position for the current song?</dt>
	<dd>From the Now Playing page, tap and drag the progress bar beneath the displayed album art.</dd>
	<dt>How can I change repeat and shuffle settings?</dt>
	<dd>From the Now Playing page, tap the album art.  Buttons for Repeat and Shuffle will appear.</dd>
	<dt>Artist, album, or song information is incorrect</dt>
	<dd>Please check the song information within iTunes.  Sometimes there is additional or incorrect data in the "album artist" field, which can lead to unexpected results in the artist list.  To fix this, right click the affected song(s) and select "Get Info."</dd>
	<dt>I cannot browse my podcasts, movies, or TV shows</dt>
	<dd>These types of media are not supported in the current version of Remote.  We plan on adding additional media types in the next release of Remote (which will be a free update for anyone who has already purchased the app).</dd>
</dl>
<p><strong>If your question isn't answered here or if you are still having trouble, please <a href="<?= KOMO_CONTACT_LINK ?>">contact us</a> for further support.</strong></p>
<? require('footer.php'); ?>