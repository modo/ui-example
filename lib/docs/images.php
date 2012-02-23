<h1 class="section-header">Image effects</h1>
<div class="row">
	<div class="span6">
		<div class="box">
			<h2>Basic image</h2>
			<p>By default, images are styled with rounded corners, and stretch to fit the width of their container.</p>

<pre class="prettyprint linenums">
<? cleanup_code('<div class="frame-container">
	<div class="frame">
		<img src="image.png" alt="image" />
	</div>
</div>') ?>
</pre>
		</div>
	
	</div>
	<div class="span4">		
		<div class="frame-container">
			<div class="frame">
				<img src="http://cl.ly/2D440z0H0H1J1T212f2r/Image%202012.02.23%202:35:20%20PM.png" alt="" />
			</div>
		</div>
	</div>
</div><!-- row -->


<hr class="thick-rule" />


<div class="row">
	<div class="span10">
		<h2>Image options</h2>
	</div>
</div>
<div class="row">
	<div class="span3">
	
		<h4>Bordered image</h4>
<pre class="prettyprint small-text">
<? cleanup_code('<div class="frame-container">
	<div class="frame bordered">
		<img src="…" alt="…" />
	</div>
</div>') ?>
</pre>
		<div class="frame-container">
			<a class="frame bordered" href="">
				<img src="http://cl.ly/3h1x1P2Q3y151m0Z0V0g/Image%202012.02.20%2010:22:46%20AM.png" alt="" />
			</a>
		</div>
	</div>
	<div class="span3">
		<h4>Outset image</h4>
<pre class="prettyprint small-text">
<? cleanup_code('<div class="frame-container">
	<div class="frame outset">
		<img src="…" alt="…" />
	</div>
</div>') ?>
</pre>
		<div class="frame-container">
			<a class="frame outset" href="">
				<img src="http://cl.ly/3h1x1P2Q3y151m0Z0V0g/Image%202012.02.20%2010:22:46%20AM.png" alt="" />
			</a>
		</div>
	</div>
	<div class="span3">
		<h4>Inset image</h4>
<pre class="prettyprint small-text">
<? cleanup_code('<div class="frame-container">
	<div class="frame inset">
		<img src="…" alt="…" />
	</div>
</div>') ?>
</pre>		
		<div class="frame-container">
			<a class="frame inset" href="">
				<img src="http://cl.ly/3h1x1P2Q3y151m0Z0V0g/Image%202012.02.20%2010:22:46%20AM.png" alt="" />
			</a>
		</div>
	</div>
</div>
