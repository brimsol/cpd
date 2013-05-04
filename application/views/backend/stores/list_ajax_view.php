	<?php if(isset($stores) && count($stores)){
							$c=$this->uri->segment(3, 0)+1; ?>
						<table class="table table-hover table-striped table-bordered" id="members_result_table">
						<thead>
						<tr>
							<th>#</th>
							<!--<th>Image</th>-->
							<th>Name</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
					
						<?php foreach ($stores as $store){?>
						<tr>
							<td><?php echo $c; ?></td>
							<!--<td><a href="#"><img src="http://placehold.it/64x64" alt="<?php echo $collection -> name; ?>"></a></td>-->
							<td><?php echo $store -> name; ?></td>
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
						