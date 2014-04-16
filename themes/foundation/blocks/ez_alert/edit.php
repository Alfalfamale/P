<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<div class="ccm-block-field-group">
	<p><?php   echo $form->label('alertType', t('Alert Type'));?>
		<select name="alertType" style="vertical-align: middle">
			<option value="alert-box"<?php   if ($alertType == 'alert-box') { ?> selected<?php   } ?>><?php  echo t('Standard (blue)')?></option>
			<option value="alert-box success"<?php   if ($alertType == 'alert-box success') { ?> selected<?php   } ?>><?php  echo t('Success (green)')?></option>
			<option value="alert-box alert"<?php   if ($alertType == 'alert-box alert') { ?> selected<?php   } ?>><?php  echo t('Alert (red)')?></option>
			<option value="alert-box secondary"<?php   if ($alertType == 'alert-box secondary') { ?> selected<?php   } ?>><?php  echo t('Secondary (grey)')?></option>
		</select>
	</p>
</div>
<div class="ccm-block-field-group">
<?php   echo $form->label('alertMessage', 'Alert Message');?>
<?php   echo $form->textarea('alertMessage', $alertMessage, array('style' => 'width: 300px'));?>
</div>