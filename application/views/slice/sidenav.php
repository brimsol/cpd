
<div id="left_nav">
<div id="left_nav_inner">
<label class="left_nav_inner_li" id="mobbmenu_links_e"><a>Boy</a></label>

<div class="submenu_link" id="submenu_link_e">
	<?php if(isset($boys_list)&&count($boys_list)){
		foreach($boys_list as $bl){?>
			<label class="sub_links"><a href="<?php echo site_url('collection/view/'.$bl -> id);?>"><?php echo $bl -> name; ?></a></label>
	<?php	}
		
	}else{echo "No collections Found";}?>
	
</div>


<label class="left_nav_inner_li" id="mobbmenu_links_f"><a>Girl</a></label>

<div class="submenu_link" id="submenu_link_f">
<?php if(isset($girls_list)&&count($girls_list)){
		foreach($girls_list as $gl){?>
			<label class="sub_links"><a href="<?php echo site_url('collection/view/'.$gl -> id);?>"><?php echo $gl -> name; ?></a></label>
	<?php	}
		
	}else{echo "No collections Found";}?>
</div>


<label class="left_nav_inner_li" id="mobbmenu_links_g"><a>Neutral</a></label>

<div class="submenu_link" id="submenu_link_g">
<?php if(isset($neutral_list)&&count($neutral_list)){
		foreach($neutral_list as $nl){?>
			<label class="sub_links"><a href="<?php echo site_url('collection/view/'.$nl -> id);?>"><?php echo $nl -> name; ?></a></label>
	<?php	}
		
	}else{echo "No collections Found";}?>
</div>

</div>
<label class="viewall" id="viewall_b"><a>View All Collections</a></label>
<div class="submenu_link" id="submenu_link_d">
<?php if(isset($list_all)&&count($list_all)){
		foreach($list_all as $la){?>
			<label class="sub_links"><a href="<?php echo  site_url('collection/view/'.$la -> id);?>"><?php echo $la -> name; ?></a></label>
	<?php	}
		
	}else{echo "No collections Found";}?>
</div>
</div>

<div id="mob_left_nav">
<div id="mob_left_nav_inner">
<label class="mobhead" id="mob_collection_item">Collections</label>

<div id="mobbmenu">
<label class="mobbmenu_links" id="mobbmenu_links_a"><a>Boy</a></label>

<div class="submenu_link" id="submenu_link_a">
	<?php if(isset($boys_list)&&count($boys_list)){
		foreach($boys_list as $bl){?>
			<label class="sub_links"><a href="<?php echo site_url('collection/view/'.$bl -> id);?>"><?php echo $bl -> name; ?></a></label>
	<?php	}
		
	}else{echo "No collections Found";}?>
</div>


<label class="mobbmenu_links" id="mobbmenu_links_b"><a >Girl</a></label>
<div class="submenu_link" id="submenu_link_b">
<?php if(isset($girls_list)&&count($girls_list)){
		foreach($girls_list as $gl){?>
			<label class="sub_links"><a href="<?php echo site_url('collection/view/'.$gl -> id);?>"><?php echo $gl -> name; ?></a></label>
	<?php	}
		
	}else{echo "No collections Found";}?>
</div>



<label class="mobbmenu_links" id="mobbmenu_links_c"><a >Neutral</a></label>
<div class="submenu_link" id="submenu_link_c">
<?php if(isset($neutral_list)&&count($neutral_list)){
		foreach($neutral_list as $nl){?>
			<label class="sub_links"><a href="<?php echo site_url('collection/view/'.$nl -> id);?>"><?php echo $nl -> name; ?></a></label>
	<?php	}
		
	}else{echo "No collections Found";}?>
</div>

<label class="mobbmenu_links_a" id="viewall"><a >View All Collections</a></label>
<div class="submenu_link" id="submenu_link_i">
<?php if(isset($list_all)&&count($list_all)){
		foreach($list_all as $la){?>
			<label class="sub_links"><a href="<?php echo  site_url('collection/view/'.$la -> id);?>"><?php echo $la -> name; ?></a></label>
	<?php	}
		
	}else{echo "No collections Found";}?>
</div>
</div>
</div>
</div>