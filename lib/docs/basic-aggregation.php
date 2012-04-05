<h1 class="section-header">Basic Aggregation</h1>
<p>Outer HTML for aggregation lists:</p>
<pre class="prettyprint linenums">
<?php cleanup_code('<div class="aggregation">
	<header>
		<!-- controls -->
		<!-- pagination -->
	</header>
	<ol class="ag-list ag-grid-view">
		<!-- results -->
	</ol>
	<footer>
		<!-- pagination -->
	</footer>
</div>') ?>
</pre>

<hr class="thick-rule">

<h2>Header</h2>
<div class="aggregation">
	<header>
		<div class="ag-control pull-left">
			<p class="pull-left">Sort</p>
			<div class="btn-group pull-left">
				<a class="btn btn-micro dropdown-toggle" data-toggle="dropdown" href="#">Newest <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">A-Z</a></li>
					<li><a href="#">Level</a></li>
					<li class="active"><a href="#">Newest</a></li>
					<li><a href="#">Updated</a></li>
				</ul>
			</div>
		</div>
		
		<div class="ag-control pull-left">
			<p class="pull-left">Results</p>
			<div class="btn-group pull-left">
				<a class="btn btn-micro dropdown-toggle" data-toggle="dropdown" href="#">30 <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="active"><a href="#">30</a></li>
					<li><a href="#">60</a></li>
					<li><a href="#">120</a></li>
				</ul>
			</div>
		</div>
		
		<div class="ag-control pull-left" id="view">
			<p class="pull-left">View</p>
			<div class="btn-group pull-left">
				<a class="btn btn-micro dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-th"></i> <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="active"><a href="#"><i class="icon-th"></i> Grid view</a></li>
					<li><a href="#"><i class="icon-align-justify"></i> List view</a></li>
				</ul>
			</div>
		</div>
		
		<div class="ag-control pull-left">
			<label class="checkbox"><input type="checkbox" id="optionsCheckbox" value="option1"> Only show listings with profiles</label>
		</div>
		
		<div class="pagination pull-right">
			<ul>
				<li class="disabled"><a href="#"><i class="icon-step-backward"></i></a></li>
				<li class="disabled"><a href="#"><i class="icon-chevron-left"></i></a></li>
				<li class="active"><input type="text" class="input-mini" value="1" /> of 1</li>
				<li><a href="#"><i class="icon-chevron-right"></i></a></li>
				<li><a href="#"><i class="icon-step-forward"></i></a></li>
			</ul>
		</div>
	</header>
</div>

<div class="row">
	<div class="span6">
		<div class="box">
			<h3>Controls</h3>
			<p>A control is used for any sort of sorting, or filtering of the result list. Most common controls are:</p>
			<ul class="styled-list">
				<li>Sort</li>
				<li>Results</li>
				<li>View</li>
			</ul>
<pre class="prettyprint linenums">
<?php cleanup_code('<div class="ag-control pull-left">
	<p class="pull-left">Control name</p>
	<div class="btn-group pull-left">
		<a class="btn btn-micro dropdown-toggle" data-toggle="dropdown" href="#">Option <span class="caret"></span></a>
		<ul class="dropdown-menu">
			<li class="active"><a href="#">Option</a></li>
			<li><a href="#">Option</a></li>
			<li><a href="#">Option</a></li>
		</ul>
	</div>
</div>') ?>
</pre>
		</div>
	</div>
	
	<div class="span4">
		<div class="box">
			<h3>Pagination</h3>
			<p>See <a href="#pagination" rel="internal">pagination</a> section.</p>
		</div>
	</div>
</div>


<hr class="thick-rule">

<h2>Result list</h2>
<pre class="prettyprint linenums">
<?php cleanup_code('<ol class="ag-list ag-grid-view">
	<li class="ag-item">
		<div class="item-photo">
			<div class="frame-container">
				<div class="frame outset"><img src="image.jpg" alt="" /></div>
			</div>
		</div>
		<div class="item-info">
			<h2><a href="#">Result Title</a></h2>
			<h3>Subtitle/Location</h3>
			<p class="detail">Detail Line</p>
			<footer>
				<p>Footer detail</p>
			</footer>
		</div>
		<div class="item-extra">
			<!-- Flags, Certs, etc -->
		</div>
	</li>
</ol>') ?>
</pre>

<div class="row">
	<div class="span6">
		<div class="alert alert-info">
			View class must be added to <code>.ag&#8209;list</code> to display properly
		</div>
		
		<p><code>.ag-grid-view</code></p>
		<div class="aggregation">
			<ol class="ag-list ag-grid-view">
				<li class="ag-item block-link">
					<div class="item-photo">
						<div class="frame-container">
							<div class="frame outset"><img src="http://usgbc.josh.mododev.com/prototype/themes/usgbc/lib/img/directory/WrigleyEngineeringTechCenter-sm.jpg" alt="" /></div>
						</div>
					</div>
					<div class="item-info">
						<h2><a href="#" class="block-link-src">Result Title</a></h2>
						<h3>Washington, DC</h3>
						<p class="detail">New construction v2009</p>
					</div>
					<div class="item-extra">
						<div class="flag flag-gold">Gold - 08/08/11</div>
					</div>
				</li>
				<li class="ag-item">
					<div class="item-photo">
						<div class="frame-container">
							<div class="frame outset"><img src="http://usgbc.josh.mododev.com/prototype/themes/usgbc/lib/img/directory/one-boston-place.jpg" alt="" /></div>
						</div>
					</div>
					<div class="item-info">
						<h2><a href="#">Result Title</a></h2>
						<h3>Boston, MA</h3>
						<p class="detail">Commercial interiors v2.0</p>
					</div>
					<div class="item-extra">
						<div class="flag flag-silver">Silver - 01/10/11</div>
					</div>
				</li>
				<li class="ag-item">
					<div class="item-photo">
						<div class="frame-container">
							<div class="frame outset"><img src="http://usgbc.josh.mododev.com/prototype/themes/usgbc/lib/img/directory/morgan-bus-center.jpg" alt="" /></div>
						</div>
					</div>
					<div class="item-info">
						<h2><a href="#">Result Title</a></h2>
						<h3>Savannah, GA</h3>
						<p class="detail">New contstruction v2009</p>
					</div>
					<div class="item-extra">
						<div class="flag flag-certified">Certified - 08/08/11</div>
					</div>
				</li>
			</ol>
		</div>
		
		<p><code>.ag-list-view</code></p>
		<div class="aggregation">
			<ol class="ag-list ag-list-view">
				<li class="ag-item block-link">
					<div class="item-photo">
						<div class="frame-container">
							<div class="frame outset"><img src="http://usgbc.josh.mododev.com/prototype/themes/usgbc/lib/img/directory/WrigleyEngineeringTechCenter-sm.jpg" alt="" /></div>
						</div>
					</div>
					<div class="item-info">
						<h2><a href="#" class="block-link-src">Result Title</a></h2>
						<h3>Washington, DC</h3>
						<p class="detail">New construction v2009</p>
					</div>
					<div class="item-extra">
						<div class="flag flag-gold">Gold - 08/08/11</div>
					</div>
				</li>
				<li class="ag-item">
					<div class="item-photo">
						<div class="frame-container">
							<div class="frame outset"><img src="http://usgbc.josh.mododev.com/prototype/themes/usgbc/lib/img/directory/one-boston-place.jpg" alt="" /></div>
						</div>
					</div>
					<div class="item-info">
						<h2><a href="#">Result Title</a></h2>
						<h3>Boston, MA</h3>
						<p class="detail">Commercial interiors v2.0</p>
					</div>
					<div class="item-extra">
						<div class="flag flag-silver">Silver - 01/10/11</div>
					</div>
				</li>
				<li class="ag-item">
					<div class="item-photo">
						<div class="frame-container">
							<div class="frame outset"><img src="http://usgbc.josh.mododev.com/prototype/themes/usgbc/lib/img/directory/morgan-bus-center.jpg" alt="" /></div>
						</div>
					</div>
					<div class="item-info">
						<h2><a href="#">Result Title</a></h2>
						<h3>Savannah, GA</h3>
						<p class="detail">New contstruction v2009</p>
					</div>
					<div class="item-extra">
						<div class="flag flag-certified">Certified - 08/08/11</div>
					</div>
				</li>
			</ol>
		</div>
	</div>
	<div class="span4">
		<div class="box">
			<h3>Flags</h3>
<pre class="prettyprint linenums">
<?php cleanup_code('<div class="flag flag-gold">
	Gold - 08/08/11
</div>') ?>
</pre>
			<p>Available flags:</p>
			<ul class="unstyled">
				<li><code>.flag-platinum</code></li>
				<li><code>.flag-gold</code></li>
				<li><code>.flag-silver</code></li>
				<li><code>.flag-certified</code></li>
			</ul>
		</div>
	</div>
</div>
<hr class="thick-rule">

<h2>Footer</h2>
<p>See <a href="#pagination" rel="[internal]">pagination</a> section</p>