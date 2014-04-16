<?php 
/**
 * Template for a default page.
 */
defined('C5_EXECUTE') or die(_("Access Denied."));

$mt = $c->getAttribute('meta_title');
$title = !empty($mt) ? $mt : $c->getCollectionName();

$this->inc('elements/header.php');
?>
			<div class="row main">
				<h1 class="hidden"><?php  echo SITE .' - '. $title ?></h1>
				<div id="content" class="large-12 column">
					<?php 
					$a = new Area('Main');
					$a->display($c);
					?>
				</div>
			</div>
<?php 
$this->inc('elements/footer.php');
?>