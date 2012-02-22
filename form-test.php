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
<body>
	<div id="body-container">
		<!-- Header -->
		<?php include( 'lib/inc/header.php' ); ?>
			
			<div id="content" class="row">
				<?php include( 'lib/inc/left-nav.php' ); ?>
				
				<div class="span10">
					
					<div class="row">
			            <article id="mainCol" class="span7">
			            	<h1>Account Settings</h1>
			            	
			            	<section class="account-setting">
				            	<div class="section-header">
				            		<h3 class="pull-left">Name</h3>
				            		<a class="pull-right" href="">change</a>
				            	</div>
				            	
				            	<div class="summary">
				            		<p>Andre Poremski</p>
				            	</div>
				            	
				            	<div class="edit well">
				            		<div class="alert alert-error"><a class="close">×</a>Please correct the errors below.</div>
				            		
				            		<form class="form-horizontal">
				            			<fieldset>
				            				<div class="control-group error">
				            					<label class="control-label">First name</label>
				            					<div class="controls">
				            						<input type="text" class="input-large" />
				            						<p class="help-block">This is a required field</p>
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<label class="control-label">Last name</label>
				            					<div class="controls">
				            						<input type="text" class="input-large" />
				            					</div>
				            				</div>

				            				<div class="btn-row form-actions">
				            					<button type="submit" class="btn btn-small btn-primary">Save</button>
				            					<button type="reset" class="btn btn-small btn-info">Cancel</button>
				            				</div>
				            			</fieldset>
				            		</form>
				            	</div>
			            	</section>
			            	
			            	<section class="account-setting">
				            	<div class="section-header">
				            		<h3 class="pull-left">Email &amp; privacy</h3>
				            		<a class="pull-right" href="">change</a>
				            	</div>
				            	
				            	<div class="summary">
				            		<p>andre@poremski.com <small>(change pending email confirmation)</small></p>
				            		<p class="small-text"><strong class="warning-text">Medium privacy:</strong> Your email is visible only to those who share an account with you (e.g. Membership).</p>
				            	</div>
				            	
				            	<div class="edit well">
				            		<form class="form-horizontal">
				            			<fieldset>
				            				<div class="control-group">
				            					<label class="control-label">Email</label>
				            					<div class="controls">
				            						<input type="email" class="input-large" />
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<label class="control-label">Confirm email</label>
				            					<div class="controls">
				            						<input type="email" class="input-large" />
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<label class="control-label">Privacy level</label>
				            					<div class="controls">
				            						<select class="input-medium">
				            							<option>Low privacy</option>
				            							<option>Medium privacy</option>
				            							<option>High privacy</option>
				            						</select>
				            						<p class="help-block"><strong class="danger-text">Low privacy:</strong> Your email is visible to everyone on USGBC.org</p>
				            					</div>
				            				</div>

				            				<div class="btn-row form-actions">
				            					<button type="submit" class="btn btn-small btn-primary">Save</button>
				            					<button type="reset" class="btn btn-small btn-info">Cancel</button>
				            				</div>
				            			</fieldset>
				            		</form>
				            	</div>
			            	</section>
			            	
			            	<section class="account-setting">
				            	<div class="section-header">
				            		<h3 class="pull-left">Password</h3>
				            		<a class="pull-right" href="">change</a>
				            	</div>
				            	
				            	<div class="summary">
				            		<p>**********</p>
				            	</div>
				            	
				            	<div class="edit well">
				            		<form class="form-horizontal">
				            			<fieldset>
				            				<div class="control-group">
				            					<label class="control-label">Current password</label>
				            					<div class="controls">
				            						<input type="password" class="input-large" />
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<label class="control-label">New password</label>
				            					<div class="controls">
				            						<input type="password" class="input-large" />
				            						<p class="help-inline small-text info-text">(7 character minimum)</p>
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<label class="control-label">Confirm password</label>
				            					<div class="controls">
				            						<input type="password" class="input-large" />
				            					</div>
				            				</div>

				            				<div class="btn-row form-actions">
				            					<button type="submit" class="btn btn-small btn-primary">Save</button>
				            					<button type="reset" class="btn btn-small btn-info">Cancel</button>
				            				</div>
				            			</fieldset>
				            		</form>
				            	</div>
			            	</section>
			            	
			            	<section class="account-setting">
				            	<div class="section-header">
				            		<h3 class="pull-left">Mailing address</h3>
				            		<a class="pull-right" href="">change</a>
				            	</div>
				            	
				            	<div class="summary">
				            		<p class="info-text"><em>You currently have no mailing address</em></p>
				            	</div>
				            	
				            	<div class="edit well">
				            		<form class="form-horizontal">
				            			<fieldset>
				            				<div class="control-group">
				            					<label class="control-label">Country</label>
				            					<div class="controls">
				            						<select class="input-large">
				            							<option>Select a Country</option>
				            							<option>United States</option>
				            							<option>China</option>
				            							<option>Japan</option>
				            							<option>Germany</option>
				            							<option>France</option>
				            							<option>United Kingdom</option>
				            							<option>Brazil</option>
				            							<option>Italy</option>
				            							<option>India</option>
				            							<option>Canada</option>
				            						</select>
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<label class="control-label">Attention to</label>
				            					<div class="controls">
				            						<input type="text" class="input-large" />
				            						<p class="help-inline small-text info-text">(optional)</p>
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<label class="control-label">Company</label>
				            					<div class="controls">
				            						<input type="text" class="input-large" />
				            						<p class="help-inline small-text info-text">(optional)</p>
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<label class="control-label">Address</label>
				            					<div class="controls">
				            						<input type="input" class="input-large" />
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<div class="controls">
				            						<input type="input" class="input-large" />
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<label class="control-label">City</label>
				            					<div class="controls">
				            						<input type="input" class="input-large" />
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<label class="control-label">State/Province</label>
				            					<div class="controls">
				            						<select class="input-large">
				            							<option>Select a state</option>
				            							<option>Alabama</option>
				            							<option>Alaska</option>
				            							<option>American Samoa</option>
				            							<option>Arizona</option>
				            							<option>Arkansas</option>
				            							<option>California</option>
				            							<option>Colorado</option>
				            							<option>Connecticut</option>
				            							<option>Delaware</option>
				            							<option>District of Columbia</option>
				            							<option>Florida</option>
				            							<option>Georgia</option>
				            							<option>Guam</option>
				            							<option>Hawaii</option>
				            							<option>Idaho</option>
				            							<option>Illinois</option>
				            							<option>Indiana</option>
				            							<option>Iowa</option>
				            							<option>Kansas</option>
				            							<option>Kentucky</option>
				            							<option>Louisiana</option>
				            							<option>Maine</option>
				            							<option>Maryland</option>
				            							<option>Massachusetts</option>
				            							<option>Michigan</option>
				            							<option>Minnesota</option>
				            							<option>Mississippi</option>
				            							<option>Missouri</option>
				            							<option>Montana</option>
				            							<option>Nebraska</option>
				            							<option>Nevada</option>
				            							<option>New Hampshire</option>
				            							<option>New Jersey</option>
				            							<option>New Mexico</option>
				            							<option>New York</option>
				            							<option>North Carolina</option>
				            							<option>North Dakota</option>
				            							<option>Northern Marianas Islands</option>
				            							<option>Ohio</option>
				            							<option>Oklahoma</option>
				            							<option>Oregon</option>
				            							<option>Pennsylvania</option>
				            							<option>Puerto Rico</option>
				            							<option>Rhode Island</option>
				            							<option>South Carolina</option>
				            							<option>South Dakota</option>
				            							<option>Tennessee</option>
				            							<option>Texas</option>
				            							<option>Utah</option>
				            							<option>Vermont</option>
				            							<option>Virginia</option>
				            							<option>Virgin Islands</option>
				            							<option>Washington</option>
				            							<option>West Virginia</option>
				            							<option>Wisconsin</option>
				            							<option>Wyoming</option>
				            						</select>
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<label class="control-label">Zip/Postal code</label>
				            					<div class="controls">
				            						<input type="input" class="input-small" />
				            					</div>
				            				</div>

				            				<div class="btn-row form-actions">
				            					<button type="submit" class="btn btn-small btn-primary">Save</button>
				            					<button type="reset" class="btn btn-small btn-info">Cancel</button>
				            				</div>
				            			</fieldset>
				            		</form>
				            	</div>
			            	</section>
			            	
			            	<section class="account-setting">
				            	<div class="section-header">
				            		<h3 class="pull-left">Billing address</h3>
				            		<a class="pull-right" href="">change</a>
				            	</div>
				            	
				            	<div class="summary">
				            		<p class="info-text"><em>You currently have no billing address</em></p>
				            	</div>
				            	
				            	<div class="edit well">
				            		<form class="form-horizontal">
				            			<fieldset>
				            				<div class="control-group">
				            					<label class="control-label">Country</label>
				            					<div class="controls">
				            						<select class="input-large">
				            							<option>Select a Country</option>
				            							<option>United States</option>
				            							<option>China</option>
				            							<option>Japan</option>
				            							<option>Germany</option>
				            							<option>France</option>
				            							<option>United Kingdom</option>
				            							<option>Brazil</option>
				            							<option>Italy</option>
				            							<option>India</option>
				            							<option>Canada</option>
				            						</select>
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<label class="control-label">Attention to</label>
				            					<div class="controls">
				            						<input type="text" class="input-large" />
				            						<p class="help-inline small-text info-text">(optional)</p>
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<label class="control-label">Company</label>
				            					<div class="controls">
				            						<input type="text" class="input-large" />
				            						<p class="help-inline small-text info-text">(optional)</p>
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<label class="control-label">Address</label>
				            					<div class="controls">
				            						<input type="input" class="input-large" />
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<div class="controls">
				            						<input type="input" class="input-large" />
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<label class="control-label">City</label>
				            					<div class="controls">
				            						<input type="input" class="input-large" />
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<label class="control-label">State/Province</label>
				            					<div class="controls">
				            						<select class="input-large">
				            							<option>Select a state</option>
				            							<option>Alabama</option>
				            							<option>Alaska</option>
				            							<option>American Samoa</option>
				            							<option>Arizona</option>
				            							<option>Arkansas</option>
				            							<option>California</option>
				            							<option>Colorado</option>
				            							<option>Connecticut</option>
				            							<option>Delaware</option>
				            							<option>District of Columbia</option>
				            							<option>Florida</option>
				            							<option>Georgia</option>
				            							<option>Guam</option>
				            							<option>Hawaii</option>
				            							<option>Idaho</option>
				            							<option>Illinois</option>
				            							<option>Indiana</option>
				            							<option>Iowa</option>
				            							<option>Kansas</option>
				            							<option>Kentucky</option>
				            							<option>Louisiana</option>
				            							<option>Maine</option>
				            							<option>Maryland</option>
				            							<option>Massachusetts</option>
				            							<option>Michigan</option>
				            							<option>Minnesota</option>
				            							<option>Mississippi</option>
				            							<option>Missouri</option>
				            							<option>Montana</option>
				            							<option>Nebraska</option>
				            							<option>Nevada</option>
				            							<option>New Hampshire</option>
				            							<option>New Jersey</option>
				            							<option>New Mexico</option>
				            							<option>New York</option>
				            							<option>North Carolina</option>
				            							<option>North Dakota</option>
				            							<option>Northern Marianas Islands</option>
				            							<option>Ohio</option>
				            							<option>Oklahoma</option>
				            							<option>Oregon</option>
				            							<option>Pennsylvania</option>
				            							<option>Puerto Rico</option>
				            							<option>Rhode Island</option>
				            							<option>South Carolina</option>
				            							<option>South Dakota</option>
				            							<option>Tennessee</option>
				            							<option>Texas</option>
				            							<option>Utah</option>
				            							<option>Vermont</option>
				            							<option>Virginia</option>
				            							<option>Virgin Islands</option>
				            							<option>Washington</option>
				            							<option>West Virginia</option>
				            							<option>Wisconsin</option>
				            							<option>Wyoming</option>
				            						</select>
				            					</div>
				            				</div>
				            				
				            				<div class="control-group">
				            					<label class="control-label">Zip/Postal code</label>
				            					<div class="controls">
				            						<input type="input" class="input-small" />
				            					</div>
				            				</div>

				            				<div class="btn-row form-actions">
				            					<button type="submit" class="btn btn-small btn-primary">Save</button>
				            					<button type="reset" class="btn btn-small btn-info">Cancel</button>
				            				</div>
				            			</fieldset>
				            		</form>
				            	</div>
			            	</section>
			            	
			            	<section class="account-setting">
				            	<div class="section-header">
				            		<h3 class="pull-left">Account status</h3>
				            		<a class="pull-right" href="">deactivate</a>
				            	</div>
				            	
				            	<div class="summary">
				            		<p>Your account is activated</p>
				            	</div>
				            	
				            	<div class="edit ">
				            		<div class="alert alert-block alert-danger">
				            			<h4 class="alert-heading">Are you sure?</h4>
				            			<p>By selecting "deactivate" you are permanently deactivating your account. You will also lose access to your order history, USGBC subscriptions, and any contributed material.</p>
				            			
				            			<div class="btn-row">
				            				<button type="reset" class="btn btn-small btn-info">Cancel</button>
				            				<button type="submit" class="btn btn-small btn-danger">Deactivate</button>
				            			</div>
				            		</div>
				            	</div>
			            	</section>
			            	
			            </article>
			            
			            <aside id="sideCol" class="span3">
			            	<section class="box">
			            		<p>USGBC membership renewal is pending receipt of payment.</p>
			            	</section>
			            	<section class="box">
			            		<p>Your membership has expired.</p>
			            		<a class="btn" href="#">Reactivate now <i class="icon-arrow-right"></i></a>
			            	</section>
			            </aside>
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