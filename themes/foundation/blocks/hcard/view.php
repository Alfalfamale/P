<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
    <ul class="vcard">
		<li class="fn"><?php   echo $fullName?></li>
		<li class="nickname"><?php   echo $jtitle?></li>
		<li class="org"><?php   echo $orgName?></li>
		<li class="tel"><a href="tel:<?php   echo $phNumber?>"><?php   echo $phNumber?></a></li>
		<li><a class="url" href="<?php   echo $website?>"><?php   echo $website?></a></li>
	</ul>
