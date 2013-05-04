<ul class="nav nav-collapse nav-list collapse">
	<li class="nav-header hidden-desktop">
			Search
		</li>
	
		<form action="<?php echo site_url('backend/search/index');?>" method="post" class="hidden-desktop">
								<select class="input-medium" id="top_select" name="cat">
									<option <?php if(isset($cat) && $cat =='collection'){echo 'selected="TRUE"';}?> value="collection">Collection</option>
									<option <?php if(isset($cat) && $cat =='products'){echo 'selected="TRUE"';}?> value="products">Product</option>
									<option <?php if(isset($cat) && $cat =='swatches'){echo 'selected="TRUE"';}?> value="swatches">Swatches</option>
									<option <?php if(isset($cat) && $cat =='stores'){echo 'selected="TRUE"';}?> value="stores">Store</option>
									<option <?php if(isset($cat) && $cat =='onlinestores'){echo 'selected="TRUE"';}?> value="onlinestores">Online Store</option>
								</select>
								<div class="input-append" id="top_text">
									<input class="span2" name="key" placeholder="Search Term" value="<?php if(isset($key)){echo $key;}?>" id="appendedInputButton" type="text">
									<button class="btn" type="submit">
										Go!
									</button>
								</div>
							</form>
		<li class="nav-header">
			Collections
		</li>
		<li>
			<a href="<?php echo site_url('admin/collection/add');?>"><!--<i class="icon-book"></i>-->Add New</a>
		</li>
		<li>
			<a href="<?php echo site_url('admin/collections/');?>">Update</a>
		</li>
		<li class="nav-header">
			Products
		</li>
		<li>
			<a href="<?php echo site_url('admin/product/add');?>">Add New</a>
		</li>
		<li>
			<a href="<?php echo site_url('admin/products/');?>">Update</a>
		</li>
		<li class="nav-header">
			Swatches
		</li>
		<li>
			<a href="<?php echo site_url('admin/swatche/add');?>">Add New</a>
		</li>
		<li>
			<a href="<?php echo site_url('admin/swatche/');?>">Update</a>
		</li>
		<li class="nav-header">
			Stores
		</li>
		<li>
			<a href="<?php echo site_url('admin/store/add');?>">Add New</a>
		</li>
		<li>
			<a href="<?php echo site_url('admin/stores/');?>">Update</a>
		</li>
		<li class="nav-header">
			Online Stores
		</li>
		<li>
			<a href="<?php echo site_url('admin/onlinestore/add');?>">Add New</a>
		</li>
		<li>
			<a href="<?php echo site_url('admin/onlinestores/');?>">Update</a>
		</li>
		<li class="nav-header">
			Slider
		</li>
		<!--<li>
			<a href="<?php echo site_url('admin/slider/add');?>">Add New</a>
		</li>-->
		<li>
			<a href="<?php echo site_url('admin/slider/');?>">Update</a>
		</li>
		<li class="nav-header">
			Pages
		</li>
		<!--<li>
			<a href="<?php echo site_url('admin/page/add');?>">Add New</a>
		</li>-->
		<li>
			<a href="<?php echo site_url('admin/pages/');?>">Update</a>
		</li>
</ul>
