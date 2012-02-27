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

<h2>Grid list</h2>
<div class="row">
	<div class="span7">
<pre class="prettyprint linenums small-text">
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
	        		<h2><a href="[link to article]" class="dark-text">[title]</a></h2>
	        		<div class="summary">
	        			<p>[excerpt]</p>
	        			<a href="[link to article]" class="btn btn-small btn-dark block-link-src"><i class="icon-play-circle icon-white"></i></a>
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