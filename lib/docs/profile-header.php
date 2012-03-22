<h1 class="section-header">Profile Header</h1>
<header class="profile-head">
	<div class="well">
		<div class="row top">
			<div class="span2">
				<div class="frame-container">
		            <div class="frame bordered">
		                <img src="http://f.cl.ly/items/1I15120S0g0P3m404746/Image%202012.03.21%202:11:06%20PM.png" alt="" />
		            </div>
		        </div>
			</div>
			<div class="span8">
				<h1 class="section-header header-2">John Adams</h1>
				<h2 class="header-5">General Manager, <a href="#">Georgia Institute of Technology</a></h2>
				
				<div class="credentials">
					<img alt="LEED AP BD+C" title="John Adams is a LEED Accredited Professional with Building Design &amp; Construction Specialty (LEED AP BD+C)" src="http://phase2.usgbc.trav.mododev.com/themes/usgbc/lib/img/cred-icons/credential-ap-bdc.gif" />
					<img alt="LEED AP HOMES" title="John Adams is a LEED Accredited Professional with Homes Specialty (LEED AP Homes)" src="http://phase2.usgbc.trav.mododev.com/themes/usgbc/lib/img/cred-icons/credential-ap-homes.gif" />                   
				</div>
				
				<div class="row">
					<div class="span2">
						<ul class="unstyled smaller-text">
							<li>760 Spring Street<br />
							Suite 330<br />
							Mableton, GA 30332-0640</li>
							<li><a href="#"><i class="icon-map-marker icon-black"></i> Map</a></li>
						</ul>
					</div>
					<div class="span2">
						<ul class="unstyled smaller-text">
							<li>703-123-1234</li>
						</ul>
					</div>
					<div class="span2">
						<ul class="unstyled smaller-text">
							<li><a href="#">Visit website</a></li>
							<li><a href="#"><i class="icon-envelope icon-black"></i> jadams@greenuguard.org</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom">
		<div class="row">
			<nav class="span7">
				<ul class="nav nav-pills">
					<li class="active"><a href="#">Overview</a></li>
					<li><a href="#">Employees</a></li>
					<li><a href="#">Projects</a></li>
					<li><a href="#">Activity</a></li>
				</ul>
			</nav>
			<div class="span3">
				<div class="btn-row pull-right">
					<p>Follow on</p>
					<a href="#"><i class="icon-social-twitter icon-med"></i></a>
					<a href="#"><i class="icon-social-facebook icon-med"></i></a>
					<a href="#"><i class="icon-social-linked-in icon-med"></i></a>
				</div>
			</div>
		</div>
	</div>
</header>

<pre class="prettyprint linenums">
<? cleanup_code('<header class="profile-head">
	<div class="well">
		<div class="row top">
			<div class="span2">
				<div class="frame-container">
		            <div class="frame bordered">
		                <img src="…" alt="" />
		            </div>
		        </div>
			</div>
			<div class="span8">
				<h1 class="section-header header-2"><!-- Name --></h1>
				<h2 class="header-5"><!-- Sub line (Title, Organization, etc) --></h2>
				
				<div class="credentials"> <!-- (if needed) -->
					<img alt="…" title="…" src="…" />                   
				</div>
				
				<div class="row">
					<div class="span2">
						<ul class="unstyled smaller-text">
							<li><!-- Address --><br />
							…<br />
							…</li>
							<li><a href="#"><i class="icon-map-marker icon-black"></i> Map</a></li>
						</ul>
					</div>
					<div class="span2">
						<ul class="unstyled smaller-text">
							<li><!-- Phone --></li>
						</ul>
					</div>
					<div class="span2">
						<ul class="unstyled smaller-text">
							<li><a href="#">Visit website</a></li>
							<li><a href="#"><i class="icon-envelope icon-black"></i> <!-- Email --></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom">
		<div class="row">
			<nav class="span7">
				<ul class="nav nav-pills">
					<li><a href="#">Overview</a></li>
					…
				</ul>
			</nav>
			<div class="span3">
				<div class="btn-row pull-right">
					<p>Follow on</p>
					<a href="#"><i class="icon-social-twitter icon-med"></i></a>
					…
				</div>
			</div>
		</div>
	</div>
</header>') ?>
</pre>