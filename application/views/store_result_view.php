<h3>Search Results</h3>
<p>These are the stores we found that were closest to your location. 
All stores do not carry all brands or products, so please call ahead if you are looking for a 
specific item.
</p>

<?php if(isset($stores) && count($stores)){
foreach ($stores as $store){
?>
<div class="map_address">
<label class="address">
<h5><?php echo $store-> name; ?> <?php if($this -> session -> userdata('username')!=''){?><a href="<?php echo site_url('admin/store/edit')?>/<?php echo $store -> id; ?>"><img src="<?php echo base_url(); ?>/assets/images/editt.png" alt="Edit"></a> <?php }?></h5>
<span class="blue"><?php echo $store-> contact_no; ?></span>
<span class="gray"><?php echo $store-> address; ?></span>
<?php if($store-> url !=''){?>
<span class="gray">Online Store : <a href="<?php echo $store-> url; ?>">Click Here</a></span>
<?php } ?>
</label>
<label class="maplink">
<?php if($store-> longitude == '' && $store-> latitude == '') {?>      
<a class="maps fancybox.iframe" href="http://maps.google.com/?q=<?php echo $store-> name; ?>,<?php echo $store-> address; ?>&t=m&output=embed"><img src="<?php echo base_url(); ?>/assets/images/mapreport.png" alt="maps"></a>		
<?php }else{ ?>		 
<a class="maps fancybox.iframe" href="http://maps.google.com/?q=<?php echo $store-> latitude; ?>,<?php echo $store-> longitude; ?>&t=m&output=embed"><img src="<?php echo base_url(); ?>/assets/images/mapreport.png" alt="maps"></a>		
<?php } ?>		 
</div>
</label>

<div class="clear"></div>
</div>

<div class="border_gray"></div>
<?php }}else{ ?>
<div class="clear"></div>
<div class="border_gray"></div>
<h2>No Store found in location selected by you</h2>
<div class="border_gray"></div>

<?php } ?>












