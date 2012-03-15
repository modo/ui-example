<h1 class="section-header">Using LESS</h1>

<hr class="white-space">

<h2>Variables</h2>
<p>Managing colors and pixel values in CSS can be a bit of a pain, usually full of copy and paste. Not with LESS though&mdash;assign colors or pixel values as variables and change them once.</p>
<div class="row">
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
				<td><code>darken(@gray, 35%)</code></td>
				<td class="swatch-col"><i class="swatch grayDarker"></i></td>
			</tr>
			<tr>
				<td><code>@grayDark</code></td>
				<td><code>darken(@gray, 26%)</code></td>
				<td class="swatch-col"><i class="swatch grayDark"></i></td>
			</tr>
			<tr>
				<td><code>@grayLight</code></td>
				<td><code>lighten(@gray, 10%)</code></td>
				<td class="swatch-col"><i class="swatch grayLight"></i></td>
			</tr>
			<tr>
				<td><code>@grayLighter</code></td>
				<td><code>lighten(@gray, 18%)</code></td>
				<td class="swatch-col"><i class="swatch grayLighter"></i></td>
			</tr>
			<tr>
				<td><code>@grayLightest</code></td>
				<td><code>lighten(@gray, 42%)</code></td>
				<td class="swatch-col"><i class="swatch grayLightest"></i></td>
			</tr>
		</table>
		
		<h3>Variants</h3>
		<table class="table-bordered table-striped small-text">
			<tr>
				<td><code>@tealDarker</code></td>
				<td><code>desaturate(@teal, 65%)</code></td>
				<td class="swatch-col"><i class="swatch tealDarker"></i></td>
			</tr>
			<tr>
				<td><code>@tealDark</code></td>
				<td><code>desaturate(@teal, 34%)</code></td>
				<td class="swatch-col"><i class="swatch tealDark"></i></td>
			</tr>
			<tr>
				<td><code>@tealLight</code></td>
				<td><code>desaturate(lighten(@tealDark, 35%),10%)</code></td>
				<td class="swatch-col"><i class="swatch tealLight"></i></td>
			</tr>
			<tr>
				<td><code>@tealLighter</code></td>
				<td><code>lighten(@tealDark, 51%)</code></td>
				<td class="swatch-col"><i class="swatch tealLighter"></i></td>
			</tr>
			<tr>
				<td><code>greenDark</code></td>
				<td><code>darken(@green, 13%)</code></td>
				<td class="swatch-col"><i class="swatch greenDark"></i></td>
			</tr>
		</table>
	</div>
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
				<td><code>darken(@linkColor, 15%)</code></td>
				<td class="swatch-col"><i class="swatch linkColorHover"></i></td>
			</tr>
		</table>
		
		<h3>Buttons</h3>
		<table class="table-bordered table-striped small-text">
			<tr>
				<td><code>@primaryButtonBackround</code></td>
				<td><code>@linkColor</code></td>
				<td class="swatch-col"><i class="swatch primaryButtonBackground"></i></td>
			</tr>
		</table>
		
		<h3>Nav Bar</h3>
		<table class="table-bordered table-striped small-text">
			<tr>
				<td><code>@navbarHeight</code></td>
				<td colspan="2">40px</td>
			</tr>
			<tr>
				<td><code>@navbarBackground</code></td>
				<td><code>lighten(@gray, 36%)</code></td>
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
		
		<h3>Boxes</h3>
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
	</div>
</div>
<div class="row">
	<div class="span10">
		<h3>Forms &amp; alerts</h3>
		<table class="table-bordered table-striped small-text">
			<tr>
				<td><code>@placeholderText</code></td>
				<td><code>@grayLight</code></td>
				<td class="swatch-col"><i class="swatch placeholderText"></i></td>
			</tr>
			<tr>
				<td><code>@warningText</code></td>
				<td><code>darken(@orange, 12%)</code></td>
				<td class="swatch-col"><i class="swatch warningText"></i></td>
			</tr>
			<tr>
				<td><code>@warningBackground</code></td>
				<td><code>saturate(lighten(@orange, 45%), 30%)</code></td>
				<td class="swatch-col"><i class="swatch warningBackground"></i></td>
			</tr>
			<tr>
				<td><code>@warningBorder</code></td>
				<td><code>saturate(lighten(@orange, 15%), 10%)</code></td>
				<td class="swatch-col"><i class="swatch warningBorder"></i></td>
			</tr>
			<tr>
				<td><code>@errorText</code></td>
				<td><code>darken(@red, 10%)</code></td>
				<td class="swatch-col"><i class="swatch errorText"></i></td>
			</tr>
			<tr>
				<td><code>@errorBackground</code></td>
				<td><code>lighten(@errorText, 65%)</code></td>
				<td class="swatch-col"><i class="swatch errorBackground"></i></td>
			</tr>
			<tr>
				<td><code>@errorBorder</code></td>
				<td><code>desaturate(darken(@errorBackground, 15%), 40%)</code></td>
				<td class="swatch-col"><i class="swatch errorBorder"></i></td>
			</tr>
			<tr>
				<td><code>@successText</code></td>
				<td><code>darken(@green, 20%)</code></td>
				<td class="swatch-col"><i class="swatch successText"></i></td>
			</tr>
			<tr>
				<td><code>@successBackground</code></td>
				<td><code>lighten(@green, 40%)</code></td>
				<td class="swatch-col"><i class="swatch successBackground"></i></td>
			</tr>
			<tr>
				<td><code>@successBorder</code></td>
				<td><code>lighten(@green, 10%)</code></td>
				<td class="swatch-col"><i class="swatch successBorder"></i></td>
			</tr>
			<tr>
				<td><code>@infoText</code></td>
				<td><code>darken(@blue, 15%)</code></td>
				<td class="swatch-col"><i class="swatch infoText"></i></td>
			</tr>
			<tr>
				<td><code>@infoBackground</code></td>
				<td><code>lighten(@blue, 40%)</code></td>
				<td class="swatch-col"><i class="swatch infoBackground"></i></td>
			</tr>
			<tr>
				<td><code>@infoBorder</code></td>
				<td><code>lighten(@blue, 20%)</code></td>
				<td class="swatch-col"><i class="swatch infoBorder"></i></td>
			</tr>
		</table>
	</div>
</div>

<hr class="white-space">

<h3>Components</h3>
<div class="row">
	<div class="span10">
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
				<td><code>(@gridColumns * @gridColumnWidth) + (@gridGutterWidth * (@gridColumns - 1))</code></td>
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
				<td><code>@baseFontSize * 1.14</code></td>
			</tr>
			<tr>
				<td class="span2"><code>@baseFontFamily</code></td>
				<td><code>@sansFamily</code></td>
			</tr>
			<tr>
				<td class="span2"><code>@sansFamily</code></td>
				<td><code>"Helvetica Neue", Arial, Helvetica, sans-serif</code></td>
			</tr>
			<tr>
				<td class="span2"><code>@serifFamily</code></td>
				<td><code>Georgia, Times, serif</code></td>
			</tr>
			<tr>
				<td class="span2"><code>@monospacedFamily</code></td>
				<td><code>Inconsolata, "Andale Mono", Monaco, Courier, monospace</code></td>
			</tr>
			<tr>
				<td class="span2"><code>@geometricFamily</code></td>
				<td><code>"proxima-nova-1","proxima-nova-2",sans-serif</code></td>
			</tr>
			<tr>
				<td class="span2"><code>@condensedFamily</code></td>
				<td><code>"ff-din-web-condensed-1", "ff-din-web-condensed-2", sans-serif</code></pre>
			</tr>
		</table>
	</div>
</div>

<div class="row">
	<div class="span7">
		<h4>Images</h4>
		<table class="table-bordered table-striped small-text">
			<tr>
				<td><code>@baseFontURL</code></td>
				<td>Location of base fonts (required for icons)</td>
				<td><pre>"../base/fonts"</pre></td>
			</tr>
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
	</div>
	<div class="span3">
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
</div>

<hr class="thick-rule">

<h2>Mixins</h2>

<h3>Utilities</h3>
<table class="table-bordered table-striped table-stylized small-text">
	<thead>
		<tr>
			<th>Mixin</th>
			<th>Parameters</th>
			<th>Usage</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><code>.clearfix()</code></td>
			<td><span class="muted">none</span></td>
			<td>Add to any parent to clear floats within</td>
		</tr>
		<tr>
			<td><code>.tab-focus()</code></td>
			<td><span class="muted">none</span></td>
			<td>Apply the Webkit focus style and round Firefox outline</td>
		</tr>
		<tr>
			<td><code>.center-block()</code></td>
			<td><span class="muted">none</span></td>
			<td>Auto center a block-level element using margin: auto</td>
		</tr>
		<tr>
			<td><code>.ie7-inline-block()</code></td>
			<td><span class="muted">none</span></td>
			<td>Use in addition to regular display: inline-block to get IE7 support</td>
		</tr>
		<tr>
			<td><code>.size()</code></td>
			<td><code>@height: 5px, @width: 5px</code></td>
			<td>Quickly set the height and width on one line</td>
		</tr>
		<tr>
			<td><code>.square()</code></td>
			<td><code>@size: 5px</code></td>
			<td>Builds on .size() to set the width and height as same value</td>
		</tr>
		<tr>
			<td><code>.opacity()</code></td>
			<td><code>@opacity: 100</code></td>
			<td>Set, in whole numbers, the opacity percentage (e.g., "50" or "75")</td>
		</tr>
		<tr>
			<td><code>.linkColor()</code></td>
			<td><code>@color</code></td>
			<td>Sets coloring for static &amp; hover states of link text</td>
		</tr>
	</tbody>
</table>

<h3>Forms</h3>
<table class="table-bordered table-striped table-stylized small-text">
	<thead>
		<tr>
			<th>Mixin</th>
			<th>Parameters</th>
			<th>Usage</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><code>.placeholder()</code></td>
			<td><code>@color: @placeholderText</code></td>
			<td>Set the <code>placeholder</code> text color for inputs</td>
		</tr>
	</tbody>
</table>

<h3>Typography</h3>
<table class="table-bordered table-striped table-stylized small-text">
	<thead>
		<tr>
			<th>Mixin</th>
			<th>Parameters</th>
			<th>Usage</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><code>#font > #family > .serif()</code></td>
			<td><span class="muted">none</span></td>
			<td>Make an element use a serif font stack</td>
		</tr>
		<tr>
			<td><code>#font > #family > .sans-serif()</code></td>
			<td><span class="muted">none</span></td>
			<td>Make an element use a sans-serif font stack</td>
		</tr>
		<tr>
			<td><code>#font > #family > .monospace()</code></td>
			<td><span class="muted">none</span></td>
			<td>Make an element use a monospace font stack</td>
		</tr>
		<tr>
			<td><code>#font > #family > .geometric()</code></td>
			<td><span class="muted">none</span></td>
			<td>Make an element use a geometric font stack</td>
		</tr>
		<tr>
			<td><code>#font > #family > .condensed()</code></td>
			<td><span class="muted">none</span></td>
			<td>Make an element use a condensed font stack</td>
		</tr>
		<tr>
			<td><code>#font > .shorthand()</code></td>
			<td><pre>@size: @baseFontSize, @weight: normal, @lineHeight: @baseLineHeight</pre></td>
			<td>Easily set font size, weight, and leading</td>
		</tr>
		<tr>
			<td><code>#font > .serif()</code></td>
			<td><pre>@size: @baseFontSize, @weight: normal, @lineHeight: @baseLineHeight</pre></td>
			<td>Set font family to serif, and control size, weight, and leading</td>
		</tr>
		<tr>
			<td><code>#font > .sans-serif()</code></td>
			<td><pre>@size: @baseFontSize, @weight: normal, @lineHeight: @baseLineHeight</pre></td>
			<td>Set font family to sans-serif, and control size, weight, and leading</td>
		</tr>
		<tr>
			<td><code>#font > .monospace()</code></td>
			<td><pre>@size: @baseFontSize, @weight: normal, @lineHeight: @baseLineHeight</pre></td>
			<td>Set font family to monospace, and control size, weight, and leading</td>
		</tr>
		<tr>
			<td><code>#font > .geometric()</code></td>
			<td><pre>@size: @baseFontSize, @weight: normal, @lineHeight: @baseLineHeight</pre></td>
			<td>Set font family to geometric, and control size, weight, and leading</td>
		</tr>
		<tr>
			<td><code>#font > .condensed()</code></td>
			<td><pre>@size: @baseFontSize, @weight: normal, @lineHeight: @baseLineHeight</pre></td>
			<td>Set font family to condensed, and control size, weight, and leading</td>
		</tr>
	</tbody>
</table>

<h3>Grid system</h3>
<table class="table-bordered table-striped table-stylized small-text">
	<thead>
		<tr>
			<th>Mixin</th>
			<th>Parameters</th>
			<th>Usage</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><code>.container-fixed()</code></td>
			<td><span class="muted">none</span></td>
			<td>Provide a fixed-width (set with @siteWidth) container for holding your content</td>
		</tr>
		<tr>
			<td><code>.columns()</code></td>
			<td><code>@columns: 1</code></td>
			<td>Build a grid column that spans any number of columns (defaults to 1 column)</td>
		</tr>
		<tr>
			<td><code>.offset()</code></td>
			<td><code>@columns: 1</code></td>
			<td>Offset a grid column with left margin that spans any number of columns</td>
		</tr>
		<tr>
			<td><code>.gridColumn()</code></td>
			<td><span class="muted">none</span></td>
			<td>Make an element float like a grid column</td>
		</tr>
	</tbody>
</table>

<h3>CSS3 properties</h3>
<table class="table-bordered table-striped table-stylized small-text">
	<thead>
		<tr>
			<th>Mixin</th>
			<th>Parameters</th>
			<th>Usage</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><code>.border-radius()</code></td>
			<td><code>@radius: 5px</code></td>
			<td>Round the corners of an element. Can be a single value or four space-separated values</td>
		</tr>
		<tr>
			<td><code>.box-shadow()</code></td>
			<td><code>@shadow: 0 1px 3px rgba(0,0,0,.25)</code></td>
			<td>Add a drop shadow to an element</td>
		</tr>
		<tr>
			<td><code>.transition()</code></td>
			<td><code>@transition</code></td>
			<td>Add CSS3 transition effect (e.g., all .2s linear)</td>
		</tr>
		<tr>
			<td><code>.rotate()</code></td>
			<td><code>@degrees</code></td>
			<td>Rotate an element n degrees</td>
		</tr>
		<tr>
			<td><code>.rotateY()</code></td>
			<td><code>@degrees</code></td>
			<td>Rotate an element n degrees on the y axis</td>
		</tr>
		<tr>
			<td><code>.scale()</code></td>
			<td><code>@ratio</code></td>
			<td>Scale an element to n times its original size</td>
		</tr>
		<tr>
			<td><code>.translate()</code></td>
			<td><code>@x: 0, @y: 0</code></td>
			<td>Move an element on the x and y planes</td>
		</tr>
		<tr>
			<td><code>.skew()</code></td>
			<td><code>@x: 0, @y: 0</code></td>
			<td>Skew an element on the x and y planes</td>
		</tr>
		<tr>
			<td><code>.translate3d()</code></td>
			<td><code>@x: 0, @y: 0, @z: 0</code></td>
			<td>Move an element on the x, y and z planes</td>
		</tr>
		<tr>
			<td><code>.background-clip()</code></td>
			<td><code>@clip</code></td>
			<td>Crop the background of an element (useful for border-radius)</td>
		</tr>
		<tr>
			<td><code>.background-size()</code></td>
			<td><code>@size</code></td>
			<td>Control the size of background images via CSS3</td>
		</tr>
		<tr>
			<td><code>.box-sizing()</code></td>
			<td><code>@boxmodel</code></td>
			<td>Change the box model for an element (e.g., border-box for a full-width input)</td>
		</tr>
		<tr>
			<td><code>.user-select()</code></td>
			<td><code>@select</code></td>
			<td>Control cursor selection of text on a page</td>
		</tr>
		<tr>
			<td><code>.resizable()</code></td>
			<td><code>@direction: both</code></td>
			<td>Make any element resizable on the right and bottom</td>
		</tr>
		<tr>
			<td><code>.content-columns()</code></td>
			<td><code>@columnCount, @columnGap: @gridColumnGutter</code></td>
			<td>Make the content of any element use CSS3 columns</td>
		</tr>
	</tbody>
</table>

<h3>Backgrounds and gradients</h3>
<table class="table-bordered table-striped table-stylized small-text">
	<thead>
		<tr>
			<th>Mixin</th>
			<th>Parameters</th>
			<th>Usage</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><code>#translucent > .background()</code></td>
			<td><code>@color: @white, @alpha: 1</code></td>
			<td>Give an element a translucent background color</td>
		</tr>
		<tr>
			<td><code>#translucent > .border()</code></td>
			<td><code>@color: @white, @alpha: 1</code></td>
			<td>Give an element a translucent border color</td>
		</tr>
		<tr>
			<td><code>#gradient > .horizontal()</code></td>
			<td><code>@startColor, @endColor</code></td>
			<td>Create a cross-browser horizontal background gradient</td>
		</tr>
		<tr>
			<td><code>#gradient > .vertical()</code></td>
			<td><code>@startColor, @endColor</code></td>
			<td>Create a cross-browser vertical background gradient</td>
		</tr>
		<tr>
			<td><code>#gradient > .vertical-overlay()</code></td>
			<td><code>@startColor, @endColor</code></td>
			<td>Create a cross-browser vertical background gradient without background-color</td>
		</tr>
		<tr>
			<td><code>#gradient > .vertical-and-image()</code></td>
			<td><code>@startColor, @endColor, @imageURL</code></td>
			<td>Create a cross-browser vertical background gradient with background image overlay</td>
		</tr>
		<tr>
			<td><code>#gradient > .directional()</code></td>
			<td><code>@startColor, @endColor, @deg</code></td>
			<td>Create a cross-browser directional background gradient</td>
		</tr>
		<tr>
			<td><code>#gradient > .vertical-three-colors()</code></td>
			<td><code>@startColor, @midColor, @colorStop, @endColor</code></td>
			<td>Create a cross-browser three-color background gradient</td>
		</tr>
		<tr>
			<td><code>#gradient > .radial()</code></td>
			<td><code>@innerColor, @outerColor</code></td>
			<td>Create a cross-browser radial background gradient</td>
		</tr>
		<tr>
			<td><code>#gradient > .striped()</code></td>
			<td><code>@color, @angle</code></td>
			<td>Create a cross-browser striped background gradient</td>
		</tr>
		<tr>
			<td><code>#gradientBar()</code></td>
			<td><code>@primaryColor, @secondaryColor</code></td>
			<td>Used for buttons to assign a gradient and slightly darker border</td>
		</tr>
	</tbody>
</table>