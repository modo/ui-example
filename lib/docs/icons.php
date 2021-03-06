<h1 class="section-header">Icons</h1>
<div class="box">
	<p>All icons are created using the <code>&lt;i&gt;</code> tag and displayed through the css <code>:after</code> pseudo-selector, dependent on the class given.</p>
</div>

<hr class="white-space">

<div class="row">
	<div class="span4">
		<h2 class="header-3">Basic markup</h2>
		<p>Any property not set with a variant class will be inherited by it's parent (font-size, color, text-shadow, etc)</p>
<pre class="prettyprint linenums">
<?php cleanup_code('<!-- Default icon -->
<i class="icon-edit"></i>

<!-- Icon with variant -->
<i class="icon-edit icon-white"></i>') ?>
</pre>
	</div>
	
	<div class="span3">
		<h2 class="header-3">Size variants</h2>
		<div class="alert alert-info smaller-text">Sizing for icons placed inside a <code>.btn</code> is handled automatically</div>
		<dl class="lined-list">
			<dt><code>icon-10</code></dt>
			<dd>10px-sized icon</dd>
			
			<dt><code>icon-16</code></dt>
			<dd>16px-sized icon</dd>
			
			<dt><code>icon-24</code></dt>
			<dd>24px-sized icon</dd>
			
			<dt><code>icon-32</code></dt>
			<dd>32px-sized icon</dd>
		</dl>
	</div>
	
	<div class="span3">
		<h2 class="header-3">Color variants</h2>
		<dl class="lined-list">
			<dt><code>icon-white</code></dt>
			<dd>White-colored icon</dd>
			
			<dt><code>icon-lighten</code></dt>
			<dd>White-colored icon at 45% opacity</dd>
			
			<dt><code>icon-gray</code></dt>
			<dd>Gray-colored icon</dd>
			
			<dt><code>icon-darken</code></dt>
			<dd>Black-colored icon at 45% opacity</dd>
			
			<dt><code>icon-black</code></dt>
			<dd>Black-colored icon</dd>
			
			<dt><code>icon-danger</code></dt>
			<dd>Red-colored icon at 45% opacity</dd>
			
			<dt><code>icon-warning</code></dt>
			<dd>Orange-colored icon</dd>
			
			<dt><code>icon-success</code></dt>
			<dd>Green-colored icon at 45% opacity</dd>
			
			<dt><code>icon-primary</code></dt>
			<dd>Link-colored icon</dd>
		</dl>
	</div>
</div>

<hr class="white-space">

<div class="row">
	<div class="span10">
		<div class="row icon-display-list">
	        <div class="span2"><i class="icon-glass"></i> icon-glass</div>
	        <div class="span2"><i class="icon-music"></i> icon-music</div>
	        <div class="span2"><i class="icon-search"></i> icon-search</div>
	        <div class="span2"><i class="icon-envelope"></i> icon-envelope</div>
	        <div class="span2"><i class="icon-heart"></i> icon-heart</div>
	        <div class="span2"><i class="icon-star"></i> icon-star</div>
	        <div class="span2"><i class="icon-star-empty"></i> icon-star-empty</div>
	        <div class="span2"><i class="icon-user"></i> icon-user</div>
	        <div class="span2"><i class="icon-film"></i> icon-film</div>
	        <div class="span2"><i class="icon-th-large"></i> icon-th-large</div>
	        <div class="span2"><i class="icon-th"></i> icon-th</div>
	        <div class="span2"><i class="icon-th-list"></i> icon-th-list</div>
	        <div class="span2"><i class="icon-ok"></i> icon-ok</div>
	        <div class="span2"><i class="icon-remove"></i> icon-remove</div>
	        <div class="span2"><i class="icon-zoom-in"></i> icon-zoom-in</div>
	        <div class="span2"><i class="icon-zoom-out"></i> icon-zoom-out</div>
	        <div class="span2"><i class="icon-off"></i> icon-off</div>
	        <div class="span2"><i class="icon-signal"></i> icon-signal</div>
	        <div class="span2"><i class="icon-cog"></i> icon-cog</div>
	        <div class="span2"><i class="icon-trash"></i> icon-trash</div>
	        <div class="span2"><i class="icon-home"></i> icon-home</div>
	        <div class="span2"><i class="icon-file"></i> icon-file</div>
	        <div class="span2"><i class="icon-time"></i> icon-time</div>
	        <div class="span2"><i class="icon-road"></i> icon-road</div>
	        <div class="span2"><i class="icon-download-alt"></i> icon-download-alt</div>
	        <div class="span2"><i class="icon-download"></i> icon-download</div>
	        <div class="span2"><i class="icon-upload"></i> icon-upload</div>
	        <div class="span2"><i class="icon-inbox"></i> icon-inbox</div>
	        <div class="span2"><i class="icon-play-circle"></i> icon-play-circle</div>
	        <div class="span2"><i class="icon-repeat"></i> icon-repeat</div>
	        <div class="span2"><i class="icon-pencil"></i> icon-pencil</div>
	        <div class="span2"><i class="icon-map-marker"></i> icon-map-marker</div>
	        <div class="span2"><i class="icon-adjust"></i> icon-adjust</div>
	        <div class="span2"><i class="icon-tint"></i> icon-tint</div>
	        <div class="span2"><i class="icon-edit"></i> icon-edit</div>
	        <div class="span2"><i class="icon-share"></i> icon-share</div>
	        <div class="span2"><i class="icon-check"></i> icon-check</div>
	        <div class="span2"><i class="icon-move"></i> icon-move</div>
	        <div class="span2"><i class="icon-step-backward"></i> icon-step-backward</div>
	        <div class="span2"><i class="icon-fast-backward"></i> icon-fast-backward</div>
	        <div class="span2"><i class="icon-backward"></i> icon-backward</div>
	        <div class="span2"><i class="icon-play"></i> icon-play</div>
	        <div class="span2"><i class="icon-pause"></i> icon-pause</div>
	        <div class="span2"><i class="icon-stop"></i> icon-stop</div>
	        <div class="span2"><i class="icon-forward"></i> icon-forward</div>
	        <div class="span2"><i class="icon-fast-forward"></i> icon-fast-forward</div>
	        <div class="span2"><i class="icon-step-forward"></i> icon-step-forward</div>
	        <div class="span2"><i class="icon-eject"></i> icon-eject</div>
	        <div class="span2"><i class="icon-chevron-left"></i> icon-chevron-left</div>
	        <div class="span2"><i class="icon-chevron-right"></i> icon-chevron-right</div>
	        <div class="span2"><i class="icon-plus-sign"></i> icon-plus-sign</div>
	        <div class="span2"><i class="icon-minus-sign"></i> icon-minus-sign</div>
	        <div class="span2"><i class="icon-remove-sign"></i> icon-remove-sign</div>
	        <div class="span2"><i class="icon-ok-sign"></i> icon-ok-sign</div>
	        <div class="span2"><i class="icon-question-sign"></i> icon-question-sign</div>
	        <div class="span2"><i class="icon-info-sign"></i> icon-info-sign</div>
	        <div class="span2"><i class="icon-screenshot"></i> icon-screenshot</div>
	        <div class="span2"><i class="icon-remove-circle"></i> icon-remove-circle</div>
	        <div class="span2"><i class="icon-ok-circle"></i> icon-ok-circle</div>
	        <div class="span2"><i class="icon-ban-circle"></i> icon-ban-circle</div>
            <div class="span2"><i class="icon-arrow-left"></i> icon-arrow-left</div>
            <div class="span2"><i class="icon-arrow-right"></i> icon-arrow-right</div>
            <div class="span2"><i class="icon-arrow-up"></i> icon-arrow-up</div>
            <div class="span2"><i class="icon-arrow-down"></i> icon-arrow-down</div>
            <div class="span2"><i class="icon-share-alt"></i> icon-share-alt</div>
            <div class="span2"><i class="icon-resize-full"></i> icon-resize-full</div>
            <div class="span2"><i class="icon-resize-small"></i> icon-resize-small</div>
            <div class="span2"><i class="icon-plus"></i> icon-plus</div>
            <div class="span2"><i class="icon-minus"></i> icon-minus</div>
            <div class="span2"><i class="icon-asterisk"></i> icon-asterisk</div>
            <div class="span2"><i class="icon-exclamation-sign"></i> icon-exclamation-sign</div>
            <div class="span2"><i class="icon-gift"></i> icon-gift</div>
            <div class="span2"><i class="icon-leaf"></i> icon-leaf</div>
            <div class="span2"><i class="icon-fire"></i> icon-fire</div>
            <div class="span2"><i class="icon-eye-open"></i> icon-eye-open</div>
            <div class="span2"><i class="icon-eye-close"></i> icon-eye-close</div>
            <div class="span2"><i class="icon-warning-sign"></i> icon-warning-sign</div>
            <div class="span2"><i class="icon-plane"></i> icon-plane</div>
            <div class="span2"><i class="icon-calendar"></i> icon-calendar</div>
            <div class="span2"><i class="icon-random"></i> icon-random</div>
            <div class="span2"><i class="icon-comment"></i> icon-comment</div>
            <div class="span2"><i class="icon-magnet"></i> icon-magnet</div>
            <div class="span2"><i class="icon-chevron-up"></i> icon-chevron-up</div>
            <div class="span2"><i class="icon-chevron-down"></i> icon-chevron-down</div>
            <div class="span2"><i class="icon-retweet"></i> icon-retweet</div>
            <div class="span2"><i class="icon-shopping-cart"></i> icon-shopping-cart</div>
            <div class="span2"><i class="icon-folder-close"></i> icon-folder-close</div>
            <div class="span2"><i class="icon-folder-open"></i> icon-folder-open</div>
            <div class="span2"><i class="icon-resize-vertical"></i> icon-resize-vertical</div>
            <div class="span2"><i class="icon-resize-horizontal"></i> icon-resize-horizontal</div>
            <div class="span2"><i class="icon-camera-retro"></i> icon-camera-retro</div>
            <div class="span2"><i class="icon-bar-chart"></i> icon-bar-chart</div>
            <div class="span2"><i class="icon-cogs"></i> icon-cogs</div>
            <div class="span2"><i class="icon-external-link"></i> icon-external-link</div>
            <div class="span2"><i class="icon-pushpin"></i> icon-pushpin</div>
            <div class="span2"><i class="icon-facebook-sign"></i> icon-facebook-sign</div>
            <div class="span2"><i class="icon-twitter-sign"></i> icon-twitter-sign</div>
            <div class="span2"><i class="icon-linkedin-sign"></i> icon-linkedin-sign</div>
            <div class="span2"><i class="icon-github-sign"></i> icon-github-sign</div>
            <div class="span2"><i class="icon-key"></i> icon-key</div>
            <div class="span2"><i class="icon-thumbs-up"></i> icon-thumbs-up</div>
            <div class="span2"><i class="icon-thumbs-down"></i> icon-thumbs-down</div>
            <div class="span2"><i class="icon-comments"></i> icon-comments</div>
            <div class="span2"><i class="icon-trophy"></i> icon-trophy</div>
            <div class="span2"><i class="icon-upload-alt"></i> icon-upload-alt</div>
            <div class="span2"><i class="icon-signin"></i> icon-signin</div>
            <div class="span2"><i class="icon-signout"></i> icon-signout</div>
            <div class="span2"><i class="icon-star-half"></i> icon-star-half</div>
            <div class="span2"><i class="icon-heart-empty"></i> icon-heart-empty</div>
            <div class="span2"><i class="icon-lemon"></i> icon-lemon</div>
		</div>
	</div>
</div>

<hr class="thick-rule">

<h2>Social Icons</h2>
<p>All icons default to 16x16 and are color-only. For a larger (32x32) version of any social icon, add the class <code>.icon&#8209;large</code></p>
<div class="row">
	<div class="span8">
		<pre class="prettyprint linenums">
<?php cleanup_code('<i class="icon-social-facebook"></i>				<!-- Default 16x16 color icon -->
<i class="icon-social-facebook icon-large"></i>	 <!-- 32x32 color icon -->') ?>
		</pre>
	</div>
</div>
<div class="row">
	<div class="span8">
		<div class="row icon-display-list">
			<div class="span2"><i class="icon-social-twitter"></i>icon-social-twitter</div>
			<div class="span2"><i class="icon-social-rss"></i>icon-social-rss</div>
			<div class="span2"><i class="icon-social-paypal"></i>icon-social-paypal</div>
			<div class="span2"><i class="icon-social-linked-in"></i>icon-social-linked-in</div>
			<div class="span2"><i class="icon-social-google-plus"></i>icon-social-google-plus</div>
			<div class="span2"><i class="icon-social-facebook"></i>icon-social-facebook</div>
			<div class="span2"><i class="icon-social-email"></i>icon-social-email</div>
		</div>
	</div>
</div>