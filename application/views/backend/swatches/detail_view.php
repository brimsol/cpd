
<?php if(isset($products) && count($products->result())){
foreach ($products->result() as $product){?>
<div class="modal-header">
<a class="close" data-dismiss="modal">&times;</a>
<h3><?php echo $product -> pname; ?></h3>
</div>
<div class="modal-body">
<p><img src="<?php echo base_url();?>/uploads/<?php echo $product -> pimage; ?>" /></p>
<table class="table table-bordered">
<tr>
<td>Category</td>	
<td><strong><?php echo $product -> cname; ?></strong></td>
</tr>
<tr>
<td>Description</td>	
<td><strong><?php echo $product -> pdescription; ?></strong></td>
</tr>	
</table>
</div>
<div class="modal-footer">
<a class="btn" data-dismiss="modal">Close</a>
</div>

<?php } }else{echo "Oops! Some error occured";} ?>