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
				<div class="span3 well">
					<?php echo $this -> load -> view('backend/slice/side_nav'); ?>
				</div>
				<div class="span9">
					<?php echo $this -> ci_alerts -> display('success'); ?>
					<legend>Search result</legend>
					<?php echo validation_errors('<div class="alert alert-error fade in">', '</div>'); ?>
					<?php if(isset($search_result) && count($search_result)){ ?>
						
						
							<table class="table table-striped table-hover">
								<thead>
						<tr>
							<th>Name</th>
							<th>Action</th>
							
						</tr>
						</thead>
								<tbody>
							<?php foreach($search_result AS $result){?>
								<tr>
									<td><?php echo $result -> name; ?></td>
								    <td>
								    	
								    	<?php
											if ($cat == 'collection') {?>

												<a rel="tooltip" data-original-title="List Products in this Collection" class="btn btn-mini" href="<?php echo site_url('admin/products/in_collection'); ?>/<?php echo $result -> id; ?>" ><i class="icon-list"></i></a>
						                        <a rel="tooltip" data-original-title="List Swatches in this Collection" class="btn btn-mini" href="<?php echo site_url('admin/swatches/in_collection'); ?>/<?php echo $result -> id; ?>" ><i class="icon-th-list"></i></a>
												<a rel="tooltip" data-original-title="View this collection on front end" class="btn btn-mini" href="<?php echo site_url('collection/view'); ?>/<?php echo $result -> id; ?>" ><i class="icon-eye-open"></i></a>
												<a rel="tooltip" data-original-title="Update this collection" class="btn btn-mini" href="<?php echo site_url('admin/collection/edit'); ?>/<?php echo $result -> id; ?>" ><i class="icon-edit"></i></a>
												<?php echo anchor('admin/collection/delete/'.$result->id.'/'.$result->image,'<i class="icon-trash icon-white"></i>',
												array('onclick'=>"return confirm('You are about to delete ".$result-> name.",\\n\\n All the products and swatches in this collection will be deleted\\n\\n Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?>

											<?php } elseif ($cat == 'products') { ?>

												<a rel="tooltip" data-original-title="View Details" data-toggle="modal" class="btn btn-mini" href="<?php echo site_url('admin/product/view'); ?>/<?php echo $result -> id; ?>" ><i class="icon-eye-open"></i></a>
												<a rel="tooltip" data-original-title="Edit profile" class="btn btn-mini" href="<?php echo site_url('admin/product/edit'); ?>/<?php echo $result -> id; ?>" ><i class="icon-edit"></i></a>
												<?php echo anchor('admin/product/delete/'.$result->id.'/'.$result->image,'<i class="icon-trash icon-white"></i>',
												array('onclick'=>"return confirm('You are about to delete ".$result-> name.",\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?>
						

											<?php } elseif ($cat == 'swatches') { ?>

												<a rel="tooltip" data-original-title="View Details" data-toggle="modal" class="btn btn-mini" href="<?php echo site_url('admin/swatche/view'); ?>/<?php echo $result -> id; ?>" ><i class="icon-eye-open"></i></a>
												<a rel="tooltip" data-original-title="Edit profile" class="btn btn-mini" href="<?php echo site_url('admin/swatche/edit'); ?>/<?php echo $result -> id; ?>" ><i class="icon-edit"></i></a>
												<?php echo anchor('admin/swatche/delete/'.$result->id.'/'.$result->image,'<i class="icon-trash icon-white"></i>',
												array('onclick'=>"return confirm('You are about to delete ".$result-> name.",\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?>
						

											<?php } elseif ($cat == 'stores') { ?>

												<a rel="tooltip" data-original-title="View Details" data-toggle="modal" class="btn btn-mini" href="<?php echo site_url('admin/store/view'); ?>/<?php echo $result -> id; ?>" ><i class="icon-eye-open"></i></a>
												<a rel="tooltip" data-original-title="Edit Store" class="btn btn-mini" href="<?php echo site_url('admin/store/edit'); ?>/<?php echo $result -> id; ?>" ><i class="icon-edit"></i></a>
												<?php echo anchor('admin/store/delete/'.$result->id,'<i class="icon-trash icon-white"></i>',
												array('onclick'=>"return confirm('You are about to delete ".$result-> name.",\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?>
						

											<?php } elseif ($cat == 'onlinestores') { ?>

												<a rel="tooltip" data-original-title="Edit Store" class="btn btn-mini" href="<?php echo site_url('admin/onlinestore/edit'); ?>/<?php echo $result -> id; ?>" ><i class="icon-edit"></i></a>
												<?php echo anchor('admin/onlinestore/delete/'.$result->id,'<i class="icon-trash icon-white"></i>',
												array('onclick'=>"return confirm('You are about to delete ".$result-> name.",\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?>
						

											<?php } ?>

								    	
								    	
								    	
								    </td>
								</tr>
								<?php } ?>
								</tbody>
							</table>
							
							
							<?php }else{echo 'No result found';} ?> 
                    
				</div><!--/span8-->
			</div><!--/row-fuid-->

			<!--footer-->
			<?php echo $this -> load -> view('backend/slice/footer'); ?>
			<!--footer end-->
	</body>
</html>
