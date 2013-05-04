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
						<legend>Stores <img src="<?php echo base_url()?>assets/images/al.gif" id="preloader"/> <select class="pull-right" name="state" id="backend_store_filter">
											<option value="All">All</option>
											<?php if(isset($states)&&count($states)){?>
												<?php foreach($states as $state){?>
												<option value="<?php echo $state -> id; ?>"><?php echo $state -> name; ?></option>
												<?php } ?>
											<?php } ?>
										</select></legend>
										<div id="ajax_store_filter">
						<table class="table table-hover table-striped table-bordered" id="members_result_table">
						<thead>
						<tr>
							<th>#</th>
							<!--<th>Image</th>-->
							<th>Name</th>
							<th>State</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<?php if(isset($stores) && count($stores)){
							$c=$this->uri->segment(3, 0)+1; 
						foreach ($stores as $store){?>
						<tr>
							<td><?php echo $c; ?></td>
							<!--<td><a href="#"><img src="http://placehold.it/64x64" alt="<?php echo $collection -> name; ?>"></a></td>-->
							<td><?php echo $store -> name; ?></td>
							<td><?php echo $store -> state; ?></td>
							<td>
						    <a rel="tooltip" data-original-title="View Details" data-toggle="modal" class="btn btn-mini" href="<?php echo site_url('admin/store/view'); ?>/<?php echo $store -> id; ?>" ><i class="icon-eye-open"></i></a>
							<a rel="tooltip" data-original-title="Edit Store" class="btn btn-mini" href="<?php echo site_url('admin/store/edit'); ?>/<?php echo $store -> id; ?>" ><i class="icon-edit"></i></a>
							<?php echo anchor('admin/store/delete/'.$store->id,'<i class="icon-trash icon-white"></i>',
							array('onclick'=>"return confirm('You are about to delete ".$store-> name.",\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?>
						
							</td>
						</tr>
				
                
							<?php $c++; ?>
							<?php } }else{echo "No records found";} ?>
					</tbody>
			</table>
						<div class="pagination pull-right margin-0 unprint">
						<?php echo $links; ?>
						
						</div>
</div>
					</div>

				</div><!--/span12-->
			</div><!--/row-fuid-->

			<!--footer-->
			<?php echo $this -> load -> view('backend/slice/footer'); ?>
			<!--footer end-->
	</body>
</html>
