<h1 class="section-header">Search</h1>

<hr class="white-space">

<h2>Jumbo search</h2>
<p>Used mostly at the top of aggregate pages</p>
<pre class="prettyprint linenums">
<? cleanup_code('<form method="post" action="/search/" class="search search-jumbo search-green well form-inline">
	<input type="text" class="input-medium" placeholder="Search projects" />
	<button type="submit" class="btn btn-clear"><i class="icon-search"></i></button>
</form>') ?>
</pre>	
<form method="post" action="/search/" class="search search-jumbo search-green well form-inline">
	<input type="text" class="input-medium" placeholder="Search projects" />
	<button type="submit" class="btn btn-clear"><i class="icon-search"></i></button>
</form>

<hr class="thick-rule">
<h2>Mini Search</h2>
<p>Used mostly for header &amp; section searches</p>
<pre class="prettyprint linenums">
<? cleanup_code('<form method="post" action="/search/" class="search search-mini search-gray well form-inline">
	<input type="text" class="input-medium" placeholder="Search projects" />
	<button type="submit" class="btn btn-clear"><i class="icon-search"></i></button>
</form>') ?>
</pre>	
<div class="row">
	<div class="span5">
		<form method="post" action="/search/" class="search search-mini search-gray well form-inline">
			<input type="text" class="input-medium" placeholder="Search projects" />
			<button type="submit" class="btn btn-clear"><i class="icon-search"></i></button>
		</form>
	</div>
</div>

<hr class="thick-rule">

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