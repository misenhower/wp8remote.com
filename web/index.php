<? set_include_path(get_include_path() . PATH_SEPARATOR . 'template'); ?>
<? define('KOMO_SHOW_PHONE', true); ?>
<? define('KOMO_HIDE_BOTTOM_MARKET_LINK', true); ?>
<? require('header.php'); ?>
<h2>Control iTunes From Your Phone</h2>
<p>With Remote, you can control iTunes from your Windows Phone 7 device. You can browse through your iTunes music library and choose playlists, songs, and albums as if you were right in front of your computer &ndash; all from the palm of your hand. Play, pause, control the volume and more.</p>
<!-- <p>With Remote, you can browse through your iTunes music library and choose playlists, songs, and albums from your Windows Phone 7 device as if you were right in front of your computer. Play, pause, control the volume and more &ndash; all from the palm of your hand.</p> -->
<h3>Browse your Library</h3>
<p>With Remote, you can see all the artists, albums, songs, and playlists in your iTunes library. Use your device's keyboard to search for albums, artists, and songs by name. Once you find the media you're looking for, just tap on it to immediately start playback.</p>
<div align="center" style="margin: 40px 0;"><a href="<?= KOMO_MARKETPLACE_LINK ?>"><img src="/images/wp7_English_320x50_blue.png" /></a></div>
<!-- <div class="subtle">
	<h4>Requirements</h4>
	<ul>
		<li>iTunes 10.1 or later</li>
		<li>Wi-Fi connection</li>
	</ul>
</div> -->
<div class="alignbottom subtle">Requires iTunes 10.1 or later and a Wi-fi connection</div>
<? require('footer.php'); ?>
