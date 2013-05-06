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
						<legend>Collections <img src="<?php echo base_url()?>assets/images/al.gif" id="preloader"/> <select class="pull-right" id="backend_collection_filter">
							<option value="All">All</option>
							<option value="Boys">Boys</option>
							<option value="Girls">Girls</option>
							<option value="Neutral">Neutral</option>
						</select></legend>
						<div id="ajax_collection_filter">
						<table class="table table-hover table-striped table-bordered" id="members_result_table">
						<thead>
						<tr>
							<th>#</th>
							<!--<th>Image</th>-->
							<th>Name</th>
							<th>Category</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<?php if(isset($collections) && count($collections->result())){
							$c=$this->uri->segment(3, 0)+1; 
						foreach ($collections->result() as $collection){?>
						<tr>
							<td><?php echo $c; ?></td>
							<!--<td><a href="#"><img src="http://placehold.it/64x64" alt="<?php echo $collection -> name; ?>"></a></td>-->
							<td><?php echo $collection -> name; ?></td>
							<td><?php echo $collection -> category; ?></td>
							<td>
						    <a rel="tooltip" data-original-title="List Products in this Collection" class="btn btn-mini" href="<?php echo site_url('admin/products/in_collection'); ?>/<?php echo $collection -> id; ?>" ><i class="icon-list"></i></a>
						    <a rel="tooltip" data-original-title="List Swatches in this Collection" class="btn btn-mini" href="<?php echo site_url('admin/swatches/in_collection'); ?>/<?php echo $collection -> id; ?>" ><i class="icon-th-list"></i></a>
							<a rel="tooltip" data-original-title="View this collection on front end" class="btn btn-mini" href="<?php echo site_url('collection/view'); ?>/<?php echo $collection -> id; ?>" ><i class="icon-eye-open"></i></a>
							<a rel="tooltip" data-original-title="Update this collection" class="btn btn-mini" href="<?php echo site_url('admin/collection/edit'); ?>/<?php echo $collection -> id; ?>" ><i class="icon-edit"></i></a>
							<?php echo anchor('admin/collection/delete/'.$collection->id.'/'.$collection->image,'<i class="icon-trash icon-white"></i>',
							array('onclick'=>"return confirm('You are about to delete ".$collection-> name.",\\n\\n All the products and swatches in this collection will be deleted\\n\\n Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?>
						
							</td>
						</tr>
				
                
							<?php $c++; ?>
							<?php } }else{echo "No records found";} ?>
					</tbody>
			</table>
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
