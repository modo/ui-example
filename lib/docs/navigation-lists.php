<h1 class="section-header">Navigation lists</h1>

<hr class="white-space">

<h2>Basic configurations</h2>
<div class="row">
	<div class="span4">
		<div class="box">
			<p>Creating a navigation list is as easy as adding <code>.nav</code> to any <code>&lt;ul&gt;</code>. There are two style varieties, <strong>tabs</strong> and <strong>pills</strong>, shown to the right.</p>
<pre class="prettyprint linenums small-text">
<? cleanup_code('<ul class="nav">
	<li class="active"><a href="#">Home</a></li>
	<li><a href="#">...</a></li>
	<li><a href="#">...</a></li>
</ul>') ?>
</pre>
		</div>
	</div>
	<div class="span3">
		<h3 class="header-4">Basic tabs</h3>
		<p>To style your nav with tabs, simply add the class <code>.nav-tabs</code> to your <code>&lt;ul&gt;</code>.</p>
		
		<ul class="nav nav-tabs">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">Profile</a></li>
			<li><a href="#">Messages</a></li>
		</ul>
	</div>
	<div class="span3">
		<h3 class="header-4">Basic pills</h3>
		<p>To style your nav with pills, simply add the class <code>.nav-pills</code> to your <code>&lt;ul&gt;</code>.</p>
		
		<ul class="nav nav-pills">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">Profile</a></li>
			<li><a href="#">Messages</a></li>
		</ul>
	</div>
</div>

<hr class="white-space">

<h2>Stacked navigations</h2>
<div class="row">
	<div class="span4">
		<div class="box">
			<p>As tabs and pills are horizontal by default, just add a second class, <code>.nav-stacked</code>, to make them appear vertically stacked.</p>
		</div>
	</div>
	<div class="span3">
		<h3 class="header-4">Stacked tabs</h3>
<pre class="prettyprint small-text">
<? cleanup_code('<ul class="nav nav-tabs nav-stacked">
	...
</ul>') ?>
</pre>
		<ul class="nav nav-tabs nav-stacked">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">Profile</a></li>
			<li><a href="#">Messages</a></li>
		</ul>
	</div>
	<div class="span3">
		<h3 class="header-4">Stacked pills</h3>
<pre class="prettyprint small-text">
<? cleanup_code('<ul class="nav nav-pills nav-stacked">
	...
</ul>') ?>
</pre>
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">Profile</a></li>
			<li><a href="#">Messages</a></li>
		</ul>
	</div>
</div>

<hr class="white-space">

<h2>Dropdowns</h2>
<div class="row">
	<div class="span4">
		<div class="box">
			<p>For rich, drop down navigations, simply add the proper markup:</p>
<pre class="prettyprint linenums small-text">
<? cleanup_code('<ul class="nav nav-tabs">
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			Dropdown <b class="caret"></b>
		</a>
		<ul class="dropdown-menu">
			<!-- links -->
		</ul>
	</li>
</ul>') ?>
</pre>
		</div>
	</div>
	<div class="span3">
		<h3 class="header-4">Tabs w/ dropdown</h3>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#">Home</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		        </ul>
			</li>
		</ul>
	</div>
	<div class="span3">
		<h3 class="header-4">Pills w/ dropdown</h3>
		<ul class="nav nav-pills">
			<li class="active"><a href="#">Home</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		        </ul>
			</li>
		</ul>
	</div>
</div>

<hr class="white-space">

<h2>Tabbable nav</h2>
<div class="row">
	<div class="span4">
		<div class="box">
			<p>To make tabs tabbable, wrap the <code>.nav-tabs</code> in another div with class <code>.tabbable</code>.</p>
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#1" data-toggle="tab">Section 1</a></li>
					<li><a href="#2" data-toggle="tab">Section 2</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="1">
						<p>I'm in Section 1.</p>
					</div>
					<div class="tab-pane" id="2">
						<p>Howdy, I'm in Section 2.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="span6">
		<h3 class="header-4">The markup</h3>
<pre class="prettyprint linenums small-text">
<? cleanup_code('<div class="tabbable">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#1" data-toggle="tab">Section 1</a></li>
		<li><a href="#2" data-toggle="tab">Section 2</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="1">
			<p>Im in Section 1.</p>
		</div>
		<div class="tab-pane" id="2">
			<p>Howdy, Im in Section 2.</p>
		</div>
	</div>
</div>') ?>
</pre>
	</div>
</div>

<hr class="white-space">

<div class="row">
	<div class="span5">
		<h4 class="header-5">Tabs on the left</h4>
		<p>Swap the class to put tabs on the left.</p>
		<div class="tabbable tabs-left">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#1b" data-toggle="tab">Section 1</a></li>
				<li><a href="#2b" data-toggle="tab">Section 2</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="1b">
					<p>I'm in Section 1.</p>
				</div>
				<div class="tab-pane" id="2b">
					<p>Howdy, I'm in Section 2.</p>
				</div>
			</div>
		</div>
		
<pre class="prettyprint linenums small-text">
<? cleanup_code('<div class="tabbable tabs-left">
	<ul class="nav nav-tabs">
		...
	</ul>
	<div class="tab-content">
		...
	</div>
</div>') ?>
</pre>
	</div>
	<div class="span5">
		<h4 class="header-5">Tabs on the right</h4>
		<p>Swap the class to put tabs on the right.</p>
		<div class="tabbable tabs-right">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#1c" data-toggle="tab">Section 1</a></li>
				<li><a href="#2c" data-toggle="tab">Section 2</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="1c">
					<p>I'm in Section 1.</p>
				</div>
				<div class="tab-pane" id="2c">
					<p>Howdy, I'm in Section 2.</p>
				</div>
			</div>
		</div>
		
<pre class="prettyprint linenums small-text">
<? cleanup_code('<div class="tabbable tabs-right">
	<ul class="nav nav-tabs">
		...
	</ul>
	<div class="tab-content">
		...
	</div>
</div>') ?>
</pre>
	</div>
</div>

<hr class="white-space">

<div class="row">
	<div class="span5">
		<h4 class="header-5">Tabs on the bottom</h4>
		<p>Flip the order of the HTML and add a class to put tabs on the bottom.</p>
<pre class="prettyprint linenums small-text">
<? cleanup_code('<div class="tabbable tabs-bottom">
	<div class="tab-content">
		...
	</div>
	<ul class="nav nav-tabs">
		...
	</ul>
</div>') ?>
</pre>
	</div>
	<div class="span5">
		<div class="tabbable tabs-bottom">
			<div class="tab-content">
				<div class="tab-pane active" id="1a">
					<p>I'm in Section 1.</p>
				</div>
				<div class="tab-pane" id="2a">
					<p>Howdy, I'm in Section 2.</p>
				</div>
			</div>
			<ul class="nav nav-tabs">
				<li class="active"><a href="#1a" data-toggle="tab">Section 1</a></li>
				<li><a href="#2a" data-toggle="tab">Section 2</a></li>
			</ul>
		</div>
	</div>
</div>

<hr class="white-space">

<h2>Application-style lists</h2>
<div class="row">
	<div class="span4">
		<div class="box">
			<p>Nav lists provide a simple and easy way to build groups of nav links with optional headers. They're best used in sidebars like the Finder in OS X.</p>
			<p>Structurally, they're built on the same core nav styles as tabs and pills, so usage and customization are straightforward.</p>
			
			<h3 class="header-5">With icons</h3>
			<p>Nav lists are also easy to equip with icons. Add the proper <code>&lt;i&gt;</code> tag with class and you're set.</i>
		</div>	
	</div>
	<div class="span3">
		<h3 class="header-4">Example nav list</h3>
		<p>Take a list of links and add <br><code>class="nav nav-list"</code></p>
		<div class="well" style="padding: 8px 0;">
			<ul class="nav nav-list">
				<li class="nav-header">List header</li>
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Library</a></li>
				<li><a href="#">Applications</a></li>
				<li class="nav-header">Another list header</li>
				<li><a href="#">Profile</a></li>
				<li><a href="#">Settings</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</div>
<pre class="prettyprint linenums small-text">
<? cleanup_code('<ul class="nav nav-list">
	<li class="nav-header">List header</li>
	<li class="active"><a href="#">Home</a></li>
	<li><a href="#">Library</a></li>
	...
</ul>') ?>
</pre>
	</div>
	
	<div class="span3">
		<h3 class="header-4">Example with icons</h3>
		<p>Same example, but with <code>&lt;i&gt;</code> tags for icons.</p>
		<div class="well" style="padding: 8px 0;">
			<ul class="nav nav-list">
				<li class="nav-header">List header</li>
				<li class="active"><a href="#"><i class="icon-white icon-home"></i> Home</a></li>
				<li><a href="#"><i class="icon-book"></i> Library</a></li>
				<li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
				<li class="nav-header">Another list header</li>
				<li><a href="#"><i class="icon-user"></i> Profile</a></li>
				<li><a href="#"><i class="icon-cog"></i> Settings</a></li>
				<li><a href="#"><i class="icon-flag"></i> Help</a></li>
			</ul>
		</div>
<pre class="prettyprint linenums small-text">
<? cleanup_code('<ul class="nav nav-list">
	...
	<li><a href="#"><i class="icon-book"></i> Library</a></li>
	...
</ul>') ?>
</pre>
	</div>
</div>