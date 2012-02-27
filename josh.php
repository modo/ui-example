<?php 
function cleanup_code($code) {
	echo str_replace("	","    ",htmlspecialchars($code));
} ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 ie oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 ie oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 ie oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Bootstrap | USGBC Blank Template</title>
	<meta name="description" content="" />	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	
	<?php include( 'lib/inc/meta-head.php' ); ?>
</head>
<body onload="prettyPrint()">
	<div id="body-container">
		<!-- Header -->
		<?php include( 'lib/inc/header.php' ); ?>
			
			<div id="content" class="row">
				
				<div class="span12">
					
					<div class="row">
			            <article id="mainCol" class="span12">
			            	<header class="section-head section-head-info">
			            	    <div class="ag-control pull-left">
			            	        <div class="btn-group">
			            	            <select class="btn-micro input-large">
			            	            	<option>All channels</option>
			            	                <option>Announcements</option>
			            	                <option>USGBC news</option>
			            	                <option>Green schools</option>
			            	            </select>
			            	        </div>
			            	    </div>
			            	    
			            	    <a href="#" class="pull-left"><i class="icon-social-rss"></i></a>
			            	</header>
			            	
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
			            	        <li class="ag-item span4 block-link">	
			            	        	<div class="box box-info">
			            	            	<header class="section-header meta">
			            	            		<p class="pull-left">In <a href="#">USGBC</a></p>
			            	            		<p class="pull-right">12.14.2010</p>
			            	            	</header>
			            	            	
			            	            	<div class="entry">
			            	            		<h2><a href="#" class="dark-text">USGBC Welcomes New Board Directors</a></h2>
			            	            		<div class="summary">
			            	            			<p>As delegates work to advance a new global climate change pact at the U.N. Framework Convention on Climate Change conference, 40 environmental and business organizations joined forces to urge governments to prioritize reducing greenhouse gas emissions from the built environment and increase investment in this sector. As partners in a new broad-based international action network called the Global Leadership in Our Built Environment (GLOBE) Alliance, the organizations are...</p>
			            	            			<a href="link2" class="btn btn-small btn-dark block-link-src"><i class="icon-play-circle icon-white"></i></a>
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
			            	            			<a href="link3" class="btn btn-small btn-dark block-link-src"><i class="icon-play-circle icon-white"></i></a>
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
			            
			            </article>			            
					</div>
				</div>
			</div>
			
			<?php include( 'lib/inc/footer.php' ); ?>
		</div>
	</div>
	
	<!-- Scripts -->
	<?php include('lib/inc/meta-footer.php'); ?>
</body>
</html>