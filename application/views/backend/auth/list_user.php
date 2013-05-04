<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Brimsol-Tunager</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/brimsol-custom.css" rel="stylesheet">

		<link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
	</head>

	<body>
		<!--nav bar--->
		<?php echo $this -> load -> view('slice/top_nav'); ?>
		<!--end nav bar--->
		<div class="container">
			<div class="row">
				<div class="span4">
					<!--side nav--->
					<?php echo $this -> load -> view('slice/side_nav'); ?>
					<!--end side nav--->

				</div><!--end span4 -->
				<div class="span8">
					<h3 class="header">Get all users</h3><?php echo $this->ci_alerts->display('success');?>
					<hr />
	 <div class="form-horizontal">
                 
                    	<?php if($query->num_rows() > 0){?>
                		
                        
							
<table class="table table-bordered" id="myTable">
                            <thead>
                               	
                                <th>Username</th>
                                <th>Action</th>
                                
                                </tr>
                            </thead>
                             <tbody>
                             	<?php foreach ($query->result() as $value): ?>	
                              <tr>
                              	 <td><?php echo $value -> username; ?></td>
                                <td><a href="<?php echo site_url(); ?>/admin/del_user/<?php echo $value -> u_id; ?>">Delete</a></td>
                                </tr>
                              <?php endforeach; ?>
                              </tbody></table>
<a href="<?php echo site_url(''); ?>"> <input class="btn" style="margin-left:380px;" type="button" value="Back"" /></a> 

								
								<?php }else{ ?>
									<div class="alert alert-error fade in"><a class="close" href="#" data-dismiss="alert">&times;</a>No user found
									<a href="#"> <input class="btn" id="back"  type="button" value="Back"" /></a> </div>
								<?php } ?>
</fieldset>



</div>
             
                </div>
				</div><!--/span8-->
			</div><!--/row-fuid-->

			<hr>

			<footer>
				<p>
					&copy; Brimsol 2012
				</p>
			</footer>

		</div><!--/.fluid-container-->

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/autotab.js"></script>
		
	</body>
</html>
