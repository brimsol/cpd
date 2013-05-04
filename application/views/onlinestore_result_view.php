<h3>Online Store</h3>

<?php if(isset($onlinestores) && count($onlinestores)){
foreach ($onlinestores as $store){
?>
<span class="gotostore_name"><?php echo $store-> name; ?> <?php if($this -> session -> userdata('username')!=''){?><a href="<?php echo site_url('admin/onlinestore/edit')?>/<?php echo $store->id; ?>"><img src="<?php echo base_url(); ?>/assets/images/editt.png" alt="Edit"></a> <?php }?></span>
<span class="gotostore_link"><a href="<?php echo $store-> url; ?>" ><?php echo $store-> url; ?></a></span>
<label class="gotostore_b"><a href="<?php echo $store-> url; ?>"><img src="<?php echo base_url()?>assets/images/gotostore.png"  alt="gotostore" class="gotostore_b_image"></a></label>
<div class="clear"></div>
<div class="border_gray"></div>
<?php } }else{echo 'Please select an online store';}?>













