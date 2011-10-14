<? set_include_path(get_include_path() . PATH_SEPARATOR . '../template'); ?>
<? define('KOMO_LONGPAGE', true); ?>
<? define('KOMO_TITLE', 'News'); ?>
<? require('header.php'); ?>
<h2>Product News &amp; Updates</h2>
<h3>Version 1.8</h3>
<ul>
	<li><strong>First version for WP7 Mango</strong> - improved list scrolling performance throughout the application.</li>
	<li>Fixed some issues with the German translation.</li>
	<li>Other minor bug fixes.</li>
</ul>
<hr />
<h3>Version 1.7</h3>
<ul>
	<li><strong>Added German localization/Deutsche Lokalisierung hinzugefügt.</strong></li>
	<li>Other minor bug fixes.</li>
</ul>
<hr />
<h3>Version 1.6</h3>
<ul>
	<li><strong>Added Genius Mixes to the list of playlists.</strong></li>
	<li>Fixed an issue where attempting to play a deleted song would cause Remote to reconnect.</li>
	<li>Fixed the "play" button the genre list.</li>
	<li>Fixed an occasional crash during resume from standby.</li>
	<li>Other minor fixes.</li>
</ul>
<hr />
<h3>Version 1.5</h3>
<ul>
	<li><strong>Added "genres" pivot item to the Browse Library page.</strong></li>
	<li><strong>Added "shuffle all" buttons to album, artist, playlist, and genre pages.</strong></li>
	<li><strong>Added "shuffle all songs" menu item to the Browse Library page.</strong></li>
	<li>Fixed a bug where list items would disappear after navigating back to a page.</li>
	<li>Added optional "extended error reporting" setting for more verbose error logging/reporting.  Please <a href="<?= KOMO_CONTACT_LINK ?>">contact us</a> if you are having trouble with Remote so we can continue to improve the application.</li>
</ul>
<hr />
<h3>Version 1.4</h3>
<ul>
	<li><strong>Added the ability to view and modify the star rating for the currently playing song</strong></li>
	<li>Bug fixes/performance improvements.</li>
</ul>
<hr />
<h3>Version 1.3</h3>
<ul>
	<li>
		<p>
			<strong>Added support for Foobar2000 and MediaMonkey.</strong>
			Requires <a href="http://wintense.com/plugins/foo_touchremote" target="_blank">foo_touchremote</a> for Foobar2000
			or <a href="http://melloware.com/products/monkeytunes/" target="_blank">MonkeyTunes</a> for MediaMonkey.
		</p>
	</li>
	<li>Fixed crash with empty artist names.</li>
	<li>Misc. bug fixes.</li>
</ul>
<hr />
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
