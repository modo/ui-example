<h1 class="section-header">Grid System</h1>
<div class="row">
	<div class="span6">
		<p>The default grid system provided is a 940px-wide, 12-column grid.</p>
		<p>It also has four responsive variations for various devices and resolutions: phone, tablet portrait, table landscape and small desktops, and large widescreen desktops.</p>
	</div>
	<div class="span4">
<pre class="prettyprint linenums">
<? cleanup_code('<div class="row">
	<div class="span4">…</div>
	<div class="span8">…</div>
</div>') ?>
</pre>
	</div>
</div>

<div class="alert alert-info">Because of the layout of these documentations, the example below is using a 10 column grid. The syntax and methods are the same.</div>

<div class="grid-example">
	<div class="row">
		<div class="span1">1</div>
		<div class="span1">1</div>
		<div class="span1">1</div>
		<div class="span1">1</div>
		<div class="span1">1</div>
		<div class="span1">1</div>
		<div class="span1">1</div>
		<div class="span1">1</div>
		<div class="span1">1</div>
		<div class="span1">1</div>
	</div>
	<div class="row">
		<div class="span2">2</div>
		<div class="span2">2</div>
		<div class="span2">2</div>
		<div class="span2">2</div>
		<div class="span2">2</div>
	</div>
	<div class="row">
		<div class="span3">3</div>
		<div class="span4">4</div>
		<div class="span3">3</div>
	</div>
	<div class="row">
		<div class="span5">5</div>
		<div class="span5">5</div>
	</div>
	<div class="row">
		<div class="span2">2</div>
		<div class="span6">6</div>
		<div class="span2">2</div>
	</div>
	<div class="row">
		<div class="span7">7</div>
		<div class="span3">3</div>
	</div>
	<div class="row">
		<div class="span1">1</div>
		<div class="span8">8</div>
		<div class="span1">1</div>
	</div>
	<div class="row">
		<div class="span10">10</div>
	</div>
</div>

<hr class="white-space">

<h2>Offsetting columns</h2>
<div class="grid-example" style="margin-bottom: 25px;">
	<div class="row">
		<div class="span4">4</div>
		<div class="span4 offset2">4 offset 2</div>
	</div>
	
	<div class="row">
		<div class="span3 offset3">3 offset 3</div>
		<div class="span3 offset1">3 offset 1</div>
	</div>
	
	<div class="row">
		<div class="span6 offset4">6 offset 4</div>
	</div>
</div>
<pre class="prettyprint linenums">
<? cleanup_code('<div class="row">
	<div class="span4">…</div>
	<div class="span4 offset2">…</div>
</div>') ?>
</pre>

<hr class="white-space">

<h2>Nesting columns</h2>
<div class="grid-example" style="margin-bottom: 25px;">
	<div class="row">
		<div class="span10">
			Level 1 of column
			<div class="row">
				<div class="span5">Level 2</div>
				<div class="span5">Level 2</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="span5">
		<p>To nest your content, just add a new <code>.row</code> and set of <code>.span*</code> columns within an existing <code>.span*</code> column.</p>
		<p>Nested rows should include a set of columns that add up to the number of columns of it's parent. For example, two nested <code>.span3</code> columns should be placed within a <code>.span6</code>.</p>
	</div>
	<div class="span5">
<pre class="prettyprint linenums">
<? cleanup_code('<div class="span10">
	Level 1 of column
	<div class="row">
		<div class="span5">Level 2</div>
		<div class="span5">Level 2</div>
	</div>
</div>') ?>
</pre>
	</div>
</div>

<hr class="white-space">

<h2>Responsive utility classes</h2>

<div class="row">
	<div class="span7">
		<table class="table-bordered table-striped small-text responsive-utilities">
			<thead>
				<tr>
					<th scope="col">Class</th>
					<th scope="col">Phones <br><small class="muted smaller-text">480px and below</small></th>
					<th scope="col">Tablets <br><small class="muted smaller-text">767px and below</small></th>
					<th scope="col">Desktops <br><small class="muted smaller-text">768px and above</small></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><code>.visible-phone</code></td>
					<td class="is-visible">Visible</td>
					<td class="is-hidden">Hidden</td>
					<td class="is-hidden">Hidden</td>
				</tr>
				<tr>
					<td><code>.visible-tablet</code></td>
					<td class="is-hidden">Hidden</td>
					<td class="is-visible">Visible</td>
					<td class="is-hidden">Hidden</td>
				</tr>
				<tr>
					<td><code>.visible-desktop</code></td>
					<td class="is-hidden">Hidden</td>
					<td class="is-hidden">Hidden</td>
					<td class="is-visible">Visible</td>
				</tr>
				<tr>
					<td><code>.hidden-phone</code></td>
					<td class="is-hidden">Hidden</td>
					<td class="is-visible">Visible</td>
					<td class="is-visible">Visible</td>
				</tr>
				<tr>
					<td><code>.hidden-tablet</code></td>
					<td class="is-visible">Visible</td>
					<td class="is-hidden">Hidden</td>
					<td class="is-visible">Visible</td>
				</tr>
				<tr>
					<td><code>.hidden-desktop</code></td>
					<td class="is-visible">Visible</td>
					<td class="is-visible">Visible</td>
					<td class="is-hidden">Hidden</td>
				</tr>
			</tbody>
		</table>
		
		<h4>Test case</h4>
		<p>Resize your browser or load on different devices to test the above classes.</p>

		<h5>Visible on...</h5>
		<ul class="responsive-utilities-test">
			<li>Phone<span class="visible-phone">✔ Phone</span></li>
			<li>Tablet<span class="visible-tablet">✔ Tablet</span></li>
			<li>Desktop<span class="visible-desktop">✔ Desktop</span></li>
		</ul>

		<h5>Hidden on...</h5>
		<ul class="responsive-utilities-test hidden-on">
			<li>Phone<span class="hidden-phone">✔ Phone</span></li>
			<li>Tablet<span class="hidden-tablet">✔ Tablet</span></li>
			<li>Desktop<span class="hidden-desktop">✔ Desktop</span></li>
		</ul>
	</div>
	<div class="span3">
		<h3 class="header-4">What are they</h3>
		<p>For faster mobile-friendly development, use these basic utility classes for showing and hiding content by device.</p>
		
		<h3 class="header-4">When to use</h3>
		<p>Use on a limited basis and avoid creating entirely different versions of the same site. Instead, use them to complement each device's presentation.</p>
		<p>For example, you might show a <code>&lt;select&gt;</code> element for nav on mobile layouts, but not on tablets or desktops.</p>
	</div>
</div>