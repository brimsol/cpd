
						<?php if(isset($products) && count($products->result())){
							$c=$this->uri->segment(3, 0)+1; ?>
						<table class="table table-hover table-striped table-bordered"  id="sortable">
						<thead>
						<tr>
							<th>#</th>
							<!--<th>Image</th>-->
							<th>Name</th>
							<th>Collection</th>
							<th >Action</th>
						</tr>
						</thead>
						<tbody class="content">
						
						<?php foreach ($products->result() as $product){?>
						<tr id="<?php echo $product -> pid; ?>" >
							<td><?php echo $c; ?></td>
							<!--<td><a href="#"><img src="http://placehold.it/64x64" alt="<?php //echo $collection -> name; ?>"></a></td>-->
							<td><?php echo $product -> pname; ?></td>
							<td><a href="<?php echo site_url('admin/collection/edit'); ?>/<?php echo $product -> cid; ?>"><?php echo $product -> cname; ?></a></td>
							<td class="unprint">
						
							<a rel="tooltip" data-original-title="View Details" data-toggle="modal" class="btn btn-mini" href="<?php echo site_url('admin/product/view'); ?>/<?php echo $product -> pid; ?>" ><i class="icon-eye-open"></i></a>
							<a rel="tooltip" data-original-title="Edit profile" class="btn btn-mini" href="<?php echo site_url('admin/product/edit'); ?>/<?php echo $product -> pid; ?>" ><i class="icon-edit"></i></a>
							<?php echo anchor('admin/product/delete/'.$product->pid.'/'.$product->pimage,'<i class="icon-trash icon-white"></i>',
							array('onclick'=>"return confirm('You are about to delete ".$product-> pname.",\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?>
						    <input type="hidden" name="cid" id="cid" value="<?php echo $product -> cid; ?>" />
							</td>
						</tr>
				
							<?php $c++; ?>
							<?php } ?>
						</tbody>	
							<?php }else{echo "No Product found";} ?>
	
			</table>
						