<?php 
defined('C5_EXECUTE') or die("Access Denied."); 

if(count($images)) {
	?>
	<ul data-orbit>
	<?php   
	foreach($images as $imgInfo) {
		$f = File::getByID($imgInfo['fID']);
		$fp = new Permissions($f);
		if ($fp->canViewFile()) {
			echo '<li>';
			echo '<img src="'.$f->getRelativePath().'" alt="'.$f->getFileName().'">';
			//echo '<div class="orbit-caption">...</div>';
			echo '</li>';
		}
	}
	?>
	</ul>
	<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getThemePath() ?>/css/foundation.css" />
	<script type="text/javascript">$(function(){ 
		$(document).foundation('orbit', {timer_speed:<?php  echo intval($imgInfo['duration'])*1000?>,bullets:false,animation_speed:<?php  echo intval($imgInfo['fadeDuration'])*1000?>});
	});</script>
	<?php 
}
?>