<h1 class="section-header">Alerts</h1>
<div class="row">
	<div class="span3">
		<h2>Basic alert</h2>
		<p>Best for quick flash messages or short notes</p>
	</div>
	<div class="span7">
		<div class="alert">
			<a class="close" data-dismiss="alert">×</a>
			<strong>Basic alert</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
		</div>

<pre class="prettyprint linenums">
<? cleanup_code('<div class="alert">
	<a class="close" data-dismiss="alert">×</a>
	<strong>Basic alert</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
</div>') ?>
</pre>
	</div>
</div>

<hr class="white-space">

<div class="row">
	<div class="span3">
		<h2>Block alert</h2>
		<p>Adds padding for comfortable reading of larger blocks of text</p>
	</div>
	<div class="span7">
		<div class="alert">
			<a class="close" data-dismiss="alert">×</a>
			<h4 class="alert-heading">Larger alert</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<ul>
				<li>consectetur adipiscing elit</li>
				<li>consectetur adipiscing elit</li>
				<li>consectetur adipiscing elit</li>
			</ul>
		</div>

<pre class="prettyprint linenums">
<? cleanup_code('<div class="alert">
	<a class="close" data-dismiss="alert">×</a>
	<h4 class="alert-heading">Larger alert</h4>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	<ul>
		<li>consectetur adipiscing elit</li>
		<li>consectetur adipiscing elit</li>
		<li>consectetur adipiscing elit</li>
	</ul>
</div>') ?>
</pre>
	</div>
</div>

<hr class="white-space">

<h2>Contextual alernatives</h2>
<p>Add optional classes to change an alert's connotation</p>

<div class="row">
	<div class="span3">
		<h3>Error or danger</h3>
<pre class="prettyprint">
<? cleanup_code('<div class="alert alert-danger">
	...
</div>') ?>
</pre>
		<div class="alert alert-danger">
			<a class="close" data-dismiss="alert">×</a>
			<strong>Danger!</strong> Lorem ipsum...
		</div>
		
	</div>
	
	<div class="span3">
		<h3>Success</h3>
<pre class="prettyprint">
<? cleanup_code('<div class="alert alert-success">
	...
</div>') ?>
</pre>
		<div class="alert alert-success">
			<a class="close" data-dismiss="alert">×</a>
			<strong>Success!</strong> Lorem ipsum...
		</div>
	</div>
	
	<div class="span3">
		<h3>Information</h3>
<pre class="prettyprint">
<? cleanup_code('<div class="alert alert-info">
	...
</div>') ?>
</pre>
		<div class="alert alert-info">
			<a class="close" data-dismiss="alert">×</a>
			<strong>Fun fact!</strong> Lorem ipsum...
		</div>
	</div>
</div>