<?php    defined('C5_EXECUTE') or die(_("Access Denied.")); 
$pkg = Package::getByHandle('foundation');?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="en"> <!--<![endif]-->
	<head>
		<?php   Loader::element('header_required'); ?>
		<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
		<link rel="stylesheet" type="text/css" media="all" href="<?php  echo $this->getStyleSheet('typography.css');?>"  />
		<link rel="stylesheet" type="text/css" media="all" href="<?php  echo $this->getStyleSheet('css/foundation.css');?>"  />
		<link rel="stylesheet" type="text/css" media="all" href="<?php  echo $this->getStyleSheet('css/app.css');?>"  />
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
		<script type="text/javascript" src="<?php   echo $this->getThemePath()?>/js/modernizr.foundation.js"></script>
		<script type="text/javascript" src="<?php   echo $this->getThemePath()?>/js/jquery.fitvids.js"></script>
	</head>

<body>
<div id="header-bar">
<div class="container">
	<div class="row">
		<div class="four columns">
			<h1 class="logo">
        		<a href="<?php   echo DIR_REL?>/" title="<?php   echo SITE?>"><?php   
				$block = Block::getByName('My_Site_Name');  
				if( $block && $block->bID ) $block->display();   
				else echo SITE;
				?></a>
			</h1>
		</div>
		<div class="eight columns hide-on-phones">
			<h3 class="slogan"><?php  echo $pkg->config('fdnslogan');?></h3>
		</div>
	</div>
</div>
</div>
<div class="container">
