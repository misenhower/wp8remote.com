<? set_include_path(get_include_path() . PATH_SEPARATOR . '../template'); ?>
<? define('KOMO_LONGPAGE', true); ?>
<? define('KOMO_TITLE', 'News'); ?>
<? require('header.php'); ?>
<h2>Product News &amp; Updates</h2>
<h3>Version 1.2</h3>
<ul>
	<li><strong>Added option to stay connected to iTunes while the phone is locked.</strong></li>
	<li>Added Settings page.</li>
	<li>Minor UI improvements.</li>
</ul>
<hr />
<h3>Version 1.1</h3>
<ul>
	<li><strong>Added AirPlay control support.</strong> Tap the icon next to the volume bar on the Now Playing page to control which speakers iTunes sends music to.</li>
	<li><strong>Added movies, TV shows, and podcasts.</strong></li>
	<li>Fixed issue where the reconnecting screen would appear approx. every 60 seconds.</li>
	<li>Fixed issue where the Now Playing page wouldn't be displayed after picking a song on slower networks.</li>
	<li>Fixed issues with changing the volume and play position on slower networks.</li>
	<li>The Choose Library page now displays the host and PIN for each library for easier identification.</li>
	<li>List and other miscellaneous performance improvements.</li>
	<li>
		<p>Added experimental support for alternate (non-iTunes) DACP servers. Enter a port with the host name (e.g., 192.168.0.100:3690) to connect to a DACP server on an alternate port and disable the iTunes version check.</p>
		<p><em>Note: we do not officially support using Remote with applications other than iTunes 10.1+ at this time.  Please <a href="<?= KOMO_CONTACT_LINK ?>">contact us</a> for more information.</em></p>
	</li>
</ul>
<hr />
<h3>Version 1.0</h3>
<ul>
	<li>Initial release.</li>
</ul>
<? require('footer.php'); ?>
