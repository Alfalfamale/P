<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
?>
			<div id="footer" class="row footer">
				<div class="large-4 column">
					<?php 
					$a = new GlobalArea('Footer Nav');
					if (($a->getTotalBlocksInArea($c) > 0) || ($c->isEditMode())) {
						$a->display();
					} else {
						// A default navigation block if there is no block in the area.
						echo "<h2>" . t('quicknav') . "</h2>";
						$bt_nav = BlockType::getByHandle('autonav');
						$bt_nav->controller->displayPages = 'top';
						$bt_nav->controller->orderBy = 'display_asc';
						$bt_nav->controller->displaySubPages = 'none';
						$bt_nav->render('view');
					}
					?>
				</div>
				<div class="large-4 column">
					<?php 
					$a = new GlobalArea('Footer Contact');
					if (($a->getTotalBlocksInArea($c) > 0) || ($c->isEditMode())) {
						$a->display();
					} else {
						// Empty placeholder.
						echo "<h2>" . t('Contact') . "</h2>";
					}
					?>
				</div>
				<div class="large-4 column">
					<?php 
					$a = new GlobalArea('Footer Social');
					if (($a->getTotalBlocksInArea($c) > 0) || ($c->isEditMode())) {
						$a->display();
					} else { 
						// Change the url's to your own social profiles. ?>
						<h2><?php  echo t('Social Media') ?></h2>
						<a href="http://twitter.com/" title="http://twitter.com/" class="social twitter">&nbsp;</a> 
						<a href="http://facebook.com/" title="http://facebook.com/" class="social facebook">&nbsp;</a>
					<?php  } ?>
				</div>
			</div>
			<div class="row footer credits text-center ">
				<?php  echo t('&copy;').' '.date('Y') ?> <a href="http://www.dewebmakers.nl" title="<?php  echo t('Free responsive theme by De Webmakers') ?>">De Webmakers</a> | 
				<?php  echo t('built with') ?> <a href="http://www.concrete5.org/r/-/1439" title="<?php  echo t('concrete5 content management system') ?>">Concrete5 CMS</a>
			</div>
			<div class="row footer go-up text-center show-phone">
				<a href="#top" title="<?php  echo t('Click to go back to the top of the page.') ?>" class="tiny button secondary"><?php  echo t('Back to top') ?></a>
			</div>
		</div>
		<script src="<?php  echo $this->getThemePath()?>/js/foundation.min.js" type="text/javascript"></script>
		<script src="<?php  echo $this->getThemePath()?>/js/equalheights.js" type="text/javascript"></script>
		<?php  Loader::element('footer_required') ?>
	</body>
</html>