<noscript>
	<meta http-equiv="Refresh" content="0; url=<?php echo site_url(); ?>welcome/java_script_disabled">
</noscript>
<div class="container_progress" id="overlay">
    <div class="progress progress-striped active">
        <div class="bar" style="width: 100%;"></div>
    </div>
</div>
<div class="navbar">
	<div class="navbar-inner">
		<div class="container-fluid">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-list">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="brand" href="<?php echo site_url(); ?>">Glenna Jean</a>
			<div class="nav-collapse">
<?php if($this -> session -> userdata('username') != '' ){ ?>
				<ul class="nav">
					
					<li class="divider-vertical">
						<a href="<?php echo site_url('dashboard'); ?>">Dashboard</a>
					</li>
					
				</ul>
				<div class="pull-right"	>
					<ul class="nav">
						<li class="divider-vertical">
							<form action="<?php echo site_url('backend/search/index');?>" method="post">
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
						</li>
<?php } ?>
					</ul>
					<ul class="nav">
						<li id="fat-menu" class="dropdown">
							<?php $username = $this -> session -> userdata('username'); ?>
							<?php if($username!=''){
							?>
							<a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">Howdy! <?php echo $username; ?>
							<b class="caret"></b></a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
								<!-- <li>
								<a tabindex="-1" href="<?php echo site_url('admin/add_user'); ?>">Add User</a>
								</li>
								<li>
								<a tabindex="-1" href="<?php echo site_url('admin/list_user'); ?>">Delete User</a>
								</li>
								<!-- <li><a tabindex="-1" href="#">Home</a></li>

								<li><a tabindex="-1" href="#">Change Password</a></li>
								<li class="divider"></li> -->
								<li>
								<a  href="<?php echo site_url('admin/change_password'); ?>">Change Password</a>
								</li>
								<li>
									<a href="<?php echo site_url(); ?>"  role="button" class="dropdown-toggle">Visit Site</a>
								</li>
								<li>
									<a tabindex="-1" href="<?php echo site_url('admin/logout'); ?>">Logout</a>
								</li>
							</ul>
							<?php } else { ?>
							<a href="<?php echo site_url(); ?>"  role="button" class="dropdown-toggle">Visit Site</a>
							<?php } ?>
				</div>

			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>
