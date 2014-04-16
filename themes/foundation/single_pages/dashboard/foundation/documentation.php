<?php           
defined('C5_EXECUTE') or die(_("Access Denied."));	
$h = Loader::helper('concrete/interface');
global $c; 
$interfaceHelper = Loader::helper('concrete/interface'); 
$dashboardHelper = Loader::helper('concrete/dashboard'); 
?>
<?php   if( method_exists( $dashboardHelper, 'getDashboardPaneHeaderWrapper') ){  
echo $dashboardHelper->getDashboardPaneHeaderWrapper(t('Documentation'),t("Documentation for Foundation theme.")); 
}else{ ?> 
<h1><span><?php  echo t('Foundation Documentation')?></span></h1> 
<div class="ccm-pane-body">
	<?php   } ?>	
				<div class="row">
					<div class="span-pane-half">
						<h2><?php  echo t('About');?></h2>
						<p><?php  echo t('Foundation theme is a responsive theme built on the ');?><a href="http://foundation.zurb.com/" target="_blank"><?php  echo t('ZURB Foundation Framework.');?></a>
						<?php  echo t('The framework uses a flexible grid, with help from jquery, to allow for rapid prototyping and development of mobile-friendly sites.');?></p>
						<p><?php  echo t('This theme is intended to be a basic framework theme that you can develop off of. The idea of this theme is to save you time, so you don\'t have to develop additional mobile-friendly versions of your site. It is designed to work with the following:');?></p>
						<?php  echo t('<ul><li>Smartphones (ex. iPhone) - 320 x 480</li><li>Small Tablets (ex. e-readers) - 480 x 640</li><li>Large Tablets (ex. iPad) - 768 x 1024</li><li>Regular monitors (widescreen or standard) - sizes vary</li></ul>');?>
						<p><?php  echo t('It works with either orientation - portrait or landscape - on the above devices.');?></p>
						<p><?php  echo t('THEME VERSION: <strong>1.3</strong>');?></p>
						<p><?php  echo t('MINIMUM Concrete5 VERSION: <strong>5.5.1</strong>');?></p>
						<h3><?php  echo t('Features:');?></h3>
						<?php  echo t('<ul><li><a href="http://www.fitvidsjs.com" target="new"><strong>FitVids.js</strong></a> - Automatically fits embedded videos to fit within any area</li>
							<li><strong>hCard Block</strong> - Quickly add contact info displayed in the hCard microformat</li>
							<li><strong>Flex CTA Block</strong> - Add a call-to-action block</li>
							<li><strong>9 Page Types</strong> - Lots to work with!</li>
							<li><strong>Back-end Configuration Options</strong> - Custom slogan, enable or disable page titles and descriptions, and more!</li>
							<li><strong>Sticky Footer</strong> - Enable or disable a fixed-position footer at the bottom of every page! If enabled, you can display global content!</li></ul>');?>
						<p><?php  echo t('Also, you can easily customize the theme\'s color scheme by going to the Themes page in your dashboard.');?></p>
						<h2><?php  echo t('Cool Tools');?></h2> 
						<p><?php  echo t('There are several cool tools - all of which are FREE - that you can use to further develop and test your site with! All links open in a new window.');?></p>
						<p><a href="http://www.mattkersley.com/responsive/" target="_blank"><?php  echo t('Responsive Design Testing');?></a></p>
						<p><a href="http://www.generateprivacypolicy.com/" target="_blank"><?php  echo t('Privacy Policy Generator');?></a></p>
						<p><a href="http://www.loads.in" target="_blank"><?php  echo t('Webpage Loading Speed Tester');?></a></p>
						<p><a href="http://ready.mobi/launch.jsp?locale=en_EN" target="_blank"><?php  echo t('Mobile-Ready Evaluator');?></a></p>
						<p><a href="http://www.css3generator.com" target="_blank"><?php  echo t('CSS3 Generator');?></a></p>
						<h2><?php  echo t('Theme Resource Links');?></h2> 
						<p><a href="http://www.concrete5.org/marketplace/themes/flexcrete" target="_blank"><?php  echo t('Concrete5 Marketplace Theme Homepage');?></a></p>
						<p><a href="http://c5.gclocal.net/themes/foundation" target="_blank"><?php  echo t('Theme Demo');?></a></p>
						<p><a href="http://foundation.zurb.com/docs/" target="_blank"><?php  echo t('Foundation Documentation');?></a></p>
					</div>
					<div class="span-pane-half">
						<h2><?php  echo t('How To...');?></h2> 
						<?php  echo t('<p>Below are sections on how to use various elements of this theme.</p>')?>
						<h4><?php  echo t('Make Images Fit');?></h4>
						<p><?php  echo t('Keeping your images at their regular size may not be suitable, as they may be too large for smaller devices. The best thing to do is to make them auto-fit, or scale, within a certain area.');?>
							<pre>style="width:100%; height: auto !important;"</pre>
						</p>
						<h4><?php  echo t('Customize General Styles');?></h4>
						<p><?php  echo t('To change the way the theme appears, you will need to edit the file <strong>packages/foundation/themes/foundation/css/foundation.css</strong>.');?></p>
						<p><?php  echo t('The stylesheet is organized into sections. It is a single consolidated CSS file that contains both the responsive framework and general styles.');?></p>
						<h4><?php  echo t('Utilize FitVids.js');?></h4>
						<p><?php  echo t('FitVids.js is a jquery script that makes any YouTube (or other embedded) video auto-fit within that area. This means that it will re-adjust itself to 100% of the width of that area.');?></p>
						<p><?php  echo t('The script is automatically called on ALL pages of your site. All you have to do is add the video! You do not need to worry about the width or height - the script will override that for you. It is recommended to use the iframe method of embedding.');?></p>
						<h4><?php  echo t('Use the CTA and hCard Blocks');?></h4>
						<p><?php  echo t('This theme includes two simple blocks: <em>EZ CTA</em> and <em>hCard</em>.');?></p>
						<p><?php  echo t('The hCard block allows you to enter basic personal contact info, which is displayed in a SEO-friendly microformat. It can be placed anywhere.');?></p>
						<p><?php  echo t('The CTA block can be displayed anywhere. It allows you to link to a page within your site. When added, it will auto-fit within any area it is placed in.');?></p>
						<h4><?php  echo t('Make Any Block Display in a Modal Box');?></h4>
						<p><?php  echo t('Foundation has a built-in modal function called <em>Reveal</em>. You can easily display any block within a modal box.');?></p>
						<p><?php  echo t('<strong>STEP 1:</strong> After you have added the block you wish to display, choose the Design option for that block. On the CSS tab, enter a unique ID, and for class, enter: <em>reveal-modal</em>.');?></p>
						<p><?php  echo t('NOTE: While in edit mode, you will notice that your block appears hidden with just a small area. This is normal.');?></p>
						<p><?php  echo t('<strong>STEP 2:</strong> Add a link in your content that looks like this:');?>
							<pre>< a href="#" class="button" data-reveal-id="modalID">Link Text< / a></pre>
						<?php  echo t('Button class is optional. <em>modalID</em> is your unique ID that you added to your block. That\'s it! You now have a modal-enabled block!');?></p>
					</div><!-- END HALF SPAN -->
				</div><!-- END ROW -->
</div>
<?php   if( method_exists( $dashboardHelper, 'getDashboardPaneFooterWrapper') ){ 
	echo $dashboardHelper->getDashboardPaneFooterWrapper(); 
}else{ ?>  
	</div> 
<?php   } ?> 
