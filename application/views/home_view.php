<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Glenna Jean | Rest well little one..rest well </title>
<?php echo $this -> load -> view('slice/header'); ?>
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

<!--=========mob + desktop nav start=========-->
<?php echo $this -> load -> view('slice/nav'); ?>
<!--=========end mob + desktop nav start=========-->
<div class="freediv"></div>

<!--=========banner start=========-->
<div id="banner">

<!--=========slider start=========-->
<section class="slider">
        <div class="flexslider">
          <ul class="slides">
          	<?php if(isset($slider) && count($slider)){
          		
			foreach($slider as $slide){?>
				
				<li>
  	    	    <a href="<?php echo $slide->url;?>"><img src="<?php echo base_url();?>/uploads/<?php echo $slide->image;?>" /></a>
  	    		</li>
			<?php }	

          	}?>
          	
          </ul>
        </div>
      </section>
<!--=========slider close=========-->
<!-- FlexSlider -->
  <script defer src="<?php echo base_url();?>/assets/js/jquery.slider.js"></script>
  
  <script type="text/javascript">
    $(function(){
      //SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>



</div>
<!--=========banner close=========-->
<!--=========our collection start=========-->
<div id="our_collection">
<h1>Our Collections</h1>
<div id="our_collection_slider">

<ul class="bxslider">
	
	<?php if(isset($collections) && count($collections)){
          		
			foreach($collections as $collection){?>
				
				<li>
  	    	    <a href="<?php echo  site_url('collection/view/'.$collection -> id);?>"><img src="<?php echo base_url(); ?>uploads/timthumb.php?src=<?php echo base_url();?>/uploads/<?php echo $collection->image;?>&h=146&w=140&q=100" /></a>
  	    	    <h3><a href="<?php echo  site_url('collection/view/'.$collection -> id);?>"><?php echo $collection->name;?></h3></a>
  	    		</li>
			<?php }	

          	}?>
  
</ul>

<div class="clear"></div>


</div>

<script type="text/javascript">

	if($(window).width () < 480)
	{
		$('.bxslider').bxSlider({
		  minSlides: 1,
		  maxSlides: 1,
		  slideWidth: 360,
		  slideMargin: 10
		});
	}


	else if($(window).width () > 480 && $(window).width () < 800)
	{
		$('.bxslider').bxSlider({
		  minSlides: 3,
		  maxSlides: 3,
		  slideWidth: 360,
		  slideMargin: 10
		});
	}


	else
	{
			$('.bxslider').bxSlider({
		  minSlides: 6,
		  maxSlides: 6,
		  slideWidth: 360,
		  slideMargin: 10
		});
	}
 
</script>


</div>
<!--=========our collection close=========-->


</div>
<!--=========wrapper close=========-->

<!--=========shadow start=========-->
<div class="shadow"><img src="<?php echo base_url();?>/assets/images/shadow.png" alt="shadow"></div>
<!--=========shadow close=========-->

<!--=========footer+ads=========-->
<?php echo $this -> load -> view('slice/footer'); ?>
<!--=========end footer+ads=========-->
</body>
<!--=============================================================================
               body close
============================================================================= -->
</html>
