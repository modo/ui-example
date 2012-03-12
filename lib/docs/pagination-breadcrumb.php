<h1 class="section-header">Pagination and Breadcrumbs</h1>
<h2>Pagination</h2>
<div class="alert alert-info small-text">Disabled class <code>.disabled</code> is optional. To float the nav left or right, add class <code>.pull&#8209;left</code> or <code>.pull&#8209;right</code> to <code>.pagination</code></div>
<div class="row">
	<div class="span7">
<pre class="prettyprint linenums small-text">
<? cleanup_code('<div class="pagination">
	<ul>
		<li class="disabled"><a href="#"><i class="icon-step-backward"></i></a></li>
		<li class="disabled"><a href="#"><i class="icon-chevron-left"></i></a></li>
		<li class="active"><input type="text" class="input-mini" value="1"> of 1</li>
		<li><a href="#"><i class="icon-chevron-right"></i></a></li>
		<li><a href="#"><i class="icon-step-forward"></i></a></li>
	</ul>
</div>') ?>
</pre>	
	</div>
	
	<div class="span3">
		<div class="pagination">
			<ul>
				<li class="disabled"><a href="#"><i class="icon-step-backward"></i></a></li>
				<li class="disabled"><a href="#"><i class="icon-chevron-left"></i></a></li>
				<li class="active"><input type="text" class="input-mini" value="1"> of 1</li>
				<li><a href="#"><i class="icon-chevron-right"></i></a></li>
				<li><a href="#"><i class="icon-step-forward"></i></a></li>
			</ul>
		</div>
	</div>
</div>

<hr class="white-space">

<h3>Pager</h3>
<div class="row">
	<div class="span5">
		<div class="box">
			<h4>Default</h4>
			<p>By default, the pager centers links.</p>
			<ul class="pager">
				<li><a href="#">Previous</a></li>
				<li><a href="#">Next</a></li>
			</ul>
<pre class="prettyprint linenums small-text">
<? cleanup_code('<ul class="pager">
	<li><a href="#">Previous</a></li>
	<li><a href="#">Next</a></li>
</ul>') ?>
</pre>
		</div>
	</div>
	
	<div class="span5">
		<div class="box">
			<h4>Aligned links</h4>
			<p>Alternatively, you can align each link to the sides:</p>
			<ul class="pager">
				<li class="previous"><a href="#">Previous</a></li>
				<li class="next"><a href="#">Next</a></li>
			</ul>
<pre class="prettyprint linenums small-text">
<? cleanup_code('<ul class="pager">
	<li class="previous"><a href="#">Previous</a></li>
	<li class="next"><a href="#">Next</a></li>
</ul>') ?>
</pre>
		</div>
	</div>
</div>

<hr class="thick-rule">

<h2>Breadcrumbs</h2>
<div class="row">
	<div class="span5">
		<p>Breadcrumb navigation is used as a way to show users where they are within an app or a site, but not for primary navigation. Keep their use sparse and succinct to be most effective.</p>
		<ul class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Library</a></li>
			<li class="active"><a href="#">Data</a></li>
		</ul>
	</div>
	<div class="span5">
<pre class="prettyprint linenums small-text">
<? cleanup_code('<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li><a href="#">Library</a></li>
	<li class="active"><a href="#">Data</a></li>
</ul>') ?>
</pre>
	</div>
</div>