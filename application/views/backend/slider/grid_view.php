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
					<div class="span8">
						<?php echo $this -> ci_alerts -> display('success'); ?>
						<legend>Slider</legend>
						<ul class="thumbnails">
						<?php if(isset($slides) && count($slides)){	
							foreach ($slides as $slide){ ?>
							   
								<li class="span3">
								
									<img src="<?php echo base_url(); ?>uploads/<?php echo $slide->image; ?>" class="img-polaroid"></a>
									<p></p>
									<p>
										<a class="btn btn-mini" data-original-title="Update" rel="tooltip" href="<?php echo site_url('admin/slider/edit');?>/<?php echo $slide->id; ?>"><i class="icon-edit"></i></a> 
									    <?php echo anchor('admin/slider/delete/'.$slide->id.'/'.$slide->image,'<i class="icon-trash icon-white"></i>',
											array('onclick'=>"return confirm('You are about to delete this image,\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?>
									</p>
								
								</li>
 
							<?php
							} }
							?>
							<?php if($slide_count<4){ ?>
								<li class="span3">
								
									<a href="<?php echo site_url('admin/slider/add');?>"><img src="http://placehold.it/400x300" class="img-polaroid"></a>
									<p></p>
									<p>
										<a class="btn btn-small" data-original-title="Update" rel="tooltip" href="<?php echo site_url('admin/slider/add');?>"><i class="icon-plus"></i></a> 
									     <!--<a class="btn btn-small" data-original-title="Delete" rel="tooltip" href="#" data-file_id="<?php echo $slide->id; ?>"><i class="iconic-x"></i></a>-->
									</p>
								
								</li>
							<?php }?>
						</ul>
						<div class="pagination pull-right margin-0 unprint">
						<?php //echo $links; ?>
						
						</div>

					</div>

				</div><!--/span12-->
			</div><!--/row-fuid-->

			<!--footer-->
			<?php echo $this -> load -> view('backend/slice/footer'); ?>
			<!--footer end-->
	</body>
</html>
