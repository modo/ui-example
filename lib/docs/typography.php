<h1 class="section-header">Typography</h1>

<div class="row">
	<div class="span4">
		<h1>Header 1</h1>
		<h2>Header 2</h2>
		<h3>Header 3</h3> 
		<h4>Header 4</h4>
		<h5>Header 5</h5> 
		<h6>Header 6</h6>
	</div>
	
	<div class="span6">
		<div class="box">
			<h3>Header tags</h3>
			<p>Header tags are all styled with the primary color in an array of sizes. <strong>Header tags have top-margin as well as lower margin, and the top margin is removed if the header is a</strong> <code>:first-child</code></p>
	
			<pre class="prettyprint linenums">
<? cleanup_code('<h1>Header 1</h1>
<h2>Header 2</h2>
<h3>Header 3</h3> 
<h4>Header 4</h4>
<h5>Header 5</h5> 
<h6>Header 6</h6>') ?></pre>
			
			
			<h4>Psuedo-headers</h4>
			<p>In the case that the desired visual type-size differs from the ideal HTML tag, use the <code>.header-1</code> - <code>.header-6</code> tags. Include them in any other header styling for complete support.</p>
			
<pre class="prettyprint linenums">
<? cleanup_code('<h2 class="header-1">I look like an H1</h2>') ?>
</pre>			
			
			
		</div>
		
	</div>
</div>

<hr class="thick-rule" />

<div class="row">
	<div class="span10">
		<hgroup class="intro">
			<h1>Donec fringilla est vitae urna vulputate laoreet</h1>
			<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fringilla est vitae urna vulputate laoreet</h2>
		</hgroup>
	</div>
	
	<div class="span10">
		<div class="box">
			<p>Specific header tweaks are done as passively as possible. This example styles the header tags like an intro header &amp; kicker based on the fact that they're wrapped with <code>&lt;hgroup class="intro"&gt;</code>
			
<pre class="prettyprint linenums">
<? cleanup_code('<hgroup>
	<h1>Donec fringilla est vitae urna vulputate laoreet</p>
	<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fringilla est vitae urna vulputate laoreet</p>
</hgroup>') ?>
			</pre>
			
		</div>		
	</div>	
</div>


<hr class="thick-rule" />


<h3>Typography modifiers &amp; utilities</h3>
<p>There are a number of classes available for tweaking typography.</p>

<dl class="lined-list">
	<dt><code>.small-text</code></dt>
	<dd> Decreases font size of an element to 85% of the baseFontSize variable</dd>
	<dt><code>.smaller-text</code></dt>
	<dd>Decreases font size of an element to 78.5% of the baseFontSize variable</dd>
	<dt><code>.section-header</code></dt>
	<dd>Adds an underline and extra padding below a header tag, used for creating a dramatic content separation. Can also be put on a div, with a header tag nested in it with floats left or right</dd>
	<dt><code>.muted</code></dt>
	<dd>Colors the containing HTML in a gray color. </dd>
</dl>