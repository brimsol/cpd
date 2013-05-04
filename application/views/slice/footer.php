<div id="ads">
<div id="ads_in">
<div class="ads_in"><img src="<?php echo base_url();?>/assets/images/adv_image_01.png"  alt="ad_one"></div>
<div class="divd"></div>
<div class="ads_in"><img src="<?php echo base_url();?>/assets/images/adv_image_02.png"  alt="ad_two"></div>
<div class="divd_center"></div>
<div class="ads_in"><img src="<?php echo base_url();?>/assets/images/ad3.png" alt="ad_three"></div>
<div class="divd"></div>
<div class="ads_in"><img src="<?php echo base_url();?>/assets/images/ad4.png"  alt="ad4"></div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<!--=========ads close=========-->
</div>
<!--=========inner close=========-->

<!--=========footer start=========-->
<div id="footer">
<div id="footer_inner">
<div id="footer_nav">

<ul>
<li><a href="<?php echo site_url();?>" class="nopadding">Home</a>|</li>
<li><a href="<?php echo site_url('about');?>">About Us</a>|</li>
<li><a href="<?php echo site_url('collection');?>">Collections</a>|</li>
<li><a href="<?php echo site_url('contact');?>">Contact Us</a>|</li>
<li><a href="<?php echo site_url('store');?>">Store Locator</a>|</li>
<li><a href="<?php echo site_url();?>">FAQ's</a>|</li>
<?php if($this -> session -> userdata('username')!=''){?>
<li><a href="<?php echo site_url('dashboard')?>">Dashboard</a>|</li> 
<li><a href="<?php echo site_url('admin/logout')?>">Logout</a></li> 
<?php }else{?>
<li><a href="<?php echo site_url('admin');?>">Admin</a></li>
<?php }?>
</ul>
<label class="copyright">All rights reserved by  GlennaJean.com</label>
</div>
<div id="socialmedia">
<label class="abc" class="facebook"><a href="#" ><img src="<?php echo base_url();?>/assets/images/facebook_link.png" width="24" height="24" alt="facebook"></a></label>
<label class="abc" class="twitter"><a href="#" ><img src="<?php echo base_url();?>/assets/images/twitter.png" width="24" height="24" alt="twitter"></a></label>
<label class="abc" class="blog"><a href="#" ><img src="<?php echo base_url();?>/assets/images/blog.png" width="24" height="24" alt="blog"></a></label>
<label class="abc" class="penterest"><a href="#" ><img src="<?php echo base_url();?>/assets/images/pinterest.png" width="24" height="24" alt="penterest"></a></label>
</div>
<div class="clear"></div>
</div>
</div>
<!--=========footer close=========-->



<!--=========mobile footer start=========-->
<div id="mobile_footer">

<div id="mobile_socialmedia">
<label class="abc" class="facebook"><a href="#" ><img src="<?php echo base_url();?>/assets/images/facebook_link.png" width="24" height="24" alt="facebook"></a></label>
<label class="abc" class="twitter"><a href="#" ><img src="<?php echo base_url();?>/assets/images/twitter.png" width="24" height="24" alt="twitter"></a></label>
<label class="abc" class="blog"><a href="#" ><img src="<?php echo base_url();?>/assets/images/blog.png" width="24" height="24" alt="blog"></a></label>
<label class="abc" class="penterest"><a href="#" ><img src="<?php echo base_url();?>/assets/images/pinterest.png" width="24" height="24" alt="penterest"></a></label>
</div>
<label class="mobile_copyright">All rights reserved by  GlennaJean.com</label>


<div class="clear"></div>

</div>
<!--=========mobile footer close=========-->