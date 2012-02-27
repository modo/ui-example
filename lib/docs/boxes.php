<h1 class="section-header">Boxes</h1>


<div class="row">
	<div class="span10">
		<p>Boxes are configurable with a number of options.</p>
		<ul>
			<li>Box headers</li>
			<li>Box sections</li>
			<li>Box types (for coloring)</li>
		</ul>
		<h2>Basic box markup</h2>
	</div>
	
    <div class="span5">

    
<pre class="prettyprint linenums">
<? cleanup_code('<div class="box">
	<div class="box-header">
		…
	</div>
	<div class="box-section">
		…
	</div>
	<div class="box-section">
		…
	</div>
</div>') ?>
</pre>
    </div>
	<div class="span5">
		<div class="box">
			<div class="box-header">
				<h3 class="header-4">Box title</h3>
			</div>
			<div class="box-section">
				<h4 class="header-6">This box has two sections.</h4>
				<p>Etiam sagittis elementum libero quis fermentum. Curabitur aliquet pretium placerat.</p>
			</div>
			<div class="box-section">
				<h4 class="header-6">Look! I'm another section!</h4>
				<p>Quisque ultricies eros vitae ante elementum tempor. Nulla facilisi. Suspendisse et massa quis.</p>
			</div>
			
					
		</div>
	</div>
</div>

<hr class="white-space" />

<div class="row">
    <div class="span5">

	<h3>Info box</h3>    
<pre class="prettyprint linenums">
<? cleanup_code('<div class="box box-info">
	…
</div>') ?>
</pre>
		<div class="box box-info">
			<div class="box-header">
				<h4>Box title</h4>
			</div>
			<p class="">Etiam sagittis elementum libero quis fermentum urabitur aliquet pretium. </p>
		</div>
    </div>

    <div class="span5">

	<h3>Action box</h3>    
<pre class="prettyprint linenums">
<? cleanup_code('<div class="box box-action">
	…
</div>') ?>
</pre>
		<div class="box box-action">
			<div class="box-header">
				<h4>Box title</h4>
			</div>
			<p class="">Etiam sagittis elementum libero quis fermentum urabitur aliquet pretium. </p>
		</div>
    </div>
</div>

<hr class="thick-rule">

<h2>Section head</h2>
<div class="section-head">
	<h3 class="pull-left">Welcome, John Smith!</h3>
	<div class="pull-right">
		<p class="small-text"><strong>Member ID #4445875</strong></p>
	</div>
</div>

<div class="row">
	<div class="span4">
		<div class="box">
			<p>Section headers are used sparingly, only when it is necessary to anchor the header of a page. Color options are the same as buttons.</p>
			<pre class="prettyprint linenums"><? cleanup_code('<div class="section-head">…</div>') ?></pre>
		</div>
	</div>
	<div class="span6">
		<div class="row">
			<div class="span3">
				<p><code>.section-head-info</code></p>
				<div class="section-head section-head-info"><h5>Lorem ipsum dolor sit amet</h5></div>
				
				<p><code>.section-head-dark</code></p>
				<div class="section-head section-head-dark"><h5>Lorem ipsum dolor sit amet</h5></div>
				
				<p><code>.section-head-primary</code></p>
				<div class="section-head section-head-primary"><h5>Lorem ipsum dolor sit amet</h5></div>
			</div>
			<div class="span3">
				<p><code>.section-head-warning</code></p>
				<div class="section-head section-head-warning"><h5>Lorem ipsum dolor sit amet</h5></div>
				
				<p><code>.section-head-danger</code></p>
				<div class="section-head section-head-danger"><h5>Lorem ipsum dolor sit amet</h5></div>
				
				<p><code>.section-head-success</code></p>
				<div class="section-head section-head-success"><h5>Lorem ipsum dolor sit amet</h5></div>
			</div>
		</div>
	</div>
</div>
