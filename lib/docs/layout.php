<h1 class="section-header">Layout Template</h1>

<hr class="white-space">

<div class="row">
	<div class="span4">
		<h2>Template shell</h2>
		<p>Below is the basic markup structure for a layout template. Further down the page you can see more detailed markup for individual template components such as the header, footer, etc.</p>
	</div>
	<div class="span6">
		<div class="frame-container">
		    <div class="frame bordered">
		        <img src="lib/img/template.png" alt="" />
		    </div>
		</div>
	</div>
</div>
<pre class="prettyprint linenums">
<? cleanup_code('<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 ie oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 ie oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 ie oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title></title>
		<meta name="description" content="" />	
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		
		<link rel="stylesheet" href="path/to/styles.css" />
		
		<script src="http://use.typekit.com/rsm7gxu.js"></script>	<!-- Replace with your typekit file -->
		<script src="path/to/preload-min.js"></script>
	</head>
	<body>
		<div id="body-container">
			<!-- Global Nav -->
			<div class="container">
				<!-- Header -->
				<div id="content" class="row">
					<!-- Page Content -->
				</div>
				<!-- Footer -->
			</div>
		</div>
		
		<script src="path/to/min/scripts-min.js"></script>
		<!--[if lt IE 7 ]>
			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			<script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
		<![endif]-->
	</body>
</html>') ?>
</pre>

<hr class="thick-rule">

<h2>Global nav</h2>

<div class="row">
	<div class="span5">
		<p>The global nav is the bar at the top which contains the main &amp; utility navigation. By default, the global nav is structured to collapse at small screen sizes.</p>
	</div>
	<div class="span5">
		<div class="alert alert-info small-text">
			<strong>Optional -</strong>
			You can optionally add the class <code>navbar&#8209;fixed&#8209;top</code> to attach the global nav to the to of the page so it sticks as you scroll.
		</div>
	</div>
</div>

<div id="global-nav" class="navbar" style="margin-bottom: 15px;">
	<div class="navbar-inner">
		<div class="container" style="width: auto;">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<div class="nav-collapse">
				<nav id="mainNav">
					<ul class="nav">
						<li class="active"><a href="#">Active link</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>
				</nav>
				
				<nav id="utilityNav">
					<ul class="nav">
						<li class="active"><a href="#">Active utility</a></li>
						<li><a href="#">Utility link</a></li>
						<li><a href="#">Utility link</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>

<pre class="prettyprint linenums">
<? cleanup_code('<div id="global-nav" class="navbar">
	<div class="navbar-inner">
		<div class="container" style="width: auto;">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<div class="nav-collapse">
				<nav id="mainNav">
					<ul class="nav">
						<li><a href="#">…</a></li>
					</ul>
				</nav>
				
				<nav id="utilityNav">
					<ul class="nav">
						<li><a href="#">…</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>') ?>
</pre>

<hr class="thick-rule">

<h2>Header</h2>
<pre class="prettyprint linenums">
<? cleanup_code('<header id="global-header" class="row">
	<div class="span9">
		<!-- Logo -->
	</div>
	
	<div class="span3">
		<!-- Personal Nav -->
		<!-- Mini Search -->
	</div>
</header>

<!-- Section Nav -->') ?>
</pre>

<hr class="white-space">

<div class="row">
	<div class="span5">
		<h3 class="header-4">Logo</h3>
<pre class="prettyprint linenums">
<? cleanup_code('<h1 id="logo">
	<a href="#" class="logo">Site name</a> 
	<a href="#" class="section">Site name 
		<span>Sub-text</span>
	</a>
</h1>') ?>
</pre>
	</div>
	<div class="span5">
		<h3 class="header-4">Personal nav</h3>
<pre class="prettyprint linenums">
<? cleanup_code('<nav id="personalNav">
	<ul class="nav nav-pills">
		<li><a href="#">…</a></li>
	</ul>
</nav>') ?>
</pre>
	</div>
</div>

<hr class="white-space">

<div class="row">
	<div class="span5">
		<h3 class="header-4">Section nav</h3>
		<div class="alert alert-info small-text">In the event that a page does not have a section list, just leave the <code>&lt;ul&gt;</code> empty</div>
<pre class="prettyprint linenums">
<? cleanup_code('<nav id="section-nav" class="row">
	<div class="span12">
		<ul class="nav nav-list-horizontal">
			<li><a href="#">…</a></li>
		</ul>
	</div>
</nav>') ?>
</pre>
	</div>
	
	<div class="span5">
		<h3 class="header-4">Mini search</h3>
		<p>See <a href="#search" rel="internal">search</a> for documentation</p>
	</div>
</div>

<hr class="thick-rule">

<h2>Content</h2>
<div class="row">
	<div class="span4">
		<p>The content section can take many forms dependent on the content that it needs to display. Some pages may not include a left navigation, or a masthead banner, or a right column with auxiliary information. The content section has been built in a fashion that allows easy addition / removal of these items. The markup to the right depicts a page that includes all of these sections, if any are removed, simply modify the grid classes on remaining elements to keep everything sized correctly.</p>
	</div>
	
	<div class="span6">
<pre class="prettyprint linenums">
<? cleanup_code('<div id="content" class="row">
	<div class="span2">
		<nav id="sub-section-nav">
			<!-- Add ".filter-nav" to ul for result pages (ie Store) -->
			<ul class="nav nav-list">
				<li><a href="#">…</li>
			</ul>
		</nav>
	</div>
	<div class="span10">
		<div class="row">
			<aside id="highlighted" class="span10">…</aside>
		</div>
		<div class="row">
			<article id="mainCol" class="span7">…</article>
			<aside id="sideCol" class="span3">…</aside>
		</div>
	</div>
</div>') ?>
</pre>
	</div>
</div>

<hr class="thick-rule">

<h2>Footer</h2>
<pre class="prettyprint linenums">
<? cleanup_code('<footer id="footer" class="row">
	<div class="span12">
		<div class="row">
			<div class="span12">
				<div class="well">
					<nav id="quickLinksNav" class="pull-left">
						<ul class="nav nav-list-horizontal">
							<li><a href="#">…</a></li>
						</ul>
					</nav>
					
					<nav id="legal" class="pull-right">
						<ul class="nav nav-list-horizontal">
							<li><a href="#">…</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="span6">
				<nav class="social">
					<ul class="nav nav-list-horizontal">
						<li><a href="#">…</a></li>
					</ul>
				</nav>
			</div>
			
			<div class="span6">
				<p id="copyright">&copy; 2012 U.S. Green Building Council</p>
			</div>
		</div>
	</div>
</footer>') ?>
</pre>