<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Central Park Deli | Dashboard</title>
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

						<form class="form-horizontal" id="collection_form"  enctype="multipart/form-data" method="post" action="<?php echo site_url('admin/categories/add'); ?>" >
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
										Add Categories
									</legend>
								</div>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Category Name</label>
									<div class="controls">
										<input placeholder="Category Name" class="input-large" type="text" name="name" id="name" value="<?php echo set_value('name'); ?>">
										<p class="help-block">
											Name for the Category
										</p>
									</div>
								</div>
								
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Category Description</label>
									<div class="controls">
										<textarea name="description" id="description"><?php echo set_value('description'); ?></textarea>
										<p class="help-block">
											Description for Category
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
