<div id="mob_nav">
<div id="mob_nav_toggle">
<div id="mob_nav_toggle_link">
  <label><a href="#" id="mob_nav_menu"><img src="<?php echo base_url();?>/assets/images/mb-menu.png"  alt="menu"></a></label>
  <label style="float:left;"><a href="<?php echo site_url();?>" id="mob_nav_home"><img src="<?php echo base_url();?>/assets/images/mb-home.png" alt="home"></a></label>
 </div>
<div id="mob_nav_inner">
<ul>
<li><a href="<?php echo site_url();?>">Home</a></li>
<li><a href="<?php echo site_url('about');?>">About Us</a></li>
<li><a href="<?php echo site_url('collection');?>">Collections</a></li>
<li><a href="<?php echo site_url('store');?>">Store Locator</a></li>
<li><a href="<?php echo site_url('contact');?>">FAQ & Contact Us</a></li>
<!--<li><a href="<?php echo site_url('faq');?>">FAQ</a></li>-->
<form action="<?php echo site_url('search');?>" id="mob_search" method="post">
<li class="white"><input id="mob_key" type="text" class="mob_key" placeholder="Search" name="key"></li>
<li class="mob_nav_right"><a href="#" id="mob_go" class="mob_go">Go</a></li>
</form>
</ul>
<div class="clear"></div>
</div>
</div>
</div>
<!--=========mob nav close=========-->


<!--=========nav start=========-->
<div id="nav">
<div id="nav_inner">
<ul>
<li><a href="<?php echo site_url();?>">Home</a></li>
<li><a href="<?php echo site_url('about');?>">About Us</a></li>
<li><a href="<?php echo site_url('collection');?>">Collections</a></li>
<li><a href="<?php echo site_url('store');?>">Store Locator</a></li>
<li><a href="<?php echo site_url('contact');?>" class="border_rightnone" >FAQ & Contact Us</a></li>
<!--<li><a href="<?php echo site_url('faq');?>" class="border_rightnone" >FAQ</a></li>-->
<form action="<?php echo site_url('search');?>" id="search" method="post">
<li><input type="text" id="key" class="search" placeholder="Search" name="key"></li>
<li class="nav_right" id="go" ><a href="#" id="go" class="go">Go</a></li>
</form>
</ul>
<div class="clear"></div>
</div>
</div>
<!--=========nav close=========-->