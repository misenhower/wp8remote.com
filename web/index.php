<? set_include_path(get_include_path() . PATH_SEPARATOR . 'template'); ?>
<? define('KOMO_SHOW_PHONE', true); ?>
<? define('KOMO_HIDE_BOTTOM_MARKET_LINK', true); ?>
<? require('header.php'); ?>
<h2>Control iTunes From Your Phone</h2>
<p>With Remote, you can control iTunes on your PC or Mac from your Windows Phone. You can browse through your music library and choose playlists, songs, and albums as if you were right in front of your computer &ndash; all from the palm of your hand. Play, pause, control the volume and more.</p>
<h3>Browse your Library</h3>
<p>Remote allows you to see all the artists, albums, songs, and playlists in your library. You can even use your device's keyboard to search for albums, artists, and songs by name. Once you find the media you're looking for, just tap to start playback.</p>
<div align="center" style="margin: 35px 0 0 0;"><a href="<?= KOMO_MARKETPLACE_LINK ?>" target="_blank"><img src="/images/WindowsPhone_208x67_blu.png" /></a></div>
<div class="alignbottom subtle">
	Requires iTunes 10.1 or later and a Wi-fi connection.
	Plugins required for <a href="/help/foobar/">Foobar2000</a> and <a href="/help/mediamonkey/">MediaMonkey</a>.
</div>
<? require('footer.php'); ?>
