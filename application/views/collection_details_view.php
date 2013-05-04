<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Glenna Jean | Rest well little one..rest well </title>
<?php echo $this -> load -> view('slice/header'); ?>
 <!-- gallery open -->
<?php echo $this -> load -> view('slice/gallerycss.php'); ?>
 <!-- gallery close -->
</head>
<!--=============================================================================
               head ends here
============================================================================= -->
<!--=============================================================================
               body start
============================================================================= -->
<body>
<!--=========inner start=========-->
<div id="inner">
<!--=========header start=========-->
<div id="header">
<?php echo $this -> load -> view('slice/logo'); ?>
</div>
<!--=========header close=========-->

<!--=========wrapper start=========-->
<div id="wrapper">
<?php echo $this -> load -> view('slice/nav'); ?>
<div class="freediv"></div>


<!--=========breadcrumb start=========-->
<!--<div id="breadcrumb">
Home  >  <span class="color_change_b">Collections</span>
</div>
<!--=========breadcrumb start=========-->

<!--=========content head start=========-->
<div class="content_heading">
<h1><a href="<?php echo site_url('collection');?>">Collections</a></h1>
<div class="prev_next">
<?php if(isset($prev_id) && $prev_id!=''){ ?><a href="<?php echo site_url('collection/view/'.$prev_id);?>"><img src="<?php echo base_url(); ?>/assets/images/prev.png" alt="prev" title="Prev"></a><?php }else{ ?><img src="<?php echo base_url(); ?>/assets/images/prev_dis.png" alt="No more" title="No More"><?php } ?>&nbsp;
<?php if(isset($next_id) && $next_id!=''){ ?><a href="<?php echo site_url('collection/view/'.$next_id);?>"><img src="<?php echo base_url(); ?>/assets/images/next.png" alt="next" title="Next"></a><?php }else{ ?><img src="<?php echo base_url(); ?>/assets/images/next_dis.png" alt="No more" title="No More"><?php } ?>
</div>
<!--<div class="checkbox" id="checkbox">
<ul>
<li><input value="Boys" id="boys" type="checkbox"> Boy</li>
<li><input  value="Girls" id="girls" type="checkbox"> Girl</li>
<li><input value="Neutral" id="neutral" type="checkbox"> Neutral</li>
<div class="clear"></div>
</ul>
</div>-->
<div class="clear"></div>
</div>
<!--=========content head close=========-->


<!--=========content area start=========-->
<div id="contentarea">
<!--=========left sidebar nav start=========-->
<?php echo $this -> load -> view('slice/sidenav'); ?>
<!--=========left sidebar nav end=========-->
<div class="mob_prev_next">
<div class="mob_prev_next_inner">
<?php if(isset($prev_id) && $prev_id!=''){ ?><a href="<?php echo site_url('collection/view/'.$prev_id);?>"><img src="<?php echo base_url(); ?>/assets/images/prev.png" alt="prev" title="Prev"></a><?php }else{ ?><img src="<?php echo base_url(); ?>/assets/images/prev_dis.png" alt="No more" title="No More"><?php } ?>&nbsp;
<?php if(isset($next_id) && $next_id!=''){ ?><a href="<?php echo site_url('collection/view/'.$next_id);?>"><img src="<?php echo base_url(); ?>/assets/images/next.png" alt="next" title="Next"></a><?php }else{ ?><img src="<?php echo base_url(); ?>/assets/images/next_dis.png" alt="No more" title="No More"><?php } ?>
</div>
</div>
<div id="content_right">
<div id="preloader"><img src="<?php echo base_url();?>/assets/images/loader.gif" alt="AJAX loader" title="AJAX loader" /></div>
<div id="collection_content">
	
	<?php if (count($collections -> result())) {
		 foreach ($collections->result() as $collection) { $link=$collection ->store; ?>
		 <div id="content_right_top">
		 <div class="addison_image">
		 <a class="fancybox" href="#inline1" >
		 <img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $collection -> image; ?>&h=590&w=455&q=100" ></a>
		 <img src="<?php echo base_url();?>/assets/images/popup.png" width="24" height="24" alt="popup" class="pop"/> </div>
		 <div class="free"></div>
		 <div id="inline1" style="display: none; height:auto !important; ">
		 <p>
		 <div class="image_popup" id="out" >
		 <div class="image_popup_inner" id="popup_inner">
		 <img src="<?php echo base_url();?>/uploads/<?php echo $collection -> image; ?>" id="image_popup_inner" title="<?php echo $collection -> name; ?>">
		 <label class="popcontent">
		 <h3><?php echo $collection -> name; ?> <?php if($this -> session -> userdata('username')!=''){?><a href="<?php echo site_url('admin/collection/edit')?>/<?php echo $collection -> id; ?>"><img src="<?php echo base_url(); ?>assets/images/edit.png" alt="Edit"></a><?php }?></h3>
		 <p><?php echo $collection -> description; ?></p>
		 <a href="<?php echo site_url('store'); ?>"><img src="<?php echo base_url();?>/assets/images/wheretopurches.jpg" alt="wheretopuchase" class="popwheretopuchase"></a>
		 </label>
		 <div class="clear"></div>
		 </div>
		 <div class="clear"></div>
		 </div>
		 </p>
		 </div>
		 <div class="item_content">
		 <h2><?php echo $collection -> name; ?> <a data-pin-config="above" href="//pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.flickr.com%2Fphotos%2Fkentbrew%2F6851755809%2F&media=http%3A%2F%2Ffarm8.staticflickr.com%2F7027%2F6851755809_df5b2051c9_z.jpg&description=Next%20stop%3A%20Pinterest" data-pin-do="buttonPin" ><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>
		 	<?php if($this -> session -> userdata('username')!=''){?><a href="<?php echo site_url('admin/collection/edit')?>/<?php echo $collection -> id; ?>"><img src="<?php echo base_url(); ?>assets/images/edit.png" alt="Edit"></a> <?php }?>
		 </h2>
		 <p><?php echo $collection -> description; ?></p>
		 <!--<p class="color_change"><span class="bold">Tags:</span> blue, green, minky, stripe, white
		 floral, Cream</p>-->
		 <a href="<?php echo site_url('store'); ?>"><img src="<?php echo base_url();?>/assets/images/wheretopurches.jpg" alt="wheretopuchase" class="popwheretopuchase"></a>
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
		 <img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $swatche -> image; ?>&h=55&w=55&q=100" alt="Swatches" title="Swatches">
		 <?php } ?>
	     </label>
		 <label class="swatches_b">
		 	 <?php if(isset($link) && $link !=''){?> <a href="<?php echo $link;?>" target="_blank"  ><img src="<?php echo base_url();?>/assets/images/buyswatchesbnt.jpg"  alt="bnt"></a><?php }else{?><img src="<?php echo base_url();?>/assets/images/buyswatchesbnt_disable.png"  title="No link found"><?php }?>
		 <p>Not sure about the color or quality of our products?  Need swatches to match paint for your new nursery?  Full sets of fabric swatches are available for purchase here, or you can order over the phone by calling 800-446-6018.
		 	<?php if($this -> session -> userdata('username')!=''){?><a class="edit" href="<?php echo site_url('admin/swatches/in_collection')?>/<?php echo $collection -> id; ?>"><img src="<?php echo base_url(); ?>/assets/images/editt.png" alt="Edit"></a> <?php }?>
		 	</p>
		 </label>
		  <?php }else{echo 'Swatches are on the way,we will update soon....';} ?>
		 <div class="clear"></div>
		 </div>
		 
		 <!-- Product In this collection section -->
		 
		
		 <h2 class="tittle">Products in this Collection</h2>
		
		 <div class="content_right_middle">
		  <?php if (count($products)) { ?>
	
		 <div class="products">
		 <div class="products_inner">
		 <?php  foreach ($products as $product) {?>
		 <div class="products_item">
		 <label class="products_item_image">
		 <a class="fancybox" href="<?php echo base_url();?>/uploads/<?php echo $product -> image; ?>" data-fancybox-group="gallery"  title="<?php echo $product -> name; ?> <?php echo $product -> description; ?>">
		 <img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url();?>/uploads/<?php echo $product -> image; ?>&h=106&w=106&q=100" alt="<?php echo $product -> name; ?>" title="<?php echo $product -> name; ?>"></a>
		 </label>
		<!-- <h4><?php //echo  substr($product -> name, 0, 20); ?></h4>-->
		 <h4><?php echo  $product -> name; ?>
		 <?php if($this -> session -> userdata('username')!=''){?><a class="edit" href="<?php echo site_url('admin/product/edit')?>/<?php echo $product -> id; ?>"><img src="<?php echo base_url(); ?>/assets/images/editt.png" alt="Edit"></a> <?php }?>
		 </h4>
		 </div>
		 <?php } ?>
		 </div>
		 </div>
		  <?php } else {echo 'Products are on the way,we will update soon....';} ?>
		 <div class="clear"></div>
		 </div>
		 
		
		
		<!-- Similar collection section -->

		
		 <h2 class="tittle">You might also like </h2>
		 <div class="content_right_bottom">
		 <?php if (count($similar)) { ?>		 	
		 <?php foreach ($similar as $similar) { ?>
		 <div class="content_right_bottom_item">
		 <label class="content_right_bottom_item_image"><a href="<?php echo  site_url('collection/view/'.$similar-> id);?>">
		 <img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url();?>/uploads/<?php echo $similar -> image; ?>&h=100&w=100&q=100" title="<?php echo $similar -> name; ?>"></a></label>
		 <h4><a href="<?php echo  site_url('collection/view/'.$similar-> id);?>"><?php echo $similar -> name; ?></a></h4>
		 <h4><?php if($this -> session -> userdata('username')!=''){?><a href="<?php echo site_url('admin/collection/edit')?>/<?php echo $collection -> id; ?>"><img src="<?php echo base_url(); ?>/assets/images/editt.png" alt="Edit"></a> <?php }?>
		 </h4>
         </div>
		 <?php } ?>
		 <?php }else{?> 
		 <div class="content_right_middle">
		
		 <?php echo 'Similar collection not available.';?>
		
		 </div>
		 <?php } ?>
		 <div class="clear"></div>
		 </div>
		 
		<?php } ?>


</div>

<div class="clear"></div>
</div>

<div class="clear"></div>
</div>
<!--=========content area close=========-->




</div>
<!--=========wrapper close=========-->

<!--=========shadow start=========-->
<div class="shadow"><img src="<?php echo base_url();?>/assets/images/shadow.png" alt="shadow"></div>
<!--=========shadow close=========-->

<!--=========footer+ads=========-->
<?php echo $this -> load -> view('slice/footer'); ?>
<script>
	$(document).ready(function() {

		$('#prev_next').show();
		$('#checkbox').hide();
	}); 
</script>
<!--=========end footer+ads=========-->
</body>
<!--=============================================================================
               body close
============================================================================= -->
</html>

