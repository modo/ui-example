<h1 class="section-header">Buttons</h1>
<table class="table table-bordered table-striped">
	<tr>
		<td><a class="btn" href="">Button</a></td>
		<td><code>.btn</code></td>
		<td>Default button coloring</td>
	</tr>
	<tr>
		<td><a class="btn btn-primary" href="">Button</a></td>
		<td><code>.btn-primary</code></td>
		<td>Primary action to be taken, also used to just make button stand out</td>
	</tr>
	<tr>
		<td><a class="btn btn-info" href="">Button</a></td>
		<td><code>.btn-info</code></td>
		<td>Used as an alternate to the default styles</td>
	</tr>
	<tr>
		<td><a class="btn btn-dark" href="">Button</a></td>
		<td><code>.btn-dark</code></td>
		<td>Alternate dark button</td>
	</tr>
	<tr>
		<td><a class="btn btn-success" href="">Button</a></td>
		<td><code>.btn-success</code></td>
		<td>Indicates a successful or positive action</td>
	</tr>
	<tr>
		<td><a class="btn btn-warning" href="">Button</a></td>
		<td><code>.btn-warning</code></td>
		<td>Indicates caution should be taken with this action</td>
	</tr>
	<tr>
		<td><a class="btn btn-danger" href="">Button</a></td>
		<td><code>.btn-danger</code></td>
		<td>Indicates a dangerous or potentially negative action</td>
	</tr>
	<tr>
		<td><a class="btn btn-clear" href="">Button</a></td>
		<td><code>.btn-clear</code></td>
		<td>Button-sized link that has no background</td>
	</tr>
</table>

<hr class="white-space">

<div class="row">
	<div class="span5">
		<h2 class="header-3">Sizes</h2>
		<table class="table table-bordered table-striped">
			<tr>
				<td><a class="btn btn-micro">Button</a></td>
				<td><code>.btn-micro</code></td>
			</tr>
			<tr>
				<td><a class="btn btn-small">Button</a></td>
				<td><code>.btn-small</code></td>
			</tr>
			<tr>
				<td><a class="btn">Button</a></td>
				<td>Default</td>
			</tr>
			<tr>
				<td><a class="btn btn-large">Button</a></td>
				<td><code>.btn-large</code></td>
			</tr>
		</table>
	</div>
	
	<div class="span5">
		<h2 class="header-3">Disabling</h2>
		<p>Simply add the class <code>disabled</code> to a link or the disabled attribute to a <code>&lt;button&gt;</code></p>
		<div class="btn-row">	
			<a class="btn disabled" href="">Disabled</a>
			<button class="btn" disabled>Disabled</button>
		</div>
	</div>
</div>

<hr class="thick-rule">

<h2>Grouping</h2>

<hr class="white-space">

<div class="row">
	<div class="span4">
		<h3>Button rows</h3>
		<p>This wrapper will simply float buttons left, leaving them disconnected</p>
	</div>
	<div class="span5 offset1">
		<div class="btn-row">
			<a class="btn btn-small" href="#">A</a>
			<a class="btn btn-small btn-warning" href="#">B</a>
			<a class="btn btn-small btn-danger" href="#">C</a>
			<a class="btn btn-small btn-success" href="#">D</a>
		</div>
	</div>
	<div class="span10">		
<pre class="prettyprint linenums small-text">
<?php cleanup_code('<div class="btn-row">
	<a class="btn btn-small" href="#">A</a>
	<a class="btn btn-small btn-warning" href="#">B</a>
	<a class="btn btn-small btn-danger" href="#">C</a>
	<a class="btn btn-small btn-success" href="#">D</a>
</div>') ?>
</pre>
	</div>
</div>

<hr class="white-space">

<div class="row">
	<div class="span4">
		<h3>Button groups</h3>
		<p>This wrapper will group your icons together, connecting them side-by-side.</p>
	</div>
	<div class="span5 offset1">
		<div class="btn-group">
			<a class="btn btn-small" href="#">A</a>
			<a class="btn btn-small btn-warning" href="#">B</a>
			<a class="btn btn-small btn-danger" href="#">C</a>
			<a class="btn btn-small btn-success" href="#">D</a>
		</div>
	</div>
	<div class="span10">
<pre class="prettyprint linenums small-text">
<?php cleanup_code('<div class="btn-group">
	<a class="btn btn-small" href="#">A</a>
	<a class="btn btn-small btn-warning" href="#">B</a>
	<a class="btn btn-small btn-danger" href="#">C</a>
	<a class="btn btn-small btn-success" href="#">D</a>
</div>') ?>
</pre>
	</div>
</div>

<hr class="white-space">

<div class="row">
	<div class="span4">
		<h3>Button toolbars</h3>
		<p>This additional wrapper will allow you to include multiple button groups in one row.</p>
	</div>
	<div class="span5 offset1">
		<div class="btn-toolbar">
			<div class="btn-group">
				<a class="btn btn-small" href="#">A</a>
				<a class="btn btn-small btn-warning" href="#">B</a>
				<a class="btn btn-small btn-danger" href="#">C</a>
				<a class="btn btn-small btn-success" href="#">D</a>
			</div>
			<div class="btn-group">
				<a class="btn btn-small btn-primary" href="#">Okay</a>
				<a class="btn btn-small btn-dark" href="#">Cancel</a>
			</div>
			<div class="btn-group">
				<a class="btn btn-small btn-success" href="#"><i class="icon-ok icon-white"></i></a>
				<a class="btn btn-small btn-danger" href="#"><i class="icon-remove icon-white"></i></a>
			</div>
		</div>
	</div>
	<div class="span10">	
<pre class="prettyprint linenums small-text">
<?php cleanup_code('<div class="btn-toolbar">
	<div class="btn-group">
		<a class="btn btn-small" href="#">A</a>
		<a class="btn btn-small btn-warning" href="#">B</a>
		<a class="btn btn-small btn-danger" href="#">C</a>
		<a class="btn btn-small btn-success" href="#">D</a>
	</div>
	<div class="btn-group">
		<a class="btn btn-small btn-primary" href="#">Okay</a>
		<a class="btn btn-small btn-dark" href="#">Cancel</a>
	</div>
	<div class="btn-group">
		<a class="btn btn-small btn-success" href="#"><i class="icon-ok icon-white"></i></a>
		<a class="btn btn-small btn-danger" href="#"><i class="icon-remove icon-white"></i></a>
	</div>
</div>') ?>
</pre>
	</div>
</div>

<hr class="thick-rule">

<h2>Dropdown menus</h2>
<div class="row">
	<div class="span5">
		<h3>Traditional button dropdowns</h3>
		<p>Use any button to trigger a dropdown menu by placing it within a <code>.btn&#8209;group</code> and providing the proper menu markup.</p>
		<div class="btn-group">
			<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Action <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
<pre class="prettyprint linenums small-text">
<?php cleanup_code('<div class="btn-group">
	<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Action <span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>') ?>
</pre>
	</div>
	
	<div class="span5">
		<h3>Split-button dropdowns</h3>
		<p>Building on the button group styles and markup, we can easily create a split button. Split buttons feature a standard action on the left and a dropdown toggle on the right with contextual links.</p>
		<div class="btn-group">
			<a class="btn" href="#">Action</a>
			<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div>
		
<pre class="prettyprint linenums small-text">
<?php cleanup_code('<div class="btn-group">
	<a class="btn" href="#">Action</a>
	<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
	<ul class="dropdown-menu">
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>') ?>
</pre>
	</div>
</div>