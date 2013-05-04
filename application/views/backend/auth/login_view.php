<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Glene Jean</title>
		<!--header--->
		<?php echo $this -> load -> view('backend/slice/header'); ?>
		<!--hearder--->
	</head>

	<body>
		<!--nav bar--->
		<?php echo $this -> load -> view('backend/slice/top_nav'); ?>
		<!--end nav bar--->
		<div class="container">
			<div class="row-fluid">
				<div class="offset4 span4 offset4">
					<form class="form-horizontal" id="welcome_login_form" method="post" accept-charset="utf-8"
					action="<?php echo site_url('admin')?>">
						<?php echo validation_errors('<div class="alert alert-error fade in">', '</div>'); ?><?php echo $this -> ci_alerts -> display('error'); ?>
						<legend>
							Admin Login
						</legend>
						<div class="control-group">
							<label class="control-label" for="username">Username</label>
							<div class="controls">
								<input  value="<?php echo set_value('username'); ?>" name="username" id="username" type="text">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"  for="password">Password</label>
							<div class="controls">
								<input name="password" id="password" type="password">
							</div>
						</div>
						<hr />
						<div class="control-group">
							<div class="control-group">
								<label class="control-label"></label>
								<button type="submit" class="btn btn-primary" data-loading-text="saving...">
									Login
								</button>
							</div>
						</div>

					</form>
				</div><!--/span8-->
			</div><!--/row-fuid-->

			<!--footer-->
			<?php echo $this -> load -> view('backend/slice/footer'); ?>
			<!--footer end-->
	</body>
</html>
