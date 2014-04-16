<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); 
$theLink = Page::getCollectionPathFromID($pageID);
$theLink = DIR_REL . $theLink;
?> 
<div class="panel ezcta-wrap">    
	<a href="<?php   echo $theLink ?>" class="ezcta"><span class="ezctaTitle"><?php   echo $ezctaText?></span></a>
        <div class="ezctaImg">
            <?php   echo($controller->getContentAndGenerate()); ?>
        </div>
		<p><?php   echo $ezctaDesc?></p>
	<a href="<?php   echo $theLink ?>" class="small button"><?php   echo $ezctaLinkText?></a>
</div>