<?php  defined('C5_EXECUTE') or die(_("Access Denied."));
	class HcardBlockController extends BlockController {
		
		var $pobj;
		
		protected $btDescription = "Block to add contact info in hCard microformat.";
		protected $btName = "hCard Contact Info";
		protected $btTable = 'bthCard';
		protected $btInterfaceWidth = "340";
		protected $btInterfaceHeight = "350";
		
		
	}
	
?>