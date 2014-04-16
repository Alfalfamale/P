<?php           
defined('C5_EXECUTE') or die(_("Access Denied."));	
$h = Loader::helper('concrete/interface');
global $c; 
$interfaceHelper = Loader::helper('concrete/interface'); 
$dashboardHelper = Loader::helper('concrete/dashboard'); 
?>
<?php   if( method_exists( $dashboardHelper, 'getDashboardPaneHeaderWrapper') ){  
echo $dashboardHelper->getDashboardPaneHeaderWrapper(t('Configure Foundation'),t("Configure the Foundation theme.")); 
}else{ ?> 
<h1><span><?php  echo t('Foundation')?></span></h1> 
<div class="ccm-pane-body">
	<?php   } ?>	
				<div class="row">
					<div class="span-pane-half">
						<div class="ccm-dashboard-inner">
							<div class="ccm-module-wrapper">
								<h2><?php  echo t('Theme Settings');?></h2>
								<div class="ccm-module">
									<?php  echo t('<h4>Slogan:</h4>')?>
									<?php  echo t('<p>The slogan will display at the top right of every page.</p>')?>
									<form method="post" action="<?php  echo $this->action('fdnslogan')?>" id="ccm-single-pages-theme-fdnslogan">
										<input type="text" name="fdnslogan" value="<?php  echo $fdnslogan;?>"/> 			
										<div class="ccm-buttons">
											<a href="javascript:void(0)" onclick="$('#ccm-single-pages-theme-fdnslogan').get(0).submit()" style="float:left;" class="btn"><span><?php  echo t('Save Slogan')?></span></a>
										</div>
										<div class="ccm-spacer">&nbsp;</div>
									</form>
								</div>
								
								<div class="ccm-module">
									<?php  echo t('<h4>Display Sticky Footer</h4>')?>
									<form method="post" action="<?php  echo $this->action('fdnstfoot')?>" id="ccm-single-pages-theme-fdnstfoot">
										<div class="ccm-dashboard-radio"><input type="radio" name="fdnstfoot" value="0" <?php  if  ($fdnstfoot==0) { ?> checked <?php  } ?> /> <?php  echo t('Enabled'); ?> </div>
										<div class="ccm-dashboard-radio"><input type="radio" name="fdnstfoot" value="1" <?php  if ($fdnstfoot==1) { ?> checked <?php  } ?> /> <?php  echo t('Disabled'); ?> </div>

										<div class="ccm-buttons">
											<a href="javascript:void(0)" onclick="$('#ccm-single-pages-theme-fdnstfoot').get(0).submit()" style="float:left;" class="btn"><span><?php  echo t('Save Sticky Footer')?></span></a>
										</div>
										<div class="ccm-spacer">&nbsp;</div>
									</form>
								</div>
								
								<div class="ccm-module">
									<?php  echo t('<h4>Display Breadcrumb Bar</h4>')?>
									<form method="post" action="<?php  echo $this->action('fdnbcrumbs')?>" id="ccm-single-pages-theme-fdnbcrumbs">
										<div class="ccm-dashboard-radio"><input type="radio" name="fdnbcrumbs" value="0" <?php  if  ($fdnbcrumbs==0) { ?> checked <?php  } ?> /> <?php  echo t('Show'); ?> </div>
										<div class="ccm-dashboard-radio"><input type="radio" name="fdnbcrumbs" value="1" <?php  if ($fdnbcrumbs==1) { ?> checked <?php  } ?> /> <?php  echo t('Hide'); ?> </div>

										<div class="ccm-buttons">
											<a href="javascript:void(0)" onclick="$('#ccm-single-pages-theme-fdnbcrumbs').get(0).submit()" style="float:left;" class="btn"><span><?php  echo t('Save Breadcrumb Bar')?></span></a>
										</div>
										<div class="ccm-spacer">&nbsp;</div>
									</form>
								</div>
								
								<div class="ccm-module">
									<?php  echo t('<h4>Show or Hide Page Title</h4>')?>
									<?php  echo t('<p>Do you want to show or hide the page title automatically on all pages?</p>')?>
									<form method="post" action="<?php  echo $this->action('fdnptitles')?>" id="ccm-single-pages-theme-fdnptitles">
										<div class="ccm-dashboard-radio"><input type="radio" name="fdnptitles" value="0" <?php  if  ($fdnptitles==0) { ?> checked <?php  } ?> /> <?php  echo t('Show'); ?> </div>
										<div class="ccm-dashboard-radio"><input type="radio" name="fdnptitles" value="1" <?php  if ($fdnptitles==1) { ?> checked <?php  } ?> /> <?php  echo t('Hide'); ?> </div>

										<div class="ccm-buttons">
											<a href="javascript:void(0)" onclick="$('#ccm-single-pages-theme-fdnptitles').get(0).submit()" style="float:left;" class="btn"><span><?php  echo t('Save Page Titles')?></span></a>
										</div>
										<div class="ccm-spacer">&nbsp;</div>
									</form>
								</div>
								
								<div class="ccm-module">
									<?php  echo t('<h4>Show or Hide Page Description</h4>')?>
									<?php  echo t('<p>Do you want to show or hide the page description automatically on all pages?</p>')?>
									<form method="post" action="<?php  echo $this->action('fdnpdesc')?>" id="ccm-single-pages-theme-fdnpdesc">
										<div class="ccm-dashboard-radio"><input type="radio" name="fdnpdesc" value="0" <?php  if  ($fdnpdesc==0) { ?> checked <?php  } ?> /> <?php  echo t('Show'); ?> </div>
										<div class="ccm-dashboard-radio"><input type="radio" name="fdnpdesc" value="1" <?php  if ($fdnpdesc==1) { ?> checked <?php  } ?> /> <?php  echo t('Hide'); ?> </div>

										<div class="ccm-buttons">
											<a href="javascript:void(0)" onclick="$('#ccm-single-pages-theme-fdnpdesc').get(0).submit()" style="float:left;" class="btn"><span><?php  echo t('Save Page Descriptions')?></span></a>
										</div>
										<div class="ccm-spacer">&nbsp;</div>
									</form>
								</div>
			
							</div>
						</div>
					</div>
					<div class="span-pane-half">
						<div class="ccm-module">
							<h3><?php  echo t('Developer & Support');?></h3>
							<p><?php  echo t('Developed by: ');?><a href="http://www.concrete5.org/profile/-/view/11911/" target="_blank"><span><?php  echo t('Growth Curve')?></span></a></p>
							<p><?php  echo t('Need extra support? ');?><a href="http://www.concrete5.org/marketplace/themes/flexcrete" target="_blank"><?php  echo t('Go to marketplace page...');?></a></p>
						</div>
					</div><!-- END HALF SPAN -->
				</div><!-- END ROW -->
</div>

<?php   if( method_exists( $dashboardHelper, 'getDashboardPaneFooterWrapper') ){ 
	echo $dashboardHelper->getDashboardPaneFooterWrapper(); 
}else{ ?>  
	</div> 
<?php   } ?> 
<script type="text/javascript">
$('#feedback-type').change(function() {
  $("#support")[$(this).val() == "support" ? 'show' : 'hide']("fast");
  $("#hide")[$(this).val() !== "support" ? 'show' : 'hide']("fast");
}).change();
</script>

