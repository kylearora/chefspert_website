<h3>JPlayer</h3>

<p>
  More detailed documentation is available <a href="http://jplayer.org/latest/developer-guide">here</a>.
</p>

<h6>To add a new video / audio to your player, you need to find the <b>ul</b> item with <b>jp-type-playlist</b> class and add one more <b>li</b> item, and replace following attributes:</h6>

<p>In case this is a video player</p>
<pre><code>data-jp-m4v="" - Path to video file
data-jp-title="" - Video title
data-jp-poster="" - Path to a poster
</code></pre>


<p>In case this is a audio player</p>

<pre><code>data-jp-title="" - Audio title
data-jp-artist="" - Author's name
data-jp-mp3="" - Path to video file
</code></pre>