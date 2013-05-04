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

						<form class="form-horizontal" id="store_form" enctype="multipart/form-data" method="post" action="<?php echo site_url('admin/store/add');?>" >
							<fieldset>
								<div id="legend" class="">
									<?php echo validation_errors('<div class="alert alert-error fade in">', '</div>'); ?>
									<?php echo $this -> ci_alerts -> display('error'); ?>
									<?php echo $this -> ci_alerts -> display('success'); ?>
									<?php if(isset($upload_error)){echo '<div class="alert alert-error fade in">'.$upload_error.'</div>';}  ?>
									<legend class="">
										Add Store
									</legend>
								</div>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Store Name</label>
									<div class="controls">
										<input placeholder="Store Name" class="input-large" id="name" type="text" name="name">
										<p class="help-block">
											Name of the Store
										</p>
									</div>
								</div>
								
								<div class="control-group">

									<!-- Select Basic -->
									<label class="control-label">State</label>
									<div class="controls">
										<select class="input-large" name="state" id="state">
											<option value="">Select</option>
											<?php if(isset($states)&&count($states)){?>
												<?php foreach($states as $state){?>
												<option value="<?php echo $state->id;?>"><?php echo $state->name;?></option>
												<?php } ?>
											<?php }?>
										</select>
									</div>

								</div>
								
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Address</label>
									<div class="controls">
										<textarea name="address" id="address"></textarea>
										<p class="help-block">
											Store Address
										</p>
									</div>
								</div>

								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Contact Number</label>
									<div class="controls">
										<input placeholder="Contact Number" class="input-large" type="text" id="contact_no" name="contact_no">
										<!--<p class="help-block">
											First contact Number
										</p>
										<!--<input placeholder="Contact Number" class="input-large" type="text" name="contact_no[]">
										<p class="help-block">
											Second contact Number
										</p>-->
									</div>
								</div>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Web Link</label>
									<div class="controls">
										<input placeholder="URL" class="input-large" type="text" name="url" id="url">
									</div>
								</div>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Latitude</label>
									<div class="controls">
										<input placeholder="Latitude" class="input-large" type="text" name="latitude" id="latitude">
										<p class="help-block">
											Google Map Latitude
										</p>
									</div>
								</div>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Longitude</label>
									<div class="controls">
										<input placeholder="Longitude" class="input-large" type="text" name="longitude" id="longitude">
										<p class="help-block">
											Google Map Longitude
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
