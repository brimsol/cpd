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
					<div class="span8">
						<?php echo $this -> ci_alerts -> display('success'); ?>
						<legend>Dishes <img src="<?php echo base_url()?>assets/backend/img/al.gif" id="preloader"/> <select class="pull-right" id="backend_dishes_filter">
											<option value="All">All</option>
											<?php if(isset($categories)&&count($categories->result())){?>
												<?php foreach($categories->result() as $categories){?>
												<option value="<?php echo $categories -> id; ?>"><?php echo $categories -> name; ?></option>
												<?php } ?>
											<?php } ?>
											
										</select></legend>
						<?php if(isset($dishes) && count($dishes->result())){
							$c=$this->uri->segment(3, 0)+1; ?>
			<div id="ajax_dishes_filter">
						<table class="table table-hover table-striped table-bordered" id="sortable_dishes">
						<thead>
						<tr>
							<th>#</th>
							<!--<th>Image</th>-->
							<th>Name</th>
							<th>Category</th>
							<th >Action</th>
						</tr>
						</thead>
						<tbody>
						
						<?php foreach ($dishes->result() as $dishes){?>
						<tr>
							<td><?php echo $c; ?></td>
							<td><?php echo $dishes -> dname; ?></td>
							<td><a href="<?php echo site_url('admin/categories/edit'); ?>/<?php echo $dishes -> cid; ?>"><?php echo $dishes -> cname; ?></a></td>
							<td>
						
							<a rel="tooltip" data-original-title="View" data-toggle="modal" class="btn btn-mini" href="<?php echo site_url('admin/dishes/view'); ?>/<?php echo $dishes -> did; ?>" ><i class="icon-eye-open"></i></a>
							<a rel="tooltip" data-original-title="Edit" class="btn btn-mini" href="<?php echo site_url('admin/dishes/edit'); ?>/<?php echo $dishes -> did; ?>" ><i class="icon-edit"></i></a>
							<?php echo anchor('admin/dishes/delete/'.$dishes->did.'/'.$dishes->dimage,'<i class="icon-trash icon-white"></i>',
							array('onclick'=>"return confirm('You are about to delete ".$dishes-> dname.",\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?>
						
							</td>
						</tr>
				
							<?php $c++; ?>
							<?php } ?>
							
						</tbody>	
							<?php }else{echo "No Product found";} ?>
	
			</table>
			
    
						<div class="pagination pull-right margin-0 unprint">
						<?php
						if (isset($links)) {echo $links;
						}
 ?>
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
