<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html> 
<head>

<?php   Loader::element('header_required'); ?>

<!-- CSS -->
<link rel="stylesheet" href="<?php  echo $this->getStyleSheet('foundation/normalize.css')?>">
<link rel="stylesheet" href="<?php  echo $this->getStyleSheet('foundation/foundation.min.css')?>">
<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getStyleSheet('main.css')?>" />

<!-- Scripts -->
<script src="<?php  echo $this->getThemePath()?>/foundation/foundation.min.js"></script>
<script src="<?php  echo $this->getThemePath()?>/js/cobalt.js"></script>

</head>

<body>

<div id="page" class="f5-wrap">

	<div id="aboveHeaderWrap">
    <div class="row">
      <div id="aboveHeader" class="small-12 column">
        <?php  
        $a = new GlobalArea('AboveHeader');
        $a->display($c); 
        ?>
      </div>
    </div> 
  </div>
  
  <div id="headerWrap">
    <div class="row">
      <div id="headerGlobalArea" class="small-3 column">
          <?php  
          $a = new GlobalArea('HeaderGlobal');
          $a->display($c); 
          ?>
      </div>
      <div id="mainNav" class="small-9 column">
        <?php  
        $a = new GlobalArea('Header Nav');
        $a->display($c); 
        ?>
      </div>
    </div>
    
    <div class="row">
      <div id="headerArea" class="small-12 column">
        <?php  
        $a = new Area('Header');
        $a->display($c);
        ?>
      </div>
    </div>
    
  <!-- end headerWrap -->
  </div>
