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
						<legend>Swatches <img src="<?php echo base_url()?>assets/images/al.gif" id="preloader"/> <select class="pull-right" id="backend_swatch_filter">
											<option value="All">All</option>
											<?php if(isset($collections)&&count($collections->result())){?>
												<?php foreach($collections->result() as $collection){?>
												<option value="<?php echo $collection->id;?>"><?php echo $collection->name;?></option>
												<?php } ?>
											<?php }?>
											
										</select></legend>
						<?php if(isset($swatches) && count($swatches->result())){
							$c=$this->uri->segment(3, 0)+1;  ?>
							<div id="ajax_swatch_filter">
						<table class="table table-hover table-striped table-bordered" id="members_result_table">
						<thead>
						<tr>
							<th>#</th>
							<!--<th>Image</th>-->
							<th>Name</th>
							<th>Collection</th>
							<th >Action</th>
						</tr>
						</thead>
						<tbody>
						
						<?php foreach ($swatches->result() as $swatche){?>
						<tr>
							<td><?php echo $c; ?></td>
							<!--<td><a href="#"><img src="http://placehold.it/64x64" alt="<?php echo $collection -> name; ?>"></a></td>-->
							<td><?php echo $swatche -> pname; ?></td>
							<td><a href="<?php echo site_url('admin/collection/edit'); ?>/<?php echo $swatche -> cid; ?>"><?php echo $swatche -> cname; ?></a></td>
							<td class="unprint">
						
							<a rel="tooltip" data-original-title="View Details" data-toggle="modal" class="btn btn-mini" href="<?php echo site_url('admin/swatche/view'); ?>/<?php echo $swatche -> pid; ?>" ><i class="icon-eye-open"></i></a>
							<a rel="tooltip" data-original-title="Edit profile" class="btn btn-mini" href="<?php echo site_url('admin/swatche/edit'); ?>/<?php echo $swatche -> pid; ?>" ><i class="icon-edit"></i></a>
							<?php echo anchor('admin/swatche/delete/'.$swatche->pid.'/'.$swatche->pimage,'<i class="icon-trash icon-white"></i>',
							array('onclick'=>"return confirm('You are about to delete ".$swatche-> pname.",\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?>
						
							</td>
						</tr>
				</tbody>
							<?php $c++; ?>
							<?php } }else{echo "No Swatch found";} ?>
	
			</table>
						<div class="pagination pull-right margin-0 unprint">
						<?php if(isset($links)){echo $links;} ?>
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
