<?php 
/**
 * Template for a single pages.
 */
defined('C5_EXECUTE') or die(_("Access Denied."));

$this->inc('elements/header.php');
?>
<div class="row main">
	<h1 class="hidden"><?php  echo SITE .' - '. $title ?></h1>
	<div id="content" class="large-8 column eqH-L-2 eqH-M-1">
		<div class="inner">
			<?php  
			Loader::element('system_errors', array('error' => $errors));
			echo $innerContent; 
			?>
		</div>
	</div>
	<div id="sidebar" class="large-4 column eqH-L-2 eqH-M-1">
		<div class="inner">
			<?php 
			$a = new Area('Sidebar');
			$a->display($c);
			?>
		</div>
	</div>
</div>
<?php 
$this->inc('elements/footer.php');
?>