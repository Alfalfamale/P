<?php    defined('C5_EXECUTE') or die(_("Access Denied."));
$pkg = Package::getByHandle('foundation');?>
</div><!-- End page content container -->
<!-- BEGIN FOOTER AREA -->
<div id="footer">
<div class="container">
	<div class="row">
		<div class="eight columns footer">
			<?php   $a = new Area('Footer Main'); $a->display($c); ?>
		</div>
		<div class="four columns footer">
			<?php   $a = new Area('Footer Right'); $a->display($c); ?>
		</div>
	</div>
	<div class="row">
		<div class="twelve columns">
			<p>&copy; <?php   echo date('Y')?> <?php   echo SITE?>. <?php   echo t('All rights reserved.')?></p>
		</div>
	</div>
</div>
</div><!-- End Footer -->
<!-- Simple Modal Menu -->
<div id="navModal" class="reveal-modal">
		<h4><?php   echo SITE?> <?php  echo t('Navigation');?></h4><hr />
		<?php  
			$bt = BlockType::getByHandle('autonav');
			$bt->controller->displayPages = 'top';
			$bt->controller->orderBy = 'display_asc';                    
			$bt->controller->displaySubPages = 'none'; 
			$bt->controller->displaySubPageLevels = 'custom';
			$bt->controller->displaySubPageLevelsNum = '1';                   
			$bt->render('templates/main_menu');
		?>
		<a class="close-reveal-modal">&#215;</a>
		<ul class="button-group rounded">
			<li><a href="#" id="mobileNav" data-reveal-id="expnavModal" class="button rounded"><?php  echo t('Expanded Menu');?></a></li>
			<li><a href="#" id="mobileNav" data-reveal-id="sitemapModal" class="button rounded"><?php  echo t('Full Site Map');?></a></li>
		</ul>
</div>
<!-- End Simple Modal Menu -->
<!-- Expanded Modal Menu -->
<div id="expnavModal" class="reveal-modal">
		<h4><?php   echo SITE?> <?php  echo t('Expanded Navigation');?></h4><hr />
		<?php  
			$bt = BlockType::getByHandle('autonav');
			$bt->controller->displayPages = 'top';
			$bt->controller->orderBy = 'display_asc';                    
			$bt->controller->displaySubPages = 'all'; 
			$bt->controller->displaySubPageLevels = 'custom';
			$bt->controller->displaySubPageLevelsNum = '1';                   
			$bt->render('templates/main_menu');
		?>
		<a class="close-reveal-modal">&#215;</a>
		<ul class="button-group rounded">
			<li><a href="#" id="mobileNav" data-reveal-id="navModal" class="button rounded"><?php  echo t('Simple Menu');?></a></li>
			<li><a href="#" id="mobileNav" data-reveal-id="sitemapModal" class="button rounded"><?php  echo t('Full Site Map');?></a></li>
		</ul>
</div>
<!-- End Expanded Modal Menu -->
<!-- Full Sitemap Modal Menu -->
<div id="sitemapModal" class="reveal-modal">
		<h4><?php   echo SITE?> <?php  echo t('Site Map');?></h4><hr />
		<?php  
			$bt = BlockType::getByHandle('autonav');
			$bt->controller->displayPages = 'top';
			$bt->controller->orderBy = 'display_asc';                    
			$bt->controller->displaySubPages = 'all'; 
			$bt->controller->displaySubPageLevels = 'all';                
			$bt->render('templates/main_menu');
		?>
		<a class="close-reveal-modal">&#215;</a>
		<ul class="button-group rounded">
			<li><a href="#" id="mobileNav" data-reveal-id="navModal" class="button rounded"><?php  echo t('Simple Menu');?></a></li>
			<li><a href="#" id="mobileNav" data-reveal-id="expnavModal" class="button rounded"><?php  echo t('Expanded Menu');?></a></li>
		</ul>
</div>
<!-- End Sitemap Modal Menu -->

<!-- Sticky footer (enabled or disabled in dashboard) -->
	<?php  Loader::model('attribute/categories/collection');
		$fdnstfoot = Config::get('fdnstfoot');
		if($fdnstfoot==0){
			echo t('<div class="sticky" style="display: block;"><div class="sticky-content">');
			echo t('<p><a href="#" id="mobileNav" data-reveal-id="navModal" class="small nice button">Menu</a>');
			$u = new User();
			if ($u->isRegistered()) {
				if (Config::get("ENABLE_USER_PROFILES")) {
					$userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
				} else {
					$userName = $u->getUserName();
				}
				echo t('Logged in as <b>%s</b>.', $userName);?>
				<a class="secondary small button" href="<?php   echo $this->url('/login', 'logout')?>">
				<?php   echo t('Sign Out')?></a>
		<?php    } else { ?>
				<a class="secondary small button" href="<?php   echo $this->url('/login')?>"><?php   echo t('Sign In')?></a>
		<?php    }
			echo t('</p></div></div>');
		}
	?>
<!-- End sticky footer --> 
<script>
	//$(".columns").fitVids();
	$(".container").fitVids();
</script>
<script type="text/javascript" src="<?php   echo $this->getThemePath()?>/js/foundation.min.js"></script>
<script type="text/javascript" src="<?php   echo $this->getThemePath()?>/js/foundation.app.js"></script>
<?php   Loader::element('footer_required'); ?>
</body>
</html>