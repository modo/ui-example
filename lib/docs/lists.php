<h1 class="section-header">Lists</h1>





<div class="row">
	<div class="span3">
		<h2>Unordered lists</h2>
		<p>
<pre class="prettyprint linenums">
<? cleanup_code('<ul>
	<li>…</li>
</ul>') ?>
</pre>
		</p>
		
		<ul>
			<li>Lorem ipsum dolor </li>
			<li>Consectetur adipiscing</li>
			<li>Nulla volutpat aliquam velit
				<ul>
					<li>Phasellus iaculis neque</li>
					<li>Ac tristique libero volutpat at</li>
				</ul>
			</li>
			<li>Aenean sit amet erat nunc</li>
			<li>Eget porttitor lorem</li>
		</ul>
	</div>
	
	<div class="span3">
		<h2>Ordered lists</h2>
		<p>
<pre class="prettyprint linenums">
<? cleanup_code('<ol>
	<li>…</li>
</ol>') ?>
</pre>
		</p>
		<ol>
			<li>Lorem ipsum dolor </li>
			<li>Consectetur adipiscing</li>
			<li>Nulla volutpat aliquam velit
				<ol>
					<li>Phasellus iaculis neque</li>
					<li>Ac tristique libero volutpat at</li>
				</ol>
			</li>
			<li>Aenean sit amet erat nunc</li>
			<li>Eget porttitor lorem</li>
		</ol>
	</div>
	<div class="span4">
			<h2>Unstyled lists</h2>
			<p>
	<pre class="prettyprint linenums">
<? cleanup_code('<ul class="unstyled-list">
	<li>…</li>
</ul>') ?>
	</pre>
			</p>
			<ul class="unstyled-list">
				<li>Lorem ipsum dolor </li>
				<li>Consectetur adipiscing</li>
				<li>Nulla volutpat aliquam velit
					<ul>
						<li>Phasellus iaculis neque</li>
						<li>Ac tristique libero volutpat at</li>
					</ul>
				</li>
				<li>Aenean sit amet erat nunc</li>
				<li>Eget porttitor lorem</li>
			</ul>
		</div>	
</div><!-- row -->

<hr class="white-space" />

<div class="row">
	
	<div class="span3">
		<h2>Lined-lists</h2>
		<p>
<pre class="prettyprint linenums small-text">
<? cleanup_code('<ul class="lined-list">
	<li>…</li>
	<li>…</li>
</ul>') ?>
</pre>
		</p>
		<ul class="lined-list">
			<li>Lorem ipsum dolor </li>
			<li>Consectetur adipiscing</li>
			<li>Nulla volutpat aliquam velit</li>
			<li>Eget porttitor lorem</li>
		</ul>
		<div class="alert alert-info smaller-text">
			<strong>Note: </strong>Works on any list type.
		</div>
		
	</div>
	<div class="span3">
		<h2>Definition lists</h2>
		<p>
<pre class="prettyprint linenums small-text">
<? cleanup_code('<dl>
	<dt>…</dt>
	<dd>…</dd>
</dl>') ?>
</pre>
		</p>
		<dl>
			<dt>Lorem ipsum dolor</dt>
			<dd>Consectetur adipiscing</dd>
			<dt>Phasellus iaculis neque</dt>
			<dd>Ac tristique libero volutpat at</dd>
			<dt>Aenean sit amet erat nunc</dt>
			<dd>Eget porttitor lorem</dd>
		</dl>
	</div>	


<div class="span4">
		<h2>Styled lists</h2>
		<p>
<pre class="prettyprint linenums small-text">
<? cleanup_code('<ul class="styled-list">
	<li>…</li>
	<li>…</li>
</ul>') ?>
</pre>
		</p>
		<ul class="styled-list">
			<li>Nulla volutpat aliquam velit
				<ul>
					<li>Phasellus iaculis neque</li>
					<li>Ac tristique libero volutpat at</li>
				</ul>
			</li>
			<li>Aenean sit amet erat nunc</li>
			<li>Eget porttitor lorem</li>
		</ul>
	</div>
</div><!-- row -->










