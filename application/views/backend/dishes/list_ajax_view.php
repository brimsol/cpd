<?php if(isset($dishes) && count($dishes->result())){
							$c=$this->uri->segment(3, 0)+1; ?>
			<div id="ajax_product_filter">
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
						<tbody class="content">
						
						<?php foreach ($dishes->result() as $dishes){?>
						<tr id="<?php echo $dishes -> did; ?>" >
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