<h1 class="section-header">Noise</h1>
<div class="row">
	<div class="span5">
		<p>With minimal effort, a simple noise effect can be applied utilising the <a href="https://github.com/ajcates/jQuery-Noise" title="View jQuery-Noise on github">jQuery-Noise</a> plugin.</p>
<pre class="prettyprint linenums">
<? cleanup_code("$('.noise-box').noisy({
    opacity: 0.05,
    monochromatic: true
});") ?>
</pre>
	</div>
	<script type="text/javascript">
	$( document ).ready( function() {
		$('.noise-box').noisy({
			opacity: 0.07,
			monochromatic: true
		});
    });
	</script>
	<div class="span5">
		<div class="box noise-box" style="height: 129px;">
			This box has been noiseified.
		</div>
	</div>
</div><!-- row -->