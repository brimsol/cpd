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
Home  >  <span class="color_change_b">About us</span>
</div>
<!--=========breadcrumb start=========-->

<div id="contentarea">
<div class="wtp_left">
<?php if(isset($page)&&count($page)){ ?>
			
<h1>About Us <?php if($this -> session -> userdata('username')!=''){?><a href="<?php echo site_url('admin/page/edit')?>/<?php echo $page  -> id; ?>"><img src="<?php echo base_url(); ?>/assets/images/edit.png" alt="Edit"></a> <?php }?></h1>
<!--<h3>Locate a store near you!</h3>
<p class="paraghraph">Senectus et netus et malesuada fames ac turpis egestas. 
Cras tincidunt diam molestie augue sagittis eget.</p>-->


<?php echo $page -> body; ?>

	<?php } ?>
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

