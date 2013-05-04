<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Brimsol-Tunager</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/brimsol-custom.css" rel="stylesheet">

		<link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
	</head>

	<body>
		<!--nav bar--->
		<?php echo $this -> load -> view('slice/top_nav'); ?>
		<!--end nav bar--->
		<div class="container">
			<div class="row">
				<div class="span4">
					<!--side nav--->
					<?php echo $this -> load -> view('slice/side_nav'); ?>
					<!--end side nav--->

				</div><!--end span4 -->
				<div class="span8">
	<form class="form-horizontal" id="welcome_login_form" method="post" accept-charset="utf-8" 
							action="<?php echo site_url('admin/add_user')?>">
							<?php echo validation_errors('<div class="alert alert-error fade in">', '</div>'); ?><?php echo $this->ci_alerts->display('success');?><?php echo $this->ci_alerts->display('error');?>
								<legend>Add User</legend>
								<div class="control-group">
									<label class="control-label" for="username">Username </label>
									<div class="controls">
									
										<input class="input-medium" name="username" value=""type="text">
										
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="username">User Type </label>
									<div class="controls">
									
										<select name="usertype" class="input-medium" disabled>
											<option value="M">Member</option>
											<option selected="selected" value="A">Admin</option>
											<option value="S">Super Admin</option>
										</select>
										
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"" for="password">New Password</label>
									<div class="controls">
										<input class="input-medium"  name="newpassword" id="password" type="password" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"for="confirm_password">Confirm Password</label>
									<div class="controls">
										<input class="input-medium"  name="confirmpassword" id="confirm_password" type="password" required>
									</div>
								</div>
								<div class="form-actions">
									<input class="btn btn-medium btn-primary" value="Submit" name="" type="submit">
									<input class="btn btn-medium""value="Reset" name="" type="reset">
								</div>
							
						</form>
				</div><!--/span8-->
			</div><!--/row-fuid-->

			<hr>

			<footer>
				<p>
					&copy; Brimsol 2012
				</p>
			</footer>

		</div><!--/.fluid-container-->

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
	
	</body>
</html>
