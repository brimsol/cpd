<?php if(isset($collections)&&count($collections)){ 
		foreach($collections as $collection){ ?>
		
		<div class="collection_item">
		<div class="collection_item_image"><a href="<?php echo  site_url('collection/view/'.$collection -> id);?>" >
			<img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $collection -> image; ?>&h=210&w=210&q=100" alt="<?php echo $collection -> name; ?>"></a></div>
		<h2><a href="<?php echo  site_url('collection/view/'.$collection -> id);?>"><?php echo $collection -> name; ?><?php if($collection->new =='Y'){?> <new> - New</new> <?php }?></a> 
			<?php if($this -> session -> userdata('username')!=''){?><a href="<?php echo site_url('admin/collection/edit')?>/<?php echo $collection -> id; ?>"><img src="<?php echo base_url(); ?>/assets/images/edit.png" alt="Edit"></a> <?php }?></h2>
		</div>

	<?php } }else{echo 'No collection found';} ?>