<h1 class="section-header">Commenting</h1>

<pre class="prettyprint linenums">
<?php cleanup_code('<div class="comments">
	<header class="section-header">
		<h2 class="header-4 pull-left">10 Comments</h2>
		<a href="#comment-form" class="pull-right small-text">Leave a comment</a>
	</header>
	
	<ol class="unstyled comment-list">
		<li>
			<div class="comment">
				<div class="avatar">
					<div class="frame-container">
					    <div class="frame bordered">
					        <img src="…" alt="" />
					    </div>
					</div>
				</div>
				<header>
					<div class="pull-left">
						<p class="name header-5"><a href="#">…</a></p>
						<p class="title muted small-text">…</p>
					</div>
					<div class="pull-right">
						<p class="date muted small-text">…</p>
					</div>
				</header>
				<div class="entry">
					<p>…</p>
				</div>
				<footer>
					<a class="muted small-text" href="#"><i class="icon-comments"></i> Reply to this comment</a>
				</footer>
			</div>
		</li>
	</ol>
	
	<form class="form" id="comment-form">
		<fieldset class="well">
			<h3 class="header-5 section-header">Leave a comment</h3>
			<div class="comment">
				<div class="avatar">
					<div class="frame-container">
					    <div class="frame bordered">
					        <img src="…" alt="" />
					    </div>
					</div>
				</div>
				<header>
					<div class="pull-left">
						<p class="name header-5">…</p>
					</div>
					<div class="pull-right">
						<p class="not-you smaller-text">Not …? <a href="#">Sign out</a></p>
					</div>
				</header>
				<div class="entry">
					<label class="small-text">Comment</label>
					<textarea class="span5" rows="4"></textarea>
				</div>
				<footer>
					<div class="btn-row">
						<button class="btn btn-primary btn-small" type="submit">Submit</button>
						<a class="btn-note btn-small" href="#">Reset</a>
					</div>
				</footer>
			</div>
		</fieldset>
	</form>
</div>') ?>
</pre>

<hr class="white-space">

<div class="row">
	<div class="span6">
		<div class="comments">
			<header class="section-header">
				<h2 class="header-4 pull-left">10 Comments</h2>
				<a href="#comment-form" class="pull-right small-text">Leave a comment</a>
			</header>
			<ol class="unstyled comment-list">
				<li>
					<div class="comment">
						<div class="avatar">
							<div class="frame-container">
							    <div class="frame bordered">
							        <img src="http://lorempixel.com/75/75/abstract/1/" alt="" />
							    </div>
							</div>
						</div>
						<header>
							<div class="pull-left">
								<p class="name header-5"><a href="#">Mary Anne</a></p>
								<p class="title muted small-text">Consultant, Green Inc.</p>
							</div>
							<div class="pull-right">
								<p class="date muted small-text">10 days ago</p>
							</div>
						</header>
						<div class="entry">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pellentesque, diam et congue consequat, tortor ligula lobortis enim, eget mollis purus augue sit amet lectus. Sed molestie urna eu eros iaculis dignissim. Curabitur posuere, lectus nec cursus pellentesque, justo</p>
						</div>
						<footer>
							<a class="muted small-text" href="#"><i class="icon-comments"></i> Reply to this comment</a>
						</footer>
					</div>
				</li>
				
				<li>
					<div class="comment author-comment">	
						<div class="avatar">
							<div class="frame-container">
							    <div class="frame bordered">
							        <img src="http://lorempixel.com/75/75/abstract/2/" alt="" />
							    </div>
							</div>
						</div>
						<header>
							<div class="pull-left">
								<p class="name header-5"><a href="#">John Doe</a></p>
								<p class="title muted small-text">USGBC Staff</p>
							</div>
							<div class="pull-right">
								<p class="date muted small-text">10 days ago</p>
							</div>
						</header>
						<div class="entry">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pellentesque, diam et congue consequat, tortor ligula lobortis enim, eget mollis purus augue sit amet lectus. Sed molestie urna eu eros iaculis dignissim. Curabitur posuere, lectus nec cursus pellentesque, justo</p>
						</div>
						<footer>
							<a class="muted small-text" href="#"><i class="icon-comments"></i> Reply to this comment</a>
						</footer>
					</div>
					
					<ol class="unstyled replies">
						<li>
							<div class="comment">
								<div class="avatar">
									<div class="frame-container">
									    <div class="frame bordered">
									        <img src="http://lorempixel.com/75/75/abstract/1/" alt="" />
									    </div>
									</div>
								</div>
								<header>
									<div class="pull-left">
										<p class="name header-5"><a href="#">Mary Anne</a></p>
										<p class="title muted small-text">Consultant, Green Inc.</p>
									</div>
									<div class="pull-right">
										<p class="date muted small-text">10 days ago</p>
									</div>
								</header>
								<div class="entry">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pellentesque, diam et congue consequat, tortor ligula lobortis enim, eget mollis purus augue sit amet lectus. Sed molestie urna eu eros iaculis dignissim. Curabitur posuere, lectus nec cursus pellentesque, justo</p>
								</div>
							</div>
						</li>
					</ol>
				</li>
			</ol>
			
			<form class="form" id="comment-form">
				<fieldset class="well">
					<h3 class="header-5 section-header">Leave a comment</h3>
					<div class="comment">
						<div class="avatar">
							<div class="frame-container">
							    <div class="frame bordered">
							        <img src="http://lorempixel.com/75/75/abstract/3/" alt="" />
							    </div>
							</div>
						</div>
						<header>
							<div class="pull-left">
								<p class="name header-5">Andre Poremski</p>
							</div>
							<div class="pull-right">
								<p class="not-you smaller-text">Not Andre Poremski? <a href="#">Sign out</a></p>
							</div>
						</header>
						<div class="entry">
							<label class="small-text">Comment</label>
							<textarea rows="4"></textarea>
						</div>
						<footer>
							<div class="btn-row">
								<button class="btn btn-primary btn-small" type="submit">Submit</button>
								<a class="btn-note btn-small" href="#">Reset</a>
							</div>
						</footer>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
	<div class="span4">
		<div class="box">
			<h2>Author Comments</h2>
			<p>In the event of an author posting a comment on their own article, simply add the class <code>.author-comment</code> to <code>&lt;div class="comment"&gt;</code>.</p>
		</div>
		
		<div class="box">
			<h2>Replies</h2>
			<p>Comments in reply get nested into the comment's <code>&lt;li&gt;</code></p>
<pre class="prettyprint linenums">
<?php cleanup_code('<li>
	<div class="comment">…</div>
	
	<ol class="unstyled replies">
		<li>
			<div class="comment">
				<!-- Reply comment -->
			</div>
		</li>
	</ol>
</li>') ?>
</pre>
			<div class="alert alert-info small-text"><strong>Note:</strong> The <code>&lt;footer&gt;</code> with reply link should be removed on replies.</div>
		</div>
	</div>
</div>