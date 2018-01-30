<?php
	foreach ($tt as $key) {
		?>
			<option value="<?php echo $key->MaPB ?>"><?php echo $key->TenPB ?> </option>
		<?php
	 } 
?>
<!-- <?php if($mapb==$key->MaPB)
			{
				echo "selected";
			} ?>><?php echo $key->TenPB ?> -->