<h1 class="section-header">Table Aggregation</h1>
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
			<tr class="ag-item block-link">
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
			<tr class="ag-item block-link">
				<td>
					<h3 class="header-5"><a href="#" class="block-link-src">BD+C 254: LEED 2009 for Healthcare</a></h3>
					<p class="smaller-text">Level 200 - ID #1556623</p>
				</td>
				<td>$55.00</td>
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
							<i class="icon-star icon-primary"></i>
							<i class="icon-star icon-primary"></i>
						</span>
					</div>
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

<div class="alert alert-info">Table aggregation is most commonly used for courses.</div>

<pre class="prettyprint linenums">
<?php cleanup_code('<div class="<div class="aggregation">">
	<header>
		<!-- controls -->
	</header>
	<table class="table-stylized ag-list ag-table">
		<thead>
			<tr>
				<th scope="col" class="col-large"><!-- Wide column --></th>
				<th scope="col" class="col-small"><!-- Narrow column --></th>
				<th scope="col" class="col-medium"><!-- Normal column --></th>
				<th scope="col" class="col-small"><!-- Narrow column --></th>
				<th scope="col" class="col-medium"><!-- Normal column --></th>
			</tr>
		</thead>
		<tbody>
			<tr class="ag-item block-link">
				<td>
					<h3 class="header-5"><a href="#" class="block-link-src"><!-- Course name --></a></h3>
					<p class="smaller-text"><!-- Course level & ID --></p>
				</td>
				<td>$55.00</td>
				<td>On demand</td>
				<td>
					<!-- Star rating -->
				</td>
				<td>
					<div class="credentials"> <!-- (if needed) -->
			            <img alt="…" title="…" src="…" />                   
			        </div>
				</td>
			</tr>
		</tbody>
	</table>
</div>') ?>
</pre>

