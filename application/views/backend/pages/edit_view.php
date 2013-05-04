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

						<form  method="post" action="<?php site_url('admin/page/add');?>" >
							<fieldset>
								<div id="legend" class="">
									<?php echo validation_errors('<div class="alert alert-error fade in">', '</div>'); ?>
									<?php echo $this -> ci_alerts -> display('error'); ?>
									<?php echo $this -> ci_alerts -> display('success'); ?>
									<?php if(isset($pages) && count($pages->result())){
							$c=$this->uri->segment(3, 0)+1; 
						foreach ($pages->result() as $page){?>
									<legend class="">
										Add Page
									</legend>
								</div>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Title</label>
									<div class="controls">
										<input placeholder="Collection Name" class="input-xlarge" type="text" name="title" value="<?php echo $page -> title; ?>">
										<!--<p class="help-block">
											A Title for your Page
										</p>-->
									</div>
								</div>
								<div class="control-group">

									<!-- Text input-->
									<label class="control-label" for="input01">Body</label>
									<div class="controls">
										<textarea name="body"><?php echo $page -> body; ?></textarea>
										<!--<p></p>
										<!--<p class="help-block">
											Content of your Page
										</p>-->
									</div>
								</div>

								<div class="control-group">
									<label class="control-label"></label>

									<!-- Button -->
									<div class="controls">
										<a href="<?php echo site_url('admin/pages');?>" class="btn btn-primary pull-right">
											Cancel
										</a><p class="pull-right"> &nbsp;</p> <button class="btn btn-success pull-right">
											Save
										</button> 
									</div>
								</div>
							<?php $c++; ?>
							<?php } }else{echo "No Pages found";} ?>
							</fieldset>
						</form>

					</div>

				</div><!--/span12-->
			</div><!--/row-fuid-->

			<!--footer-->
			<?php echo $this -> load -> view('backend/slice/footer'); ?>
			<?php echo form_ckeditor(array('id'=>'body'));?>
			<!--footer end-->
	</body>
</html>
