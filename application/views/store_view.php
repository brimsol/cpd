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
Home  >  <span class="color_change_b">Store Locator</span>
</div>
<!--=========breadcrumb start=========-->

<div id="contentarea">
<div class="wtp_left">
<h1>Where to Purchase</h1>
<h3>Locate a store near you!</h3>

<div class="border"></div>

<label class="list"><label class="listab">Browse by State </label><select name="browse by state" class="list_menu" id="state">
	<option value="">Select</option>
<?php if(isset($states)&&count($states)){?>
												<?php foreach($states as $state){?>
												<option value="<?php echo $state -> id; ?>"><?php echo $state -> name; ?></option>
												<?php } ?>
											<?php } ?>
</select>
<div class="clear"></div>
</label>

<label class="list" > <label class="listab">Online stores </label><select name="browse by state" class="list_menu" id="onlinestate">
		<option value="">Select</option>
<?php if(isset($onlinestores)&&count($onlinestores)){?>
												<?php foreach($onlinestores as $onlinestore){?>
												<option value="<?php echo $onlinestore -> id; ?>"><?php echo $onlinestore -> name; ?></option>
												<?php } ?>
											<?php } ?>
</select>
<div class="clear"></div>
</label>


<!--<label class="gotostore"><a href=""><img src="<?php echo base_url(); ?>/assets/images/gotostore.png"  alt="gotostore" class="gotostore_image"></a></label>-->
<div class="clear"></div>
<div class="clear"></div>
<div class="clear"></div>
<div id="preloader2"><img src="<?php echo base_url(); ?>/assets/images/loader.gif"/></div>	
<div class="clear"></div>
<div class="clear"></div>
<div class="border"></div>

<div id="content_state_result">

</div>



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

