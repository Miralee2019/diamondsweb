<option value=''>Select Categories</option>
<?php 
foreach($row as $sub_categories){
?>			
	<option value="<?php echo $sub_categories['subc_id']?>"><?php echo $sub_categories['subcategories_name']?></option>		
		<?php
		}
?>
