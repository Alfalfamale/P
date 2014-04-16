<?php  $formPageSelector = Loader::helper('form/page_selector'); ?>
<?php     
defined('C5_EXECUTE') or die(_("Access Denied."));
$includeAssetLibrary = true;
$assetLibraryPassThru = array(
	'type' => 'image'
);
$al = Loader::helper('concrete/asset_library');
$bf = null;
	if ($controller->getFileID() > 0) { 
		$bf = $controller->getFileObject();
	}
?>

<div style="margin: 20px 0;">
<?php   echo $form->label('ezctaText', 'CTA Title:');?><br />
<?php   echo $form->text('ezctaText', $ezctaText, array('style' => 'width: 300px'));?>
</div>

<div style="margin: 20px 0;">
<?php   echo $form->label('ezctaDesc', 'Description:');?><br />
<?php   echo $form->textarea('ezctaDesc', $ezctaDesc, array('style' => 'width: 300px'));?>
</div>

<div style="margin: 20px 0;">
<?php   echo("<label>Select a page to link to:</label>");
echo $formPageSelector->selectPage('pageID',$pageID); ?>
</div>

<div style="margin: 20px 0;">
<?php   echo $form->label('ezctaLinkText', 'Link Text (ex: click here to learn more):');?><br />
<?php   echo $form->text('ezctaLinkText', $ezctaLinkText, array('style' => 'width: 300px'));?>
</div>

<div style="margin: 20px 0;">
<?php   echo("<br><label>Choose an Image:</label>");
echo $al->image('ccm-b-image', 'fID', t('Choose Image'), $bf);?>
</div>

<div style="margin: 20px 0;">
<?php   echo $form->label('altText', 'Image alt text:');?><br />
<?php   echo  $form->text('altText', $altText, array('style' => 'width: 250px')); ?>
</div>
