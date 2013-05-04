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

						<form class="form-horizontal" id="onlinestore_form"  enctype="multipart/form-data" method="post" action="<?php site_url('admin/onlinestore/edit'); ?>" >
							<fieldset>
								<div id="legend" class="">
									<?php echo validation_errors('<div class="alert alert-error fade in">', '</div>'); ?>
									<?php echo $this -> ci_alerts -> display('error'); ?>
									<?php echo $this -> ci_alerts -> display('success'); ?>
									<?php
										if (isset($upload_error)) {echo '<div class="alert alert-error fade in">' . $upload_error . '</div>';
										}
  									?>
									<legend class="">
										Update Online Store
									</legend>
								</div>
								<?php if(isset($stores) && count($stores)){
								
								foreach ($stores as $store){?>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Store Name</label>
									<div class="controls">
										<input placeholder="Store Name" class="input-large" type="text" id="name" name="name" value="<?php echo $store -> name; ?>">
										<p class="help-block">
											Name of the Store
										</p>
									</div>
								</div>
								
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">URL</label>
									<div class="controls">
										<input placeholder="Store Name" id="url" class="input-large" type="text" name="url" value="<?php echo $store -> url; ?>">
										<p class="help-block">
											Store URL
										</p>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label"></label>

									<!-- Button -->
									<div class="controls">
										<button class="btn btn-success" type="submit">
											Update
										</button> <a href="<?php echo site_url('admin/onlinestores');?>" class="btn btn-primary">
											Cancel
										</a>
									</div>
								</div>

							</fieldset>
							
							<?php } }else{echo "Oops! Some error occured";} ?>
						</form>

					</div>

				</div><!--/span12-->
			</div><!--/row-fuid-->

			<!--footer-->
			<?php echo $this -> load -> view('backend/slice/footer'); ?>
			<!--footer end-->
	</body>
</html>
