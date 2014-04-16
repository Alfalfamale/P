<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<div class="ccm-block-field-group">
<?php   echo $form->label('fullName', 'Name');?>
<?php   echo $form->text('fullName', $fullName, array('style' => 'width: 290px'));?>
</div>
<div class="ccm-block-field-group">
<?php   echo $form->label('jtitle', 'Title');?>
<?php   echo $form->text('jtitle', $jtitle, array('style' => 'width: 290px'));?>
</div>
<div class="ccm-block-field-group">
<?php   echo $form->label('orgName', 'Organization Name');?>
<?php   echo $form->text('orgName', $orgName, array('style' => 'width: 290px'));?>
</div>
<div class="ccm-block-field-group">
<?php   echo $form->label('phNumber', 'Phone Number (Ex: 123-456-7890)');?>
<?php   echo $form->text('phNumber', $phNumber, array('style' => 'width: 290px'));?>
</div>
<div class="ccm-block-field-group">
<?php   echo $form->label('website', 'Website (Ex: http://www.yoursite.com)');?>
<?php   echo $form->text('website', $website, array('style' => 'width: 290px'));?>
</div>