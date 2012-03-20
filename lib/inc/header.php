<div id="global-nav" class="navbar">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<div class="nav-collapse">
				<nav id="mainNav">
					<ul class="nav">
						<li class="active"><a href="#">Bootstrap</a></li>
					</ul>
				</nav>
				
				<nav id="utilityNav">
					<ul class="nav">
						<li class="active"><a href="#">Articles</a></li>
						<li><a href="#">Profiles</a></li>
						<li><a href="#">Resources</a></li>
						<li><a href="#">Store</a></li>
						<li><a href="#">Help</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<header id="global-header" class="row">
		<div class="span9">
			<h1 id="logo"><a href="#" class="logo">USGBC Home</a> <a href="#" class="section">USGBC&rsquo;s <span>Bootstrap</span></a></h1>
		</div>
		
		<div class="span3">
			<nav id="personalNav">
				<ul class="nav nav-pills">
					<li><a href="#" class="jqm-form-trigger modal-false">Sign in</a></li>
					<li class="active"><a href="#" class="jqm-form-trigger">My account</a></li>
				</ul>
			</nav>
				
			<form method="post" action="/search/" class="search mini-search well form-inline">
				<input type="text" class="input-medium" placeholder="Search the site" />
				<button type="submit" class="btn btn-clear btn-small"><i class="icon-search"></i></button>
			</form>
		</div>
	</header>
	
	<nav id="section-nav" class="row">
		<div class="span12">
			<ul class="nav nav-list-horizontal">
				<li class="<?php if($level2 == 'construction') echo ' active'; ?>"><a href="index.php">Construction</a></li>
				<li class="<?php if($level2 == 'general') echo ' active'; ?>"><a href="general-styles.php">General Styles</a></li>
				<li class="<?php if($level2 == 'navigation') echo ' active'; ?>"><a href="navigation.php">Navigation</a></li>
				<li class="<?php if($level2 == 'aggregation') echo ' active'; ?>"><a href="aggregation.php">Aggregation</a></li>
				<li class="<?php if($level2 == 'components') echo ' active'; ?>"><a href="components.php">Specific Components</a></li>
				<li class="<?php if($level2 == 'less') echo ' active'; ?>"><a href="less.php">Using LESS</a></li>
			</ul>
		</div>
	</nav>