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

<div id="contentarea">
<div class="wtp_left">
<h1>Search</h1>
<!--<h3>Locate a store near you!</h3>
<p class="paraghraph">Senectus et netus et malesuada fames ac turpis egestas. 
Cras tincidunt diam molestie augue sagittis eget.</p>-->

<div class="border"></div>
<form action="<?php echo site_url('search');?>" id="search_result" method="post">
<input type="text" id="key_result" placeholder="Search" name="key" value="<?php if(isset($keyword)){echo $keyword;}?>">
<a id="go_result" class="go">Go</a>
</form>
<div class="border"></div>


<?php if(isset($collection_result)&&count($collection_result)){ ?>
	<h3>Collection</h3>
	<div class="border"></div>
		<?php foreach($collection_result as $collection){ ?>
		
		<div class="collection_item">
		<div class="collection_item_image"><a href="<?php echo  site_url('collection/view/'.$collection -> id);?>" ><img src="<?php echo base_url(); ?>/uploads/<?php echo $collection -> image; ?>" height="140" width="146"></a></div>
		<h2><a href="<?php echo  site_url('collection/view/'.$collection -> id);?>"><?php echo $collection -> name; ?></a></h2>
		</div>
		
	<?php } } ?>
	<div class="clear"></div>	
	<?php if(isset($products_result)&&count($products_result)){ ?>
	<h3>Products</h3>
	<div class="border"></div>
		<?php foreach($products_result as $product){ ?>
		
		<div class="collection_item">
		<div class="collection_item_image"><a href="<?php echo  site_url('collection/view/'.$product -> category);?>" ><img src="<?php echo base_url(); ?>/uploads/<?php echo $product -> image; ?>" height="140" width="146"></a></div>
		<h2><a href="<?php echo  site_url('collection/view/'.$product -> category);?>"><?php echo $product -> name; ?></a></h2>
		</div>
		
	<?php } } ?>
<?php if(isset($collection_result)&&count($collection_result)<=0 && isset($products_result)&&count($products_result)<=0){
		echo "No result found";
	}?>
</div>



<div class="wtp_right">
  <img src="<?php echo base_url(); ?>/assets/images/advmnt.png" alt="ads"> </div>

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

