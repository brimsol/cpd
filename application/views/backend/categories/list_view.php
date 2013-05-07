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
						<legend>Categories <img src="<?php echo base_url()?>assets/backend/img/al.gif" id="preloader"/> </legend>
						<div id="ajax_categories_filter">
						<?php if(isset($categories) && count($categories->result())){ ?>
						<table class="table table-hover table-striped table-bordered"  id="sortable_categories">
						<thead>
						<tr>
							<th>#</th>
							<!--<th>Image</th>-->
							<th>Name</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody class="content">
						
						<?php	$c=$this->uri->segment(3, 0)+1; 
						foreach ($categories->result() as $categories){?>
						<tr id="<?php echo $categories -> id; ?>">
							<td><?php echo $c; ?></td>

							<td><?php echo $categories -> name; ?></td>
							<td><?php echo $categories -> description; ?></td>
							<td>
						    <a rel="tooltip" data-original-title="Update this collection" class="btn btn-mini" href="<?php echo site_url('admin/categories/edit'); ?>/<?php echo $categories -> id; ?>" ><i class="icon-edit"></i></a>
							<?php echo anchor('admin/categories/delete/'.$categories->id.'/'.$categories->image,'<i class="icon-trash icon-white"></i>',
							array('onclick'=>"return confirm('You are about to delete ".$categories-> name.",\\n\\n All the products and swatches in this collection will be deleted\\n\\n Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?>
						    <input type="hidden" name="cid" id="cid" value="<?php echo $categories -> id; ?>" />
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
