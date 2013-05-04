<?php if (count($collections -> result())) {
		 foreach ($collections->result() as $collection) { $link=$collection ->store; ?>
		 <div id="content_right_top">
		 <div class="addison_image">
		 <a class="fancybox" href="#inline1" >
		 <img src="<?php echo base_url();?>/uploads/<?php echo $collection -> image; ?>" alt="addison_image1"></a>
		 <img src="<?php echo base_url();?>/assets/images/popup.png" width="24" height="24" alt="popup" class="pop"/> </div>
		 <div class="free"></div>
		 <div id="inline1" style="display: none; height:auto !important; ">
		 <p>
		 <div class="image_popup" id="out" >
		 <div class="image_popup_inner" id="popup_inner">
		 <img src="<?php echo base_url();?>/uploads/<?php echo $collection -> image; ?>" id="image_popup_inner" >
		 <label class="popcontent">
		 <h3><?php echo $collection -> name; ?></h3>
		 <p><?php echo $collection -> description; ?></p>
		 <a href="<?php echo $collection -> store; ?>"><img src="<?php echo base_url();?>/assets/images/wheretopurches.jpg" alt="wheretopuchase" class="popwheretopuchase"></a>
		 </label>
		 <div class="clear"></div>
		 </div>
		 <div class="clear"></div>
		 </div>
		 </p>
		 </div>
		 <div class="item_content">
		 <h2><?php echo $collection -> name; ?> <a data-pin-config="above" href="//pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.flickr.com%2Fphotos%2Fkentbrew%2F6851755809%2F&media=http%3A%2F%2Ffarm8.staticflickr.com%2F7027%2F6851755809_df5b2051c9_z.jpg&description=Next%20stop%3A%20Pinterest" data-pin-do="buttonPin" ><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a></h2>
		 <p><?php echo $collection -> description; ?></p>
		 <!--<p class="color_change"><span class="bold">Tags:</span> blue, green, minky, stripe, white
		 floral, Cream</p>-->
		 <a href="<?php echo $collection -> store; ?>"><img src="<?php echo base_url();?>/assets/images/wheretopurches.jpg" alt="wheretopuchase" class="popwheretopuchase"></a>
		 </div>
		 <div class="clear"></div>
		 </div>
		<?php } ?>
		 <!--Buy swatches section -->
		 

		 <h2 class="tittle">Buy Swatches </h2>
		
		 <div class="content_right_middle">
		 <?php if (count($swatches)) { ?>
		 <label class="swatches">
		 <?php foreach ($swatches as $swatche) { ?>
		 <img src="<?php echo base_url();?>/uploads/<?php echo $swatche -> image; ?>" width="55px" height="55px">
		 <?php  } ?>
		 
		 </label>
		 <label class="swatches_b">
		 <p>We recognize trying to match fabrics online can be difficult. Colors and textures may vary slightly than as depicted on your monitor. If you\'re matching.</p>
		 <a href="<?php if(isset($link)){echo $link;}?>"><img src="<?php echo base_url();?>/assets/images/buyswatchesbnt.jpg"  alt="bnt"></a>
		 </label>
		  <?php }else{echo 'No swatches found for this collection';} ?>
		 <div class="clear"></div>
		 </div>
		 
		
		 
		 <!-- Product In this collection section -->
		 
		
		 <h2 class="tittle">Products in this Collection</h2>
		
		 
		 <div class="content_right_middle">
		  <?php if (count($products)) { ?>
		 <div class="clear"></div>
		 <div class="products">
		 <div class="products_inner">
		 <?php  foreach ($products as $product) {?>
		 <div class="products_item">
		 <label class="products_item_image">
		 <a class="fancybox" href="<?php echo base_url();?>/uploads/<?php echo $product -> image; ?>" data-fancybox-group="gallery"  title="<?php echo $product -> description; ?>"><img src="<?php echo base_url();?>/uploads/<?php echo $product -> image; ?>" width="100px" height="100px" alt="products"></a></label>
		 <h3><?php echo $product -> name; ?></h3>
		 </div>
		 <?php } ?>
		 </div>
		 </div>
		  <?php } else {echo 'No Product found in this collection';} ?>
		 <div class="clear"></div>
		 </div>
		
		<!-- Similar collection section -->

		
		 <h2 class="tittle">You might also like </h2>
		 <div class="content_right_bottom">
		 <?php if (count($similar)) { ?>
		 <?php foreach ($similar as $similar) { ?>
		 <div class="content_right_bottom_item" id="bottom_item">
		 <label class="content_right_bottom_item_image"><a id="<?php echo $similar->id;?>" class="navid"><img src="<?php echo base_url();?>/uploads/<?php echo $similar -> image; ?>" width="100px" height="100px" alt="abc"></a></label>
		 <h4><a id="<?php echo $similar->id;?>" class="navid"><?php echo $similar -> name; ?></a></h4>
         </div>
		 <?php } ?>
		 <?php }else{?> 
		 <div class="content_right_bottom_sudo">
		 <?php echo 'No similar collection found'; ?>
		 </div>
		 <?php } ?>
		
		 <div class="clear"></div>
		 </div>
		<?php } ?>
