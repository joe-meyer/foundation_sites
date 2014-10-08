<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<div class="form-group">
	<?php
    echo $form->label('selectFileSet', 'Select file set');
	echo $form->select("selectFileSet", $filesets, $selectFileSet);
	?>
</div>
