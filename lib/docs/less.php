<h1 class="section-header">LESS Vars &amp; Mixins</h1>

<hr class="white-space">

<h2>Variables</h2>
<p>Managing colors and pixel values in CSS can be a bit of a pain, usually full of copy and paste. Not with LESS though&mdash;assign colors or pixel values as variables and change them once.</p>
<div class="row">
	<div class="span5">
		<h3>Links</h3>
		<table class="table-bordered table-striped small-text">
			<tr>
				<td><code>@linkColor</code></td>
				<td><code>@teal</code></td>
				<td class="swatch-col"><i class="swatch linkColor"></i></td>
			</tr>
			<tr>
				<td><code>@linkColorHover</code></td>
				<td><pre>darken(@linkColor, 15%);</pre></td>
				<td class="swatch-col"><i class="swatch linkColorHover"></i></td>
			</tr>
		</table>
		
		<h3>Grid</h3>
		<table class="table-bordered table-striped small-text">
			<tr>
				<td><code>@gridColumns</code></td>
				<td>12</td>
			</tr>
			<tr>
				<td><code>@gridColumnWidth</code></td>
				<td>60px</td>
			</tr>
			<tr>
				<td><code>@gridGutterWidth</code></td>
				<td>20px</td>
			</tr>
			<tr>
				<td><code>@gridRowWidth</code></td>
				<td><pre>(@gridColumns * @gridColumnWidth) + (@gridGutterWidth * (@gridColumns - 1))</pre></td>
			</tr>
			<tr>
				<td><code>@fluidGridColumnWidth</code></td>
				<td>6.382978723%</td>
			</tr>
			<tr>
				<td><code>@fluidGridGutterWidth</code></td>
				<td>2.127659574%</td>
			</tr>
		</table>
		
		<h3>Typography</h3>
		<table class="table-bordered table-striped small-text">
			<tr>
				<td class="span2"><code>@baseFontSize</code></td>
				<td>14px</td>
			</tr>
			<tr>
				<td class="span2"><code>@baseLineHeight</code></td>
				<td>1.3</td>
			</tr>
			<tr>
				<td class="span2"><code>@textColor</code></td>
				<td><code>@grayDark</code></td>
			</tr>
			<tr>
				<td class="span2"><code>@baseMargin</code></td>
				<td><pre>@baseFontSize * 1.14</pre></td>
			</tr>
			<tr>
				<td class="span2"><code>@baseFontFamily</code></td>
				<td><code>@sansFamily</code></td>
			</tr>
			<tr>
				<td class="span2"><code>@sansFamily</code></td>
				<td><pre>"Helvetica Neue", Arial, Helvetica, sans-serif</pre></td>
			</tr>
			<tr>
				<td class="span2"><code>@serifFamily</code></td>
				<td><pre>Georgia, Times, serif</pre></td>
			</tr>
			<tr>
				<td class="span2"><code>@monospacedFamily</code></td>
				<td><pre>Inconsolata, "Andale Mono", Monaco, Courier, monospace</pre></td>
			</tr>
			<tr>
				<td class="span2"><code>@geometricFamily</code></td>
				<td><pre>"proxima-nova-1","proxima-nova-2",sans-serif</pre></td>
			</tr>
			<tr>
				<td class="span2"><code>@condensedFamily</code></td>
				<td><pre>"ff-din-web-condensed-1", "ff-din-web-condensed-2", sans-serif</code></pre>
			</tr>
		</table>
	</div>
	<div class="span5">
		<h3>Main colors</h3>
		<table class="table-bordered table-striped small-text">
			<tr>
				<td><code>@white</code></td>
				<td>#FFF;</td>
				<td class="swatch-col"><i class="swatch white"></i></td>
			</tr>
			<tr>
				<td><code>@gray</code></td>
				<td>#87898B;</td>
				<td class="swatch-col"><i class="swatch gray"></i></td>
			</tr>
			<tr>
				<td><code>@black</code></td>
				<td>#000;</td>
				<td class="swatch-col"><i class="swatch black"></i></td>
			</tr>
			<tr>
				<td><code>@green</code></td>
				<td>#86C240</td>
				<td class="swatch-col"><i class="swatch green"></i></td>
			</tr>
			<tr>
				<td><code>@red</code></td>
				<td>#C00</td>
				<td class="swatch-col"><i class="swatch red"></i></td>
			</tr>
			<tr>
				<td><code>@yellow</code></td>
				<td>#F7B312</td>
				<td class="swatch-col"><i class="swatch yellow"></i></td>
			</tr>
			<tr>
				<td><code>@orange</code></td>
				<td>#D6751E</td>
				<td class="swatch-col"><i class="swatch orange"></i></td>
			</tr>
			<tr>
				<td><code>@purple</code></td>
				<td>#5A4A5E</td>
				<td class="swatch-col"><i class="swatch purple"></i></td>
			</tr>
			<tr>
				<td><code>@blue</code></td>
				<td>#329ABD</td>
				<td class="swatch-col"><i class="swatch blue"></i></td>
			</tr>
			<tr>
				<td><code>@navy</code></td>
				<td>#3A576C</td>
				<td class="swatch-col"><i class="swatch navy"></i></td>
			</tr>
			<tr>
				<td><code>@teal</code></td>
				<td>#17AECB</td>
				<td class="swatch-col"><i class="swatch teal"></i></td>
			</tr>
			<tr>
				<td><code>@aqua</code></td>
				<td>#7EC0B0</td>
				<td class="swatch-col"><i class="swatch aqua"></i></td>
			</tr>
			<tr>
				<td><code>@tan</code></td>
				<td>#B7B38C</td>
				<td class="swatch-col"><i class="swatch tan"></i></td>
			</tr>
		</table>
		
		<h3>Grayscale</h3>
		<table class="table-bordered table-striped small-text">
			<tr>
				<td><code>@grayDarker</code></td>
				<td><pre>darken(@gray, 35%)</pre></td>
				<td class="swatch-col"><i class="swatch grayDarker"></i></td>
			</tr>
			<tr>
				<td><code>@grayDark</code></td>
				<td><pre>darken(@gray, 26%)</pre></td>
				<td class="swatch-col"><i class="swatch grayDark"></i></td>
			</tr>
			<tr>
				<td><code>@grayLight</code></td>
				<td><pre>lighten(@gray, 10%)</pre></td>
				<td class="swatch-col"><i class="swatch grayLight"></i></td>
			</tr>
			<tr>
				<td><code>@grayLighter</code></td>
				<td><pre>lighten(@gray, 18%)</pre></td>
				<td class="swatch-col"><i class="swatch grayLighter"></i></td>
			</tr>
			<tr>
				<td><code>@grayLightest</code></td>
				<td><pre>lighten(@gray, 42%)</pre></td>
				<td class="swatch-col"><i class="swatch grayLightest"></i></td>
			</tr>
		</table>
		
		<h3>Variants</h3>
		<table class="table-bordered table-striped small-text">
			<tr>
				<td><code>@tealDarker</code></td>
				<td><pre>desaturate(@teal, 65%)</pre></td>
				<td class="swatch-col"><i class="swatch tealDarker"></i></td>
			</tr>
			<tr>
				<td><code>@tealDark</code></td>
				<td><pre>desaturate(@teal, 34%)</pre></td>
				<td class="swatch-col"><i class="swatch tealDark"></i></td>
			</tr>
			<tr>
				<td><code>@tealLight</code></td>
				<td><pre>desaturate(lighten(@tealDark, 35%),10%)</pre></td>
				<td class="swatch-col"><i class="swatch tealLight"></i></td>
			</tr>
			<tr>
				<td><code>@tealLighter</code></td>
				<td><pre>lighten(@tealDark, 51%)</pre></td>
				<td class="swatch-col"><i class="swatch tealLighter"></i></td>
			</tr>
			<tr>
				<td><code>greenDark</code></td>
				<td><pre>darken(@green, 13%);</pre></td>
				<td class="swatch-col"><i class="swatch greenDark"></i></td>
			</tr>
		</table>
	</div>
</div>

<hr class="white-space">

<h3>Components</h3>
<div class="row">
	<div class="span5">
		<h4>Buttons</h4>
		<table class="table-bordered table-striped small-text">
			<tr>
				<td><code>@primaryButtonBackround</code></td>
				<td><code>@linkColor</code></td>
				<td class="swatch-col"><i class="swatch primaryButtonBackground"></i></td>
			</tr>
		</table>
		
		<h4>Nav Bar</h4>
		<table class="table-bordered table-striped small-text">
			<tr>
				<td><code>@navbarHeight</code></td>
				<td colspan="2">40px</td>
			</tr>
			<tr>
				<td><code>@navbarBackground</code></td>
				<td><pre>lighten(@gray, 36%)</pre></td>
				<td class="swatch-col"><i class="swatch navbarBackground"></i></td>
			</tr>
			<tr>
				<td><code>@navbarBackgroundHighlight</code></td>
				<td><code>@white</code></td>
				<td class="swatch-col"><i class="swatch navbarBackgroundHighlight"></i></td>
			</tr>
			<tr>
				<td><code>@navbarText</code></td>
				<td><code>@grayLight</code></td>
				<td class="swatch-col"><i class="swatch navbarText"></i></td>
			</tr>
			<tr>
				<td><code>@navbarLinkColor</code></td>
				<td><code>@gray</code></td>
				<td class="swatch-col"><i class="swatch navbarLinkColor"></i></td>
			</tr>
			<tr>
				<td><code>@navbarLinkColorHover</code></td>
				<td><code>@grayDark</code></td>
				<td class="swatch-col"><i class="swatch navbarLinkColorHover"></i></td>
			</tr>
			<tr>
				<td><code>@navbarLinkColorActive</code></td>
				<td><code>@greenDark</code></td>
				<td class="swatch-col"><i class="swatch navbarLinkColorActive"></i></td>
			</tr>
		</table>
		
		<h4>Images</h4>
		<table class="table-bordered table-striped small-text">
			<tr>
				<td><code>@baseImageURL</code></td>
				<td>Location of base images</td>
				<td><pre>"../base/img"</pre></td>
			</tr>
			<tr>
				<td><code>@usgbcImageURL</code></td>
				<td>Location of bootstrap images</td>
				<td><pre>"../img"</pre></td>
			</tr>
			<tr>
				<td><code>@noise1</code></td>
				<td>1% noise overlay</td>
				<td><pre>url('@{usgbcImageURL}/noise-1.png')</pre></td>
			</tr>
			<tr>
				<td><code>@noise3</code></td>
				<td>3% noise overlay</td>
				<td><pre>url('@{usgbcImageURL}/noise-3.png')</pre></td>
			</tr>
		</table>
		
		<h4>Z-Indexes</h4>
		<table class="table-bordered table-striped small-text">
			<tr>
				<td><code>@zindexDropdown</code></td>
				<td><code>1000</code></td>
			</tr>
			<tr>
				<td><code>@zindexPopover</code></td>
				<td><code>1010</code></td>
			</tr>
			<tr>
				<td><code>@zindexTooltip</code></td>
				<td><code>1020</code></td>
			</tr>
			<tr>
				<td><code>@zindexFixedNavbar</code></td>
				<td><code>1030</code></td>
			</tr>
			<tr>
				<td><code>@zindexModalBackdrop</code></td>
				<td><code>1040</code></td>
			</tr>
			<tr>
				<td><code>@zindexModal</code></td>
				<td><code>1050</code></td>
			</tr>
		</table>
	</div>
	<div class="span5">
		<h4>Boxes</h4>
		<table class="table-bordered table-striped small-text">
			<tr>
				<td><code>@boxActionBackground</code></td>
				<td><code>@tealLighter</code></td>
				<td class="swatch-col"><i class="swatch boxActionBackground"></i></td>
			</tr>
			<tr>
				<td><code>@boxInfoBackground</code></td>
				<td>#f9f9f9</td>
				<td class="swatch-col"><i class="swatch boxInfoBackground"></i></td>
			</tr>
		</table>
		
		<h4>Forms &amp; alerts</h4>
		<table class="table-bordered table-striped small-text">
			<tr>
				<td><code>@placeholderText</code></td>
				<td><code>@grayLight</code></td>
				<td class="swatch-col"><i class="swatch placeholderText"></i></td>
			</tr>
			<tr>
				<td><code>@warningText</code></td>
				<td><pre>darken(@orange, 12%);</pre></td>
				<td class="swatch-col"><i class="swatch warningText"></i></td>
			</tr>
			<tr>
				<td><code>@warningBackground</code></td>
				<td><pre>saturate(lighten(@orange, 45%), 30%)</pre></td>
				<td class="swatch-col"><i class="swatch warningBackground"></i></td>
			</tr>
			<tr>
				<td><code>@warningBorder</code></td>
				<td><pre>saturate(lighten(@orange, 15%), 10%)</pre></td>
				<td class="swatch-col"><i class="swatch warningBorder"></i></td>
			</tr>
			<tr>
				<td><code>@errorText</code></td>
				<td><pre>darken(@red, 10%)</pre></td>
				<td class="swatch-col"><i class="swatch errorText"></i></td>
			</tr>
			<tr>
				<td><code>@errorBackground</code></td>
				<td><pre>lighten(@errorText, 65%)</pre></td>
				<td class="swatch-col"><i class="swatch errorBackground"></i></td>
			</tr>
			<tr>
				<td><code>@errorBorder</code></td>
				<td><pre>desaturate(darken(@errorBackground, 15%), 40%)</pre></td>
				<td class="swatch-col"><i class="swatch errorBorder"></i></td>
			</tr>
			<tr>
				<td><code>@successText</code></td>
				<td><pre>darken(@green, 20%)</pre></td>
				<td class="swatch-col"><i class="swatch successText"></i></td>
			</tr>
			<tr>
				<td><code>@successBackground</code></td>
				<td><pre>lighten(@green, 40%)</pre></td>
				<td class="swatch-col"><i class="swatch successBackground"></i></td>
			</tr>
			<tr>
				<td><code>@successBorder</code></td>
				<td><pre>lighten(@green, 10%)</pre></td>
				<td class="swatch-col"><i class="swatch successBorder"></i></td>
			</tr>
			<tr>
				<td><code>@infoText</code></td>
				<td><pre>darken(@blue, 15%)</pre></td>
				<td class="swatch-col"><i class="swatch infoText"></i></td>
			</tr>
			<tr>
				<td><code>@infoBackground</code></td>
				<td><pre>lighten(@blue, 40%)</pre></td>
				<td class="swatch-col"><i class="swatch infoBackground"></i></td>
			</tr>
			<tr>
				<td><code>@infoBorder</code></td>
				<td><pre>lighten(@blue, 20%)</pre></td>
				<td class="swatch-col"><i class="swatch infoBorder"></i></td>
			</tr>
		</table>
	</div>
</div>

