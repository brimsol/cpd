
<?php if(isset($stores) && count($stores)){
foreach ($stores as $store){?>
<div class="modal-header">
<a class="close" data-dismiss="modal">&times;</a>
<h3><?php echo $store -> name; ?></h3>
</div>
<div class="modal-body">
<table class="table table-bordered">
<tr>
<td>State</td>	
<td><strong><?php echo $store -> state; ?></strong></td>
</tr>
<tr>
<td>Address</td>	
<td><strong><?php echo $store -> address; ?></strong></td>
</tr>
<tr>
<td>Contact No</td>	
<td><strong><?php echo $store -> contact_no; ?></strong></td>
</tr>	
<tr>
<td>Latitude</td>	
<td><strong><?php echo $store -> latitude; ?></strong></td>
</tr>
<tr>
<td>Longitude</td>	
<td><strong><?php echo $store -> longitude; ?></strong></td>
</tr>
</table>
</div>
<div class="modal-footer">
<a class="btn" data-dismiss="modal">Close</a>
</div>

<?php } }else{echo "Oops! Some error occured";} ?>