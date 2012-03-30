<header id="global-header">
	<div class="container">
		<div class="head">
			<a href="/" class="logo">USGBC Home</a>
			<a href="/" class="name">USGBC's <span>Bootstrap</span></a>
			<a href="#" id="nav-toggle" class="btn small-screen"><i class="icon-align-justify"></i></a>
		</div>
		<nav>
			<ul id="personalNav">
				<li>
					<a class="btn btn-small btn-primary" href="#">Sign in</a>
				    <ul class="dropdown-menu">
				        <li><a href="#">My Account</a></li>
				        <li><a href="#">Contributions</a></li>
				        <li class="divider"></li>
				        <li><a href="#">Log out</a></li>
				    </ul>
				</li>
			</ul>
			<ul id="mainNav" class="nav">
				<li class="active"><a href="#">Bootstrap</a></li>
			</ul>
			<ul id="utilityNav" class="nav">
				<li class="active"><a href="#">Articles</a></li>
				<li><a href="profiles.php">Profiles</a></li>
				<li><a href="#">Resources</a></li>
				<li><a href="#">Store</a></li>
				<li><a href="#">Help</a></li>
			</ul>
			<form method="post" action="/search/" class="search search-mini search-gray well form-inline">
				<input type="text" class="input-medium" placeholder="Search the site" />
				<button type="submit" class="btn btn-clear btn-small"><i class="icon-search"></i></button>
			</form>
		</nav>
		
	</div>
	
</header>
<div class="container">
	<nav id="section-nav" class="dropdown">
		<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Members <span class="caret"></span></a>
		<ul>
			<li class="<?php if($level2 == 'construction') echo ' active'; ?>"><a href="index.php">Construction</a></li>
			<li class="<?php if($level2 == 'general') echo ' active'; ?>"><a href="general-styles.php">General Styles</a></li>
			<li class="<?php if($level2 == 'navigation') echo ' active'; ?>"><a href="navigation.php">Navigation</a></li>
			<li class="<?php if($level2 == 'aggregation') echo ' active'; ?>"><a href="aggregation.php">Aggregation</a></li>
			<li class="<?php if($level2 == 'components') echo ' active'; ?>"><a href="components.php">Specific Components</a></li>
			<li class="<?php if($level2 == 'less') echo ' active'; ?>"><a href="less.php">Using LESS</a></li>
		</ul>
	</nav>
