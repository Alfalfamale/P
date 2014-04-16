<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<?php  $formPageSelector = Loader::helper('form/page_selector'); ?>
<div class="ccm-block-field-group">
	<p><?php   echo $form->label('buttonSize', t('Button Size'));?>
		<select name="buttonSize" style="vertical-align: middle">
			<option value="tiny"<?php   if ($buttonSize == 'tiny') { ?> selected<?php   } ?>><?php  echo t('Tiny')?></option>
			<option value="small"<?php   if ($buttonSize == 'small') { ?> selected<?php   } ?>><?php  echo t('Small')?></option>
			<option value="medium"<?php   if ($buttonSize == 'medium') { ?> selected<?php   } ?>><?php  echo t('Medium')?></option>
			<option value="large"<?php   if ($buttonSize == 'large') { ?> selected<?php   } ?>><?php  echo t('Large')?></option>
		</select>
	</p>
	<p><?php   echo $form->label('buttonType', t('Button Type'));?>
		<select name="buttonType" style="vertical-align: middle">
			<option value="button"<?php   if ($buttonType == 'button') { ?> selected<?php   } ?>><?php  echo t('Standard (blue)')?></option>
			<option value="success button"<?php   if ($buttonType == 'success button') { ?> selected<?php   } ?>><?php  echo t('Success (green)')?></option>
			<option value="alert button"<?php   if ($buttonType == 'alert button') { ?> selected<?php   } ?>><?php  echo t('Alert (red)')?></option>
			<option value="secondary button"<?php   if ($buttonType == 'secondary button') { ?> selected<?php   } ?>><?php  echo t('Secondary (grey)')?></option>
		</select>
	</p>
	<p><?php   echo $form->label('buttonStyle', t('Button Style'));?>
		<select name="buttonStyle" style="vertical-align: middle">
			<option value="radius"<?php   if ($buttonStyle == 'radius') { ?> selected<?php   } ?>><?php  echo t('Rounded Corners')?></option>
			<option value="round"<?php   if ($buttonStyle == 'round') { ?> selected<?php   } ?>><?php  echo t('Pill')?></option>
			<option value="sq"<?php   if ($buttonStyle == 'sq') { ?> selected<?php   } ?>><?php  echo t('Squared')?></option>
		</select>
	</p>
</div>
<div class="ccm-block-field-group">
<?php   echo $form->label('buttonText', 'Button Text:');?>
<?php   echo $form->text('buttonText', $buttonText, array('style' => 'width: 220px'));?>
</div>
<div class="ccm-block-field-group">
<?php   echo("<label>Select a page to link to:</label>");
echo $formPageSelector->selectPage('pageID',$pageID); ?>
</div>