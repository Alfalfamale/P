<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$nh = Loader::helper('navigation');
$im = Loader::helper('image');
$u = new User();

// Retrieve a bunch of variables to be used as body classes.
$mt = $c->getAttribute('meta_title');
$md = $c->getAttribute('meta_description');
$cn =  $c->getCollectionName();
$cd = $c->getCollectionDescription();
$cu = $nh->getCollectionURL($c);
$ch = $c->getCollectionHandle();
$pt = $c->getCollectionTypeHandle();
$ul = $u->isLoggedIn() ? 'user-logged-in' : 'user-anonymous';
$ih = !$c->isError() && $c->getCollectionID() == HOME_CID ? 'is-home' : 'not-home';
$id = 'page-id-' . $c->getCollectionID();
$em = $c->isEditMode() ? 'editmode' : '';

$bc = array('page-type-' . $pt, $ul, $ih, $id, 'page-url-' . $ch, $em);
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		
		<meta property="og:site_name" content="<?php  echo SITE ?>"/>
	    <meta property="og:url" content="<?php  echo $cu ?>"/>
	    <?php  if(!empty($mt)) { echo '<meta property="og:title" content="' . $mt . '"/>'; } ?>
	    <?php  if(!empty($cd) || !empty($md)) { echo '<meta property="og:description" content="' . $cd . ' ' . $md . '"/>'; } ?>
	    <meta property="og:type" content="website"/>
		<?php  if(!empty($mt)) { echo '<meta name="title" content="' . $mt . '" />'; } ?>
		<meta name="keywords" content="<?php  echo implode(', ', array(SITE, $cn, $cd)) ?>" />
		
		<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getThemePath() ?>/css/webmaker.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getThemePath() ?>/css/fonts.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getStylesheet('style.css')?>" />
		<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getThemePath() ?>/typography.css" />
		<script src="<?php  echo $this->getThemePath()?>/js/custom.modernizr.js"></script>
		
		<?php  Loader::element('header_required') ?>
	</head>
	<body class="<?php  echo implode(' ', $bc) ?>">
		<div id="wrapper">
			<div class="row header">
				<div id="header-left" class="large-4 medium-12 column eqH-L-1">
					<div id="logo">
						<?php 
						$a = new GlobalArea('Logo');
						if (($a->getTotalBlocksInArea($c) > 0) || ($c->isEditMode())) {
							$a->setBlockLimit(1);
							$a->display();
						} else { 
							// Default logo if there is no block in this area.
							echo '<img src="' . $this->getThemePath() . '/img/schoolbus_logo.png">'; 
						}
						?><a name="top"></a>
					</div>
					<div id="navigation" class="navigation">
						<div class="navigation-inner">
							<?php 
							$a = new GlobalArea('Header Nav');
							if (($a->getTotalBlocksInArea($c) > 0) || ($c->isEditMode())) {
								$a->display();
							} else {
								// Default autonav if no blocks are set.
								$bt_nav = BlockType::getByHandle('autonav');
								$bt_nav->controller->displayPages = 'top';
								$bt_nav->controller->orderBy = 'display_asc';
								$bt_nav->controller->displaySubPages = 'none';
								$bt_nav->render('view');
							}
							?>
						</div>
						<div id="mobile-nav-toggle">
							<a href="javascript:void(0);"><span class="title"><?php  echo t('Menu') ?></span> <span class="icon-bar"> </span><span class="icon-bar"></span><span class="icon-bar"></span> </a>
						</div>
					</div>
					<script type="text/javascript">$(function(){ 
						$('#mobile-nav-toggle').click(function() {
							$('.navigation-inner').toggle();
						});
					});</script>
				</div>
				<div id="header-right" class="large-8 medium-12 column eqH-L-1">
					<?php 
					$a = new GlobalArea('Slideshow');
					if (($a->getTotalBlocksInArea($c) > 0) || ($c->isEditMode())) {
						$a->setBlockLimit(1);
						$a->display();
					} 
					?>
				</div>
			</div>