<fieldset class="<?php echo $layout; ?>">
	<?php for($i=1; $i<=8; $i++): ?>
	    <div class="section">
    	<?php 
    	exhibit_builder_layout_form_item($i);
    	exhibit_builder_layout_form_text($i);
    	?>
    	</div>
	<?php endfor; ?>
</fieldset>