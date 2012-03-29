<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 ie oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 ie oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 ie oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Smart Filter Demo | USGBC Blank Template</title>
	<meta name="description" content="" />	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	
	<?php include( 'lib/inc/meta-head.php' ); ?>
</head>
<body>
	<div id="body-container">
		<!-- Header -->
		<?php include( 'lib/inc/header.php' ); ?>
			
			<div id="content" class="row">
				<div class="span2">
					<a href="#smart-filters" class="smart-filter-trigger btn btn-small">Smart filters</a>
					<nav id="sub-section-nav">
						<ul class="nav nav-list filter-nav">
							<li class="active"><a href="">All</a></li>
							<li><a href="#">Live</a></li>
							<li><a href="#">On demand</a></li>
							<li>
								<span>Saved searches</span>
								<ul class="nav nav-list">
									<li><a href="#">Chuck's courses</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
				
				<div class="span10">
					
					<div class="row">
			            <article id="mainCol" class="span10">
			            	<div id="smartfilter">
			            		<form class="form form-inline">
				            		<fieldset class="match">
				            			<label class="radio"><input type="radio" name="match" value="all" checked /> Match <strong>all</strong> results</label>
				            			<label class="radio"><input type="radio" name="match" value="any" /> Match <strong>any</strong> results</label>
				            			<a class="smartfilter-clear pull-right" href="#">Clear filters</a>
				            		</fieldset>
				            		
				            		<div id="filter-set">
				            		
				            		</div>
				            		
				            		<fieldset class="actions">
					            		<div class="btn-row pull-right">
					            			<button type="save" class="btn btn-small" href="#">Save</button>
					            			<button type="submit" class="btn btn-small btn-primary" href="#">Apply</button>
					            		</div>
				            		</fieldset>
				            	</form>
				            </div>
			            
			            	<form method="post" action="/search/" class="search search-jumbo search-green well form-inline">
			            	    <input type="text" class="input-medium" placeholder="Search projects" />
			            	    <button type="submit" class="btn btn-clear"><i class="icon-search"></i></button>
			            	</form>
			            	
			            	<div class="box search-msg">
			            	    <p class="pull-left"><strong>195,455</strong> results in <strong>All</strong>.</p>
			            	</div>
			            	
			            	<div class="aggregation">
			            		<header>
			            			<div class="ag-control pull-left">
			            			    <p class="pull-left">Sort</p>
			            			    <div class="btn-group pull-left">
			            			        <a class="btn btn-micro dropdown-toggle" data-toggle="dropdown" href="#">Newest <span class="caret"></span></a>
			            			        <ul class="dropdown-menu">
			            			            <li class="active"><a href="#">Newest</a></li>
			            			            <li><a href="#">A-Z</a></li>
			            			        </ul>
			            			    </div>
			            			</div>
			            			
			            			<div class="ag-control pull-left">
			            			    <p class="pull-left">Results</p>
			            			    <div class="btn-group pull-left">
			            			        <a class="btn btn-micro dropdown-toggle" data-toggle="dropdown" href="#">30 <span class="caret"></span></a>
			            			        <ul class="dropdown-menu">
			            			            <li class="active"><a href="#">30</a></li>
			            			            <li><a href="#">60</a></li>
			            			            <li><a href="#">120</a></li>
			            			        </ul>
			            			    </div>
			            			</div>
			            		</header>
			            		<table class="table-stylized ag-list ag-table-view">
			            			<thead>
			            				<tr>
			            					<th scope="col" class="col-large">Name</th>
			            					<th scope="col" class="col-small">Price</th>
			            					<th scope="col" class="col-medium">When</th>
			            					<th scope="col" class="col-small">Rating</th>
			            					<th scope="col" class="col-medium">LEED-Specific</th>
			            				</tr>
			            			</thead>
			            			<tbody>
			            				<tr class="ag-item block-link" style="cursor: pointer; " title="BD+C 253: Preparing for LEED AP BD+C Credential">
			            					<td>
			            						<h3 class="header-5"><a href="#" class="block-link-src">BD+C 253: Preparing for LEED AP BD+C Credential</a></h3>
			            						<p class="smaller-text">Level 200 - ID #1222213</p>
			            					</td>
			            					<td>$595.00</td>
			            					<td>On demand</td>
			            					<td>
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
			            					</td>
			            					<td>&nbsp;</td>
			            				</tr>
			            				<tr class="ag-item block-link" style="cursor: pointer; " title="BD+C 254: LEED 2009 for Healthcare">
			            					<td>
			            						<h3 class="header-5"><a href="#" class="block-link-src">BD+C 254: LEED 2009 for Healthcare</a></h3>
			            						<p class="smaller-text">Level 200 - ID #1556623</p>
			            					</td>
			            					<td>$55.00</td>
			            					<td>On demand</td>
			            					<td>
			            						<div class="star-rating">no rating</div>
			            					</td>
			            					<td>
			            						<div class="credentials">
			            							<img alt="LEED AP BD+C" title="John Adams is a LEED Accredited Professional with Building Design &amp; Construction Specialty (LEED AP BD+C)" src="http://phase2.usgbc.trav.mododev.com/themes/usgbc/lib/img/cred-icons/credential-ap-bdc.gif">
			            							<img alt="LEED AP HOMES" title="John Adams is a LEED Accredited Professional with Homes Specialty (LEED AP Homes)" src="http://phase2.usgbc.trav.mododev.com/themes/usgbc/lib/img/cred-icons/credential-ap-homes.gif">                   
			            						</div>
			            					</td>
			            				</tr>
			            			</tbody>
			            		</table>
			            	</div>
			            </article>
					</div>
				</div>
			</div>
			
			<?php include( 'lib/inc/footer.php' ); ?>
		</div>
	</div>
	
	<!-- Scripts -->
	<script src="lib/bootstrap/js/smartfilters.js"></script>
	<?php include('lib/inc/meta-footer.php'); ?>
	
	<script>
		$(document).ready(function(){
			$('#smartfilter').smartfilter({
				filterDefinitions: 'lib/js/sample-filters.json',
				loadOpen: true,
				sample: ['leed', 'location', 'rating'],
				available: ['leed', 'location', 'rating', 'age', 'somethingelse']
			});
		});
	</script>
</body>
</html>