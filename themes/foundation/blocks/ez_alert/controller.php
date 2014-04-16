<?php  defined('C5_EXECUTE') or die(_("Access Denied."));
	class EzAlertBlockController extends BlockController {
		
		var $pobj;
		
		protected $btDescription = "Add alerts anywhere to any page!";
		protected $btName = "Ez Alert";
		protected $btTable = 'btEzAlert';
		protected $btInterfaceWidth = "340";
		protected $btInterfaceHeight = "350";
		
		function save($data) { 
			$args['alertType'] 	= $data['alertType'];
			$args['alertMessage'] 	= $data['alertMessage'];
			parent::save($args);
		}
	}
	
?>