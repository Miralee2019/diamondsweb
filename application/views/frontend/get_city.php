<option value=''>Select Categories</option>
<?php 
foreach($city as $row){
?>			
	<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>		
		<?php
		}
?>
