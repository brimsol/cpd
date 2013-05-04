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
				<!--<div class="span4">
				<?php //echo $this -> load -> view('backend/slice/side_nav'); ?>
				</div>-->
				<div class="span12">

					<div class="span3 well">

						<?php echo $this -> load -> view('backend/slice/side_nav'); ?>
					</div>
					<div class="span9 well">

						<form class="form-horizontal" id="onlinestore_form"  enctype="multipart/form-data" method="post" action="<?php echo site_url('admin/onlinestore/add');?>" >
							<fieldset>
								<div id="legend" class="">
									<?php echo validation_errors('<div class="alert alert-error fade in">', '</div>'); ?>
									<?php echo $this -> ci_alerts -> display('error'); ?>
									<?php echo $this -> ci_alerts -> display('success'); ?>
									<?php if(isset($upload_error)){echo '<div class="alert alert-error fade in">'.$upload_error.'</div>';}  ?>
									<legend class="">
										Add Online Store
									</legend>
								</div>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Name</label>
									<div class="controls">
										<input placeholder="Online Store Name" class="input-large" id="name" type="text" name="name">
										<p class="help-block">
											Name of the Store
										</p>
									</div>
								</div>
								

								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">URL</label>
									<div class="controls">
										<input placeholder="URL" id="url" class="input-large" type="text" name="url">
										<p class="help-block">
											Store URL
										</p>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label"></label>

									<!-- Button -->
									<div class="controls">
										<button class="btn btn-success">
											Save
										</button>
									</div>
								</div>

							</fieldset>
						</form>

					</div>

				</div><!--/span12-->
			</div><!--/row-fuid-->

			<!--footer-->
			<?php echo $this -> load -> view('backend/slice/footer'); ?>
			<!--footer end-->
	</body>
</html>
