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

						<form class="form-horizontal" id="product_form" enctype="multipart/form-data" method="post" action="<?php site_url('admin/product/add');?>" >
							<fieldset>
								<div id="legend" class="">
									<?php echo validation_errors('<div class="alert alert-error fade in">', '</div>'); ?>
									<?php echo $this -> ci_alerts -> display('error'); ?>
									<?php echo $this -> ci_alerts -> display('success'); ?>
									<?php if(isset($upload_error)){echo '<div class="alert alert-error fade in">'.$upload_error.'</div>';}  ?>
									<legend class="">
										Add Dish
									</legend>
								</div>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Dish Name</label>
									<div class="controls">
										<input placeholder="Dish Name" class="input-large" id="name" type="text" name="name">
										<p class="help-block">
											Name of the Dish
										</p>
									</div>
								</div>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Dish Description</label>
									<div class="controls">
										<textarea name="description" id="description" id="description"></textarea>
										<p class="help-block">
											Description of Dish
										</p>
									</div>
								</div>

								<div class="control-group">

									<!-- Select Basic -->
									<label class="control-label">Category</label>
									<div class="controls">
										<select class="input-large" name="category" id="category">
											<option value="">Select</option>
											<?php if(isset($categories)&&count($categories->result())){?>
												<?php foreach($categories->result() as $categories){?>
												<option value="<?php echo $categories->id;?>"><?php echo $categories->name;?></option>
												<?php } ?>
											<?php }?>
											
										</select>
									</div>

								</div>
								<div class="control-group">
									<label class="control-label">Image</label>

									<!-- File Upload -->
									<div class="controls">
										<div class="fileupload fileupload-new" data-provides="fileupload">
											<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" />
											</div>
											<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
											<div>
												<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>
													<input type="file" name="userfile"/>
												</span>
												<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
											</div>
										</div>
										<p class="help-block">
											<em>Supported formats: jpeg,jpg,png,gif Maximum file size: 500KB</em>
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
			<?php //echo form_ckeditor(array('id'=>'description'));?>
			<!--footer end-->
	</body>
</html>
