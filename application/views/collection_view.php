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
<div id="next_prev">
<div class="prev_next" id="prev_next">
<?php if(isset($prev_id) && count($prev_id)){ ?><a id="<?php echo $prev_id->id; ?>" class="navid"><img src="<?php echo base_url(); ?>/assets/images/prev.png" alt="prev"></a><?php } ?>&nbsp;
<?php if(isset($next_id) && count($next_id)){ ?><a id="<?php echo $next_id->id; ?>" class="navid"><img src="<?php echo base_url(); ?>/assets/images/next.png" alt="next"></a><?php } ?>
</div>
</div>
<div class="checkbox" id="checkbox">
<ul>
<li><input value="Boys" id="boys" type="checkbox"> Boy</li>
<li><input  value="Girls" id="girls" type="checkbox"> Girl</li>
<li><input value="Neutral" id="neutral" type="checkbox"> Neutral</li>
<div class="clear"></div>
</ul>
</div>
<div class="clear"></div>
</div>
<!--=========content head close=========-->


<!--=========content area start=========-->
<div id="contentarea">
<!--=========left sidebar nav start=========-->
<?php echo $this -> load -> view('slice/sidenav'); ?>
<!--=========left sidebar nav end=========-->
<!--=========mobile checkbox start=========-->
<div class="mobile_checkbox">
<ul>
<li><input value="Boys" id="mob_boys" type="checkbox"> Boy</li>
<li><input  value="Girls" id="mob_girls" type="checkbox"> Girl</li>
<li><input value="Neutral" id="mob_neutral" type="checkbox"> Neutral</li>
<div class="clear"></div>
</ul>
</div>
<!--=========mobile checkbox close=========-->








<div id="content_right">
<div id="preloader"><img src="<?php echo base_url(); ?>/assets/images/loader.gif" alt="AJAX loader" title="AJAX loader" /></div>
<div id="collection_content">
	
	<?php if(isset($collections)&&count($collections)){ 
		foreach($collections as $collection){ ?>
		
		<div class="collection_item">
		<div class="collection_item_image"><a href="<?php echo  site_url('collection/view/'.$collection -> id);?>" >
			<img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url(); ?>uploads/<?php echo $collection -> image; ?>&h=210&w=210&q=100" alt="<?php echo $collection -> name; ?>" title="<?php echo $collection -> name; ?>" ></a></div>
		<h2><a href="<?php echo  site_url('collection/view/'.$collection -> id);?>"><?php echo $collection -> name; ?><?php if($collection->new =='Y'){?> <new> - New</new> <?php }?></a> 
			<?php if($this -> session -> userdata('username')!=''){?><a href="<?php echo site_url('admin/collection/edit')?>/<?php echo $collection -> id; ?>"><img src="<?php echo base_url(); ?>/assets/images/edit.png" alt="Edit"></a> <?php }?></h2>
		</div>

	<?php } } ?>


</div>

<div class="clear"></div>
</div>

<div class="clear"></div>
</div>
<!--=========content area close=========-->




</div>
<!--=========wrapper close=========-->

<!--=========shadow start=========-->
<div class="shadow"><img src="<?php echo base_url(); ?>/assets/images/shadow.png" alt="shadow"></div>
<!--=========shadow close=========-->

<!--=========footer+ads=========-->
<?php echo $this -> load -> view('slice/footer'); ?>
<!--=========end footer+ads=========-->
</body>
<!--=============================================================================
               body close
============================================================================= -->
</html>

