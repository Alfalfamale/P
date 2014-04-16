<?php    defined('C5_EXECUTE') or die(_("Access Denied.")); 
$pkg = Package::getByHandle('foundation'); ?>
<?php    $this->inc('elements/header.php'); ?>

	<div class="row">
		<div class="twelve columns">
			<div class="foundation-header panel">
			<?php  Loader::model('attribute/categories/collection');
			$fdnptitles = Config::get('fdnptitles');
			if($fdnptitles==0){ echo t('<h1>'); echo $c->getCollectionName(); echo t('</h1>'); } ?>
			<?php  Loader::model('attribute/categories/collection');
			$fdnpdesc = Config::get('fdnpdesc');
			if($fdnpdesc==0){ echo t('<h4>'); echo $c->getCollectionDescription(); echo t('</h4>'); } ?>
			<?php  Loader::model('attribute/categories/collection');
			$fdnbcrumbs = Config::get('fdnbcrumbs');
			if($fdnbcrumbs==0){ echo t('<div class="breadcrumbs">'); 
				$bt = BlockType::getByHandle('autonav');
				$bt->controller->displayPages = 'top';
				$bt->controller->orderBy = 'display_asc';                    
				$bt->controller->displaySubPages = 'relevant_breadcrumb';
				$bt->controller->displaySubPageLevels = 'all';                   
				$bt->render('templates/breadcrumb');
				echo t('</div>');
			} ?>
			</div>
		</div>
	</div>
<!-- END HEADER -->

<div class="row">
	<div class="four columns">
		<div class="nav panel hide-on-phones">
			<?php  
			$bt = BlockType::getByHandle('autonav');
			$bt->controller->displayPages = 'top';
			$bt->controller->orderBy = 'display_asc';                    
			$bt->controller->displaySubPages = 'none'; 
			$bt->controller->displaySubPageLevels = 'custom';
			$bt->controller->displaySubPageLevelsNum = '1';                   
			$bt->render('templates/main_menu');
			?>
		</div><!-- nav ends -->
		<?php   $a = new Area('Sidebar'); $a->display($c); ?>
	</div>
	<div class="eight columns">
		<?php   $a = new Area('Main'); $a->display($c); ?>
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<?php   $a = new Area('Additional Content'); $a->display($c); ?>
	</div>
</div>
<?php    $this->inc('elements/footer.php'); ?>