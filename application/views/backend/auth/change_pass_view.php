<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Glene Jean | Dashboard</title>
		<?php echo $this -> load -> view('backend/slice/header'); ?>
	</head>

	<body>
		<!--nav bar--->
		<?php echo $this -> load -> view('backend/slice/top_nav'); ?>
		<!--end nav bar--->
		<div class="container">
			<div class="row-fluid">
				<div class="span3 well">
					<?php echo $this -> load -> view('backend/slice/side_nav'); ?>
				</div>
				<div class="span9">
						<form class="form-horizontal" id="welcome_login_form" method="post" accept-charset="utf-8" 
							action="<?php echo site_url('admin/change_password')?>">
							<?php echo validation_errors('<div class="alert alert-error fade in">', '</div>'); ?><?php echo $this->ci_alerts->display('success');?><?php echo $this->ci_alerts->display('error');?>
								<legend>Change Password</legend>
								<div class="control-group">
									<label class="control-label" style="margin-left:0px;" for="username">Username</label>
									<div class="controls">
									<?php $username = $this->session->userdata('username');?>
										<input class="input-medium" value="<?php echo $username ?>"type="text" disabled>
										<input class="input-medium" value="<?php echo $username ?>" name="username" id="username" type="hidden">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"  for="password">Current Password</label>
									<div class="controls">
										<input class="input-medium"  name="oldpassword" id="password" type="password" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"  for="password">New Password</label>
									<div class="controls">
										<input class="input-medium"  name="newpassword" id="password" type="password" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"  for="confirm_password">Confirm Password</label>
									<div class="controls">
										<input class="input-medium"  name="confirmpassword" id="confirm_password" type="password" required>
									</div>
								</div>
								<div class="form-actions">
									<input class="btn btn-primary" value="Save" name="" type="submit">
									<input class="btn" value="Reset" name="" type="reset">
								</div>
							
						</form>
                    
				</div><!--/span8-->
			</div><!--/row-fuid-->

			<!--footer-->
			<?php echo $this -> load -> view('backend/slice/footer'); ?>
			<!--footer end-->
	</body>
</html>
