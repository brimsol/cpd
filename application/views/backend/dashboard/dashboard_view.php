<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Glene Jean | Dashboard</title>
		<?php echo $this -> load -> view('backend/slice/header'); ?>
	</head>

	<body>
		<!--nav bar--->
		<?php echo $this -> load -> view('backend/slice/top_nav'); ?>
		<!--end nav bar--->
		<div class="container">
			<div class="row-fluid">
				<div class="span3 well">
					<?php echo $this -> load -> view('backend/slice/side_nav'); ?>
				</div>
				<div class="span9">
					<?php echo $this -> ci_alerts -> display('success'); ?>
					<div class="well well-small bg-blue-light">
					Welcome !!!
					</div>
                    
				</div><!--/span8-->
			</div><!--/row-fuid-->

			<!--footer-->
			<?php echo $this -> load -> view('backend/slice/footer'); ?>
			<!--footer end-->
	</body>
</html>
