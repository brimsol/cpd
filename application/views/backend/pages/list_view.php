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
				<!--<div class="span4">
				<?php //echo $this -> load -> view('backend/slice/side_nav'); ?>
				</div>-->
				<div class="span12">

					<div class="span3 well">

						<?php echo $this -> load -> view('backend/slice/side_nav'); ?>
					</div>
					<div class="span8">
						<?php echo $this -> ci_alerts -> display('success'); ?>
						<legend>Pages</legend>
						<table class="table table-hover table-striped table-bordered" id="members_result_table">
						<thead>
						<tr>
							<th>#</th>
							<!--<th>Image</th>-->
							<th>Title</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<?php if(isset($pages) && count($pages->result())){
							$c=$this->uri->segment(3, 0)+1; 
						foreach ($pages->result() as $page){?>
						<tr>
							<td><?php echo $c; ?></td>
							<!--<td><a href="#"><img src="http://placehold.it/64x64" alt="<?php echo $collection -> name; ?>"></a></td>-->
							<td><?php echo $page -> title; ?></td>
							<td><?php echo $page -> created_at; ?></td>
							<td>
							<a rel="tooltip" data-original-title="View Details" class="btn btn-mini" href="<?php if($page -> id==2){echo site_url('about');}else{echo site_url('contact');} ?>" ><i class="icon-eye-open"></i></a>
							<a rel="tooltip" data-original-title="Edit profile" class="btn btn-mini" href="<?php echo site_url('admin/page/edit'); ?>/<?php echo $page -> id; ?>" ><i class="icon-edit"></i></a>
							<!--<?php echo anchor('admin/page/delete/'.$page->id,'<i class="icon-trash icon-white"></i>',
							array('onclick'=>"return confirm('You are about to delete ".$page-> title.",\\n\\n   Do you want to continue ?')",'data-original-title'=>"Remove",'rel'=>"tooltip",'class'=>"btn btn-mini btn-danger"))?>-->
						
							</td>
						</tr>
				
                
							<?php $c++; ?>
							<?php } }else{echo "No Pages found";} ?>
					</tbody>
			</table>
						<div class="pagination pull-right margin-0 unprint">
						<?php //echo $links; ?>
						
						</div>

					</div>

				</div><!--/span12-->
			</div><!--/row-fuid-->

			<!--footer-->
			<?php echo $this -> load -> view('backend/slice/footer'); ?>
			<!--footer end-->
	</body>
</html>
