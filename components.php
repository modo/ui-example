<?php 
function cleanup_code($code) {
	echo str_replace("	","    ",htmlspecialchars($code));
}

$level2 = 'components';
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 ie oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 ie oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 ie oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Bootstrap | USGBC Blank Template</title>
	<meta name="description" content="" />	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	
	<?php include( 'lib/inc/meta-head.php' ); ?>
</head>
<body onload="prettyPrint()">
	<div id="body-container">
		<!-- Header -->
		<?php include( 'lib/inc/header.php' ); ?>
			
			<div id="content" class="row">
				<?php include( 'lib/inc/left-nav.php' ); ?>
				
				<div class="span10">
					
					<div class="row">
			            <article id="mainCol" class="span10">
			            	<section><?php include('lib/docs/rating-widgets.php') ?></section>
			            	<section><?php include('lib/docs/alert-list.php') ?></section>
			            	<section><?php include('lib/docs/profile-header.php') ?></section>
			            	<section><?php include('lib/docs/commenting.php') ?></section>
			            	<section><?php include('lib/docs/scorecard.php') ?></section>
			            </article>			            
					</div>
				</div>
			</div>
			
			<?php include( 'lib/inc/footer.php' ); ?>
		</div>
	</div>
	
	<!-- Scripts -->
	<?php include('lib/inc/meta-footer.php'); ?>
</body>
</html>