<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); 
$theLink = Page::getCollectionPathFromID($pageID);
$theLink = DIR_REL . $theLink;
?>
<p><a href="<?php   echo $theLink ?>" class="<?php  echo $buttonStyle?> <?php  echo $buttonSize?> <?php  echo $buttonType?>">
<?php   echo $buttonText?></a></p>
