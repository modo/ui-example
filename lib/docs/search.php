<h1 class="section-header">Search</h1>
<div class="row">
	<div class="span5">
		<h2>Jumbo search</h2>
		<p>Used mostly at the top of aggregate pages</p>
<pre class="prettyprint linenums small-text">
<? cleanup_code('<form method="post" action="/search/" class="search jumbo-search well form-inline">
	<input type="text" class="input-medium" placeholder="Search projects" />
	<button type="submit" class="btn btn-clear"><i class="icon-search"></i></button>
</form>') ?>
</pre>	
		<form method="post" action="/search/" class="search jumbo-search well form-inline">
			<input type="text" class="input-medium" placeholder="Search projects" />
			<button type="submit" class="btn btn-clear"><i class="icon-search"></i></button>
		</form>
	</div>
	<div class="span5">
		<h2>Mini Search</h2>
		<p>Used mostly for header &amp; section searches</p>
<pre class="prettyprint linenums small-text">
<? cleanup_code('<form method="post" action="/search/" class="search mini-search well form-inline">
	<input type="text" class="input-medium" placeholder="Search projects" />
	<button type="submit" class="btn btn-clear"><i class="icon-search"></i></button>
</form>') ?>
</pre>	
		<form method="post" action="/search/" class="search mini-search well form-inline">
			<input type="text" class="input-medium" placeholder="Search projects" />
			<button type="submit" class="btn btn-clear"><i class="icon-search"></i></button>
		</form>
	</div>
</div>

<hr class="whitespace">

<h2>Result bar</h2>
<p>A descriptive message letting the user know what the search was able to return.</p>
	
<div class="box search-msg">
	<p class="pull-left"><strong>195,455</strong> results in <strong>All</strong>. Showing <strong>14,964</strong> with profiles.</p>
	<a class="pull-right" href="#"><i class="icon-download"></i> Export results (CSV)</a>
</div>

<pre class="prettyprint linenums small-text">
<? cleanup_code('<div class="box search-msg">
	<p class="pull-left"><strong>195,455</strong> results in <strong>All</strong>. Showing <strong>14,964</strong> with profiles.</p>
	<a class="pull-right" href="#"><i class="icon-download"></i> Export results (CSV)</a>
</div>') ?>
</pre>