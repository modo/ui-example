<h1 class="section-header">Rating Widgets</h1>
<!--
<div class="rating-widget interactive-rating-widget">

    <div class="top">
        <span class="current-rating positive">35</span>
        <span class="rating-ratio">
            <span class="likes positive">40</span>
            <span class="dislikes negative">5</span>
        </span>
    </div>
    
    <div class="bottom">
        <a class="like" href="#">Like</a>
        <a class="dislike" href="#">Dislike</a>
    </div>
    
    <span class="not-signed-in logIn_false">Sign in to vote!</span>
    
</div>-->



<div class="row">
	
	<div class="span10">
		<h2 class="header-4">Display only</h2>
	</div>
	<div class="span2">
		<div class="rating-widget display-rating-widget">
			<div class="rating-total">
				<span class="current-rating positive">+42</span>
			</div><!-- rating-total -->
			<div class="rating-comparison">
				<span class="likes positive">44</span><span class="dislikes negative">2</span>
			</div><!-- rating-comparison -->
			<nav class="rating-nav">
			    <a class="like" href="#">Like</a>
			    <a class="dislike" href="#">Dislike</a>
			</nav><!-- rating-nav -->
			<span class="rating-disclaimer">Sign in to vote!</span>
		</div><!--rating-->
	</div>
	
	
	<div class="span10">
		<h2 class="header-4">Interactive</h2>
	</div>
	
	<div class="span2">
		<div class="rating-widget interactive-rating-widget">
			<div class="rating-total">
				<span class="current-rating positive">+42</span>
			</div><!-- rating-total -->
			<div class="rating-comparison">
				<span class="likes positive">44</span><span class="dislikes negative">2</span>
			</div><!-- rating-comparison -->
			<nav class="rating-nav">
			    <span class="like"><a class="selected" href="#">Like</a></span>
			    <span class="dislike"><a href="#">Dislike</a></span>
			</nav><!-- rating-nav -->
			<span class="rating-disclaimer">Sign in to vote!</span>
		</div><!--rating-->
	</div>


	<div class="span10">
		<h2 class="header-4">Interactive (logged-out)</h2>
	</div>
	
	<div class="span2">
		<div class="rating-widget interactive-rating-widget rating-widget-disabled">
			<div class="rating-total">
				<span class="current-rating positive">+42</span>
			</div><!-- rating-total -->
			<div class="rating-comparison">
				<span class="likes positive">44</span><span class="dislikes negative">2</span>
			</div><!-- rating-comparison -->
			<nav class="rating-nav">
			    <span class="like"><a href="#">Like</a></span>
			    <span class="dislike"><a href="#">Dislike</a></span>
			</nav><!-- rating-nav -->
			<span class="rating-disclaimer">Sign in to vote!</span>
		</div><!--rating-->
	</div>

	
	
	
</div><!-- row -->


<hr class="thick-rule">

<h2>Star rating</h2>
<div class="row">
	<div class="span6">
<pre class="prettyprint linenums">
<?php cleanup_code('<div class="star-rating">
	<span class="possible">
		<i class="icon-star icon-gray"></i>
		<i class="icon-star icon-gray"></i>
		<i class="icon-star icon-gray"></i>
		<i class="icon-star icon-gray"></i>
		<i class="icon-star icon-gray"></i>
	</span>
	<span class="rating">
		<i class="icon-star icon-primary"></i>
		<i class="icon-star icon-primary"></i>
		<i class="icon-star icon-primary"></i>
		<i class="icon-star-half icon-primary"></i>
	</span>
</div>') ?>
</pre>
	</div>
	
	<div class="span2">
		<ul class="lined-list">
			<li>
				<div class="star-rating">
					<span class="possible">
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
					</span>
					<span class="rating">
						<i class="icon-star-half icon-primary"></i>
					</span>
				</div>
			</li>
			<li>
				<div class="star-rating">
					<span class="possible">
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
					</span>
					<span class="rating">
						<i class="icon-star icon-primary"></i>
						<i class="icon-star-half icon-primary"></i>
					</span>
				</div>
			</li>
			<li>
				<div class="star-rating">
					<span class="possible">
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
					</span>
					<span class="rating">
						<i class="icon-star icon-primary"></i>
						<i class="icon-star icon-primary"></i>
						<i class="icon-star-half icon-primary"></i>
					</span>
				</div>
			</li>
			<li>
				<div class="star-rating">
					<span class="possible">
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
					</span>
					<span class="rating">
						<i class="icon-star icon-primary"></i>
						<i class="icon-star icon-primary"></i>
						<i class="icon-star icon-primary"></i>
						<i class="icon-star-half icon-primary"></i>
					</span>
				</div>
			</li>
			<li>
				<div class="star-rating">
					<span class="possible">
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
					</span>
					<span class="rating">
						<i class="icon-star icon-primary"></i>
						<i class="icon-star icon-primary"></i>
						<i class="icon-star icon-primary"></i>
						<i class="icon-star icon-primary"></i>
						<i class="icon-star-half icon-primary"></i>
					</span>
				</div>
			</li>
		</ul>
	</div>
	
	<div class="span2">
		<ul class="lined-list">
			<li>
				<div class="star-rating">
					<span class="possible">
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
					</span>
					<span class="rating">
						<i class="icon-star icon-primary"></i>
					</span>
				</div>
			</li>
			<li>
				<div class="star-rating">
					<span class="possible">
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
					</span>
					<span class="rating">
						<i class="icon-star icon-primary"></i>
						<i class="icon-star icon-primary"></i>
					</span>
				</div>
			</li>
			<li>
				<div class="star-rating">
					<span class="possible">
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
					</span>
					<span class="rating">
						<i class="icon-star icon-primary"></i>
						<i class="icon-star icon-primary"></i>
						<i class="icon-star icon-primary"></i>
					</span>
				</div>
			</li>
			<li>
				<div class="star-rating">
					<span class="possible">
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
					</span>
					<span class="rating">
						<i class="icon-star icon-primary"></i>
						<i class="icon-star icon-primary"></i>
						<i class="icon-star icon-primary"></i>
						<i class="icon-star icon-primary"></i>
					</span>
				</div>
			</li>
			<li>
				<div class="star-rating">
					<span class="possible">
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
						<i class="icon-star icon-gray"></i>
					</span>
					<span class="rating">
						<i class="icon-star icon-primary"></i>
						<i class="icon-star icon-primary"></i>
						<i class="icon-star icon-primary"></i>
						<i class="icon-star icon-primary"></i>
						<i class="icon-star icon-primary"></i>
					</span>
				</div>
			</li>
		</ul>
	</div>
</div>