
<?php if(isset($dishes) && count($dishes->result())){
foreach ($dishes->result() as $dishes){?>
<div class="modal-header">
<a class="close" data-dismiss="modal">&times;</a>
<h3><?php echo $dishes -> name; ?></h3>
</div>
<div class="modal-body">
<p><img src="<?php echo base_url();?>/uploads/<?php echo $dishes -> image; ?>" /></p>
<table class="table table-bordered">
<tr>
<td>Description</td>	
<td><strong><?php echo $dishes -> description; ?></strong></td>
</tr>	
</table>

</div>
<div class="modal-footer">
<a class="btn" data-dismiss="modal">Close</a>
</div>

<?php } }else{echo "Oops! Some error occured";} ?>