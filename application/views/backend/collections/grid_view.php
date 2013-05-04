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
						<legend>Collections</legend>
						<div class="row-fluid">
            <ul class="thumbnails">
						<?php if(isset($collections) && count($collections->result())){
							$c=$this->uri->segment(3, 0)+1; 
						foreach ($collections->result() as $collection){?>
						 <li class="span4">
                			<div class="thumbnail">
                  				<img src="<?php echo base_url();?>/uploads/<?php echo $collection -> image; ?>" style="width: 300px; height: 200px;" alt="<?php echo $collection -> name; ?>">
                  			<div class="caption">
                   			 <h3><?php //echo $c; ?> <?php echo $collection -> name; ?></h3>
                   			    <p>Category : <strong><?php echo $collection -> category; ?></strong></p>
                    			<p><?php echo $collection -> description; ?></p>
                    			<p><a rel="tooltip" data-original-title="List Products" class="btn btn-mini" href="<?php echo site_url('collection/view'); ?>/<?php echo $collection -> id; ?>" ><i class="icon-list"></i></a>
								   <a rel="tooltip" data-original-title="View Details" class="btn btn-mini" href="<?php echo site_url('collection/view'); ?>/<?php echo $collection -> id; ?>" ><i class="icon-eye-open"></i></a>
								   <a rel="tooltip" data-original-title="Edit profile" class="btn btn-mini" href="<?php echo site_url('collection/edit'); ?>/<?php echo $collection -> id; ?>" ><i class="icon-edit"></i></a>
							       <?php echo anchor('collection/delete/'.$collection->id,'<i class="icon-trash icon-white"></i>',
							      array('onclick'=>"return confirm('You are about to delete ".$collection-> name.",\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?>
							   </p>
                  			  </div>
                			</div>
              			 </li>
						
							<?php $c++; ?>
							<?php } }else{echo "No records found";} ?>
					</ul>
             </div> 
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
