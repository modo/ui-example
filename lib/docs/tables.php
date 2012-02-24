<h1 class="section-header">Tables</h1>			            	
	<h2>Basic table markup</h2>
<pre class="prettyprint linenums">
<? cleanup_code('<table>
	<thead>
		<tr>
			<th>…</th>
			<th>…</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>…</th>
			<th>…</th>
		</tr>
		<tr>
			<th>…</th>
			<th>…</th>
		</tr>
		<tr>
			<th>…</th>
			<th>…</th>
		</tr>
	</tbody>
</table>') ?>
</pre>

<hr class="thick-rule" />

<div class="row">
	<div class="span10">
		<h2>Table options</h2>
	</div>
    <div class="span4">
		<h3 class="header-4">Minimal table</h3>
<pre class="prettyprint linenums">
<? cleanup_code('<table>
	…
</table>') ?>
</pre>
    </div>
	<div class="span6">
		<table>
		<thead>
		<tr>
		<th>#</th>
		<th>Make</th>
		<th>Model</th>
		<th>Country</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>1</td>
		<td>Audi</td>
		<td>R8</td>
		<td>Germany</td>
		</tr>
		<tr>
		<td>2</td>
		<td>Nissan</td>
		<td>GT-R</td>
		<td>Japan</td>
		</tr>
		<tr>
		<td>3</td>
		<td>Cheverolet</td>
		<td>Camaro ZL1</td>
		<td>USA</td>
		</tr>
		</tbody>
		</table>
	</div>
</div>

<hr class="white-space" />

<div class="row">
    <div class="span4">
		<h3 class="header-4">Minimal table with borders</h3>
<pre class="prettyprint linenums">
<? cleanup_code('<table class="table-bordered">
	…
</table>') ?>
</pre>
    </div>
	<div class="span6">
		<table class="table-bordered">
		<thead>
		<tr>
		<th>#</th>
		<th>Make</th>
		<th>Model</th>
		<th>Country</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>1</td>
		<td>Audi</td>
		<td>R8</td>
		<td>Germany</td>
		</tr>
		<tr>
		<td>2</td>
		<td>Nissan</td>
		<td>GT-R</td>
		<td>Japan</td>
		</tr>
		<tr>
		<td>3</td>
		<td>Cheverolet</td>
		<td>Camaro ZL1</td>
		<td>USA</td>
		</tr>
		</tbody>
		</table>
	</div>
</div>



<hr class="white-space" />

<div class="row">
    <div class="span4">
		<h3 class="header-4">Stylized table</h3>
<pre class="prettyprint linenums">
<? cleanup_code('<table class="table-stylized">
	…
</table>') ?>
</pre>
    </div>
	<div class="span6">
		<table class="table-stylized">
		<thead>
		<tr>
		<th>#</th>
		<th>Make</th>
		<th>Model</th>
		<th>Country</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>1</td>
		<td>Audi</td>
		<td>R8</td>
		<td>Germany</td>
		</tr>
		<tr>
		<td>2</td>
		<td>Nissan</td>
		<td>GT-R</td>
		<td>Japan</td>
		</tr>
		<tr>
		<td>3</td>
		<td>Cheverolet</td>
		<td>Camaro ZL1</td>
		<td>USA</td>
		</tr>
		</tbody>
		</table>
	</div>
</div>

<hr class="white-space" />


<div class="row">
    <div class="span4">
		<h3 class="header-4">Zebra-striped table</h3>
<pre class="prettyprint linenums">
<? cleanup_code('<table class="table-stylized">
	…
</table>') ?>
</pre>
		<p class="small-text"><strong>Note:</strong> This demo also uses the <code>.small-text</code> &amp; <code>.smaller-text</code> classes to adjust font size.</p>
    </div>
	<div class="span6">
		<table class="table-bordered table-striped">
		<thead class="small-text">
		<tr>
		<th>#</th>
		<th>Make</th>
		<th>Model</th>
		<th>Country</th>
		</tr>
		</thead>
		<tbody class="smaller-text">
		<tr>
		<td>1</td>
		<td>Audi</td>
		<td>R8</td>
		<td>Germany</td>
		</tr>
		<tr>
		<td>2</td>
		<td>Nissan</td>
		<td>GT-R</td>
		<td>Japan</td>
		</tr>
		<tr>
		<td>3</td>
		<td>Cheverolet</td>
		<td>Corvette</td>
		<td>USA</td>
		</tr>
		<tr>
		<td>3</td>
		<td>lamborghini</td>
		<td>Gallardo</td>
		<td>Italy</td>
		</tr>
		<tr>
		<td>3</td>
		<td>Ford</td>
		<td>GT</td>
		<td>USA</td>
		</tr>
		<tr>
		<td>3</td>
		<td>Aston Martin</td>
		<td>V8</td>
		<td>UK</td>
		</tr>
		</tbody>
		</table>
	</div>
</div>
