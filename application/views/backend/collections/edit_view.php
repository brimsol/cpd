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

						<form class="form-horizontal" id="collection_form"  enctype="multipart/form-data" method="post" action="<?php site_url('admin/collection/edit'); ?>" >
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
										Update Collection
									</legend>
								</div>
								
								<?php if(isset($collections) && count($collections->result())){
								
								foreach ($collections->result() as $collection){?>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Collection Name</label>
									<div class="controls">
										<input placeholder="Collection Name" class="input-large" type="text" name="name" id="name" value="<?php echo $collection -> name; ?>">
										<p class="help-block">
											Name of the Collection
										</p>
									</div>
								</div>
								<div class="control-group">

									<!-- Text input-->
									
									<div class="controls">
<input placeholder="Collection Name" class="input-large" type="checkbox" name="new" id="new" value="Y" <?php if($collection ->new == 'Y'){echo "checked='TRUE'";} ?>>  New Item
									</div>
								</div>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Collection Description</label>
									<div class="controls">
										<textarea name="description" id="description"><?php echo $collection -> description; ?></textarea>
										<p class="help-block">
											Description for Collection
										</p>
									</div>
								</div>

								<div class="control-group">

									<!-- Select Basic -->
									<label class="control-label">Category</label>
									<div class="controls">
										<select class="input-large" name="category" id="category">
											<option vlaue="">Select</option>
											<option value="Boys" <?php if($collection -> category == 'Boys'){echo "selected='TRUE'";}?>>Boys</option>
											<option value="Girls" <?php if($collection -> category == 'Girls'){echo "selected='TRUE'";}?>>Girls</option>
											<option value="Neutral" <?php if($collection -> category == 'Neutral'){echo "selected='TRUE'";}?>>Neutral</option>
										</select>
									</div>

								</div>
								<div class="control-group">

									<!-- Select Basic -->
									<label class="control-label">Similar Collection</label>
									<div class="controls">
										<select class="input-large" name="similar[]" multiple="multiple" id="similar">
										<?php $sc = unserialize($collection -> similar);?>
											<?php if(is_array($sc)){?>
											<?php if(isset($collections_list) && count($collections_list->result())){?>
												    <?php foreach($collections_list->result() as $collection_list){?>
												<?php if($collection_list -> id != $collection -> id)	{?>
												<option <?php if (in_array($collection_list -> id, $sc)) {echo 'selected="TRUE"'; }?> value="<?php echo $collection_list -> id; ?>"><?php echo $collection_list -> name; ?></option>
												     <?php } ?>
												<?php } ?>
											<?php } ?>
										<?php }else{?>
											<?php if(isset($collections_list) && count($collections_list->result())){?>
												<?php foreach($collections_list->result() as $collection_list){?>
													<?php if($collection_list -> id != $collection -> id)	{?>
												<option  value="<?php echo $collection_list -> id; ?>"><?php echo $collection_list -> name; ?></option>
												    <?php } ?>
												<?php } ?>
											<?php } ?>
											
											<?php } ?>
										</select>
										
									</div>

								</div>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Store URL (Swatches)</label>
									<div class="controls">
										<input placeholder="Store URL" class="input-large" type="text" name="store" value="<?php echo $collection -> store; ?>">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Image</label>

									<!-- File Upload -->
									<div class="controls">
										<div class="fileupload fileupload-new" data-provides="fileupload">
											<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $collection -> image; ?>&h=590&w=455&q=100" />
											</div>
											<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
											<div>
												<span class="btn btn-file"><span class="fileupload-new">Change image</span><span class="fileupload-exists">Change</span>
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
										<button class="btn btn-success" type="submit">
											Update
										</button> <a href="<?php echo site_url('admin/collections');?>" class="btn btn-primary">
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
			<script src="<?php echo base_url()?>assets/backend/js/jquery.bsmselect.js"></script>
			<script>
				$(document).ready(function() {
					$("#similar").bsmSelect({
						addItemTarget : 'bottom',
						animate : true,
						highlight : true,
						sortable : true

					}).after($("<p1 id='sa'><a href='#'>Select all</a><p1>").click(function() {
						$("p1").toggle();
						$("#similar").children().attr("selected", "selected").end().change();

						return false;
					})).after($("<p1 id='sa' style='display:none'><a href='#'>Remove All</a><p1>").click(function() {
						$("p1").toggle();

						$("#similar").children().removeAttr("selected", "selected").end().change();

						return false;
					}));
				});
			</script>
			<!--footer end-->
	</body>
</html>
