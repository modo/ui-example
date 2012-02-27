<!--
<div class="blog-ag">
	<ol class="ag-list ag-grid-view row">
        <li class="ag-item span4 block-link">	
        	<div class="box box-info">
	        	<header class="section-header meta">
	        		<p class="pull-left">In <a href="#">USGBC</a></p>
	        		<p class="pull-right">12.14.2010</p>
	        	</header>
	        	
	        	<div class="entry">
	        		<div class="frame-container">
	        			<div class="frame inset">
	        				<img src="http://usgbc.trav.mododev.com/prototype/themes/usgbc/lib/img/blog/grid_photo.jpg" alt="" />
	        			</div>
	        		</div>
	        		<h2><a href="#" class="dark-text">USGBC Welcomes New Board Directors</a></h2>
	        		<div class="summary">
	        			<p>As delegates work to advance a new global climate change pact at the U.N. Framework Convention on Climate Change conference, 40 environmental and business organizations joined forces to urge governments to prioritize reducing greenhouse gas emissions from the built environment and increase investment in this sector. As partners in a new broad-based international action network called the Global Leadership in Our Built Environment (GLOBE) Alliance, the organizations are...</p>
	        			<a href="link1" class="btn btn-small btn-dark block-link-src"><i class="icon-play-circle icon-white"></i></a>
	        		</div>
	        	</div>
	        	
	        	<footer>
	        		<div class="counter counter-comment pull-left">
	        			<i class="icon-comment"></i>
	        			<span class="count">16</span>
	        		</div>
	        		<div class="rating-widget-sm pull-right">
	        			<div class="btn-group">
	        				<a class="btn btn-micro btn-clear danger-text" href="#"><i class="icon-minus-sign"></i> 10</a>
	        				<a class="btn btn-micro btn-clear success-text" href="#"><i class="icon-plus-sign"></i> 44</a>
	        			</div>
	        		</div>
	        	</footer>
        	</div>
        </li>
    </ol>
</div>
-->



<h1 class="section-header">Blog Aggregation</h1>
<p>Blog aggregation is very similar to <a href="#basic-aggregation" rel="internal">basic aggregation</a>, however any header/footer to the list is created separately. Also, the markup between grid and list styles are not identical, so be sure to follow the correct template.</p>

<hr class="white-space">

<h2>Grid view</h2>
<div class="row">
	<div class="span7">
<pre class="prettyprint linenums">
<? cleanup_code('<div class="blog-ag">
	<ol class="ag-list ag-grid-view row">
        <li class="ag-item span4 block-link">	
        	<div class="box box-info">
	        	<header class="section-header meta">
	        		<p class="pull-left">In <a href="[category link]">[category]</a></p>
	        		<p class="pull-right">[pubdate]</p>
	        	</header>
	        	<div class="entry">
	        		<div class="frame-container">
	        			<div class="frame inset">
	        				<img src="&hellip;" alt="[thumb]" />
	        			</div>
	        		</div>
	        		<h2><a href="[article link]" class="dark-text">[title]</a></h2>
	        		<div class="summary">
	        			<p>[excerpt]</p>
	        			<a href="[article link]" class="btn btn-small btn-dark block-link-src"><i class="icon-play-circle icon-white"></i></a>
	        		</div>
	        	</div>
	        	<footer>
	        		<div class="counter counter-comment pull-left">
	        			<i class="icon-comment"></i>
	        			<span class="count">[comment count]</span>
	        		</div>
	        		<div class="rating-widget-sm pull-right">
	        			<div class="btn-group">
	        				<a class="btn btn-micro btn-clear danger-text" href="#"><i class="icon-minus-sign"></i> [downvote count]</a>
	        				<a class="btn btn-micro btn-clear success-text" href="#"><i class="icon-plus-sign"></i> [upvote count]</a>
	        			</div>
	        		</div>
	        	</footer>
        	</div>
        </li>
        <!-- Add other results here -->
    </ol>
</div>') ?>
</pre>	
	</div>
	<div class="span3">
		<div class="blog-ag">
			<ol class="ag-list ag-grid-view row">
		        <li class="ag-item span4 block-link">	
		        	<div class="box box-info">
			        	<header class="section-header meta">
			        		<p class="pull-left">In <a href="#">USGBC</a></p>
			        		<p class="pull-right">12.14.2010</p>
			        	</header>
			        	
			        	<div class="entry">
			        		<div class="frame-container">
			        			<div class="frame inset">
			        				<img src="http://usgbc.trav.mododev.com/prototype/themes/usgbc/lib/img/blog/grid_photo.jpg" alt="" />
			        			</div>
			        		</div>
			        		<h2><a href="#" class="dark-text">USGBC Welcomes New Board Directors</a></h2>
			        		<div class="summary">
			        			<p>As delegates work to advance a new global climate change pact at the U.N. Framework Convention on Climate Change conference, 40 environmental and business organizations joined forces to urge governments to prioritize reducing greenhouse gas emissions from the built environment and increase investment in this sector. As partners in a new broad-based international action network called the Global Leadership in Our Built Environment (GLOBE) Alliance, the organizations are...</p>
			        			<a href="link1" class="btn btn-small btn-dark block-link-src"><i class="icon-play-circle icon-white"></i></a>
			        		</div>
			        	</div>
			        	
			        	<footer>
			        		<div class="counter counter-comment pull-left">
			        			<i class="icon-comment"></i>
			        			<span class="count">16</span>
			        		</div>
			        		<div class="rating-widget-sm pull-right">
			        			<div class="btn-group">
			        				<a class="btn btn-micro btn-clear danger-text" href="#"><i class="icon-minus-sign"></i> 10</a>
			        				<a class="btn btn-micro btn-clear success-text" href="#"><i class="icon-plus-sign"></i> 44</a>
			        			</div>
			        		</div>
			        	</footer>
		        	</div>
		        </li>
		    </ol>
		</div>
	</div>
</div>

<hr class="thick-rule">

<h2>List view</h2>
<pre class="prettyprint linenums">
<? cleanup_code('<div class="blog-ag">
	<ol class="ag-list ag-list-view">
        <li class="ag-item">	
        	<header class="section-header">
        		<div class="rating-widget display-rating-widget pull-left">
        			<div class="rating-total">
        				<span class="current-rating positive">+42</span>
        			</div>
        			<div class="rating-comparison">
        				<span class="likes positive">44</span><span class="dislikes negative">2</span>
        			</div>
        			<span class="rating-disclaimer">Sign in to vote!</span>
        		</div>
        		<h2><a href="[article link]" class="dark-text">[title]</a></h2>
        	</header>
        	
        	<div class="meta">
        		<p class="pull-left">Published on <time datetime="[pubdate formatted]">[pubdate]</time></p>
        		<p class="pull-left">Written by <a href="[author link]">[author]</a></p>
        		<p class="pull-left">Posted in <a href="[category link]">[category]</a></p>
        	</div>
        	
        	<div class="entry">
        		<div class="frame-container">
        			<div class="frame">
        				<img src="[thumb]" alt="" />
        			</div>
        		</div>
        		<div class="summary">
        			<p>[excerpt]</p>
        		</div>
        	</div>
        	
        	<footer class="box box-action">
        		<div class="counter counter-comment pull-left">
        			<i class="icon-comment"></i>
        			<span class="count">[comment count]</span>
        		</div>
        		<p class="pull-right"><a href="[article link]">Continue reading <i class="arrow-link"></span></i></a></p>
        	</footer>
        </li>
        <!-- Add other results here -->
    </ol>
</div>') ?>
</pre>	

<hr class="white-space">

<div class="row">
	<div class="span8">
		<div class="blog-ag">
			<ol class="ag-list ag-list-view">
		        <li class="ag-item">	
		        	<header class="section-header">
		        		<div class="rating-widget display-rating-widget pull-left">
		        			<div class="rating-total">
		        				<span class="current-rating positive">+42</span>
		        			</div>
		        			<div class="rating-comparison">
		        				<span class="likes positive">44</span><span class="dislikes negative">2</span>
		        			</div>
		        			<span class="rating-disclaimer">Sign in to vote!</span>
		        		</div>
		        		<h2><a href="#" class="dark-text">USGBC commends National League of Cities call for federal adoption of Green Building Policy Agenda</a></h2>
		        	</header>
		        	
		        	<div class="meta">
		        		<p class="pull-left">Published on <time datetime="2011-01-12">January 12, 2011</time></p>
		        		<p class="pull-left">Written by <a href="#">John Doe</a></p>
		        		<p class="pull-left">Posted in <a href="#">USGBC</a></p>
		        	</div>
		        	
		        	<div class="entry">
		        		<div class="frame-container">
		        			<div class="frame">
		        				<img src="http://usgbc.trav.mododev.com/prototype/themes/usgbc/lib/img/blog/feature_image.jpg" alt="" />
		        			</div>
		        		</div>
		        		<div class="summary">
		        			<p>As delegates work to advance a new global climate change pact at the U.N. Framework Convention on Climate Change conference, 40 environmental and business organizations joined forces to urge governments to prioritize reducing greenhouse gas emissions from the built environment and increase investment in this sector. As partners in a new broad-based international action network called the Global Leadership in Our Built Environment (GLOBE) Alliance, the organizations are...</p>
		        		</div>
		        	</div>
		        	
		        	<footer class="box box-action">
		        		<div class="counter counter-comment pull-left">
		        			<i class="icon-comment"></i>
		        			<span class="count">16</span>
		        		</div>
		        		<p class="pull-right"><a href="#">Continue reading <i class="arrow-link"></span></i></a></p>
		        	</footer>
		        </li>
		    </ol>
		</div>
	</div>
</div>