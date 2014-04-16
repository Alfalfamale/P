<?php  defined('C5_EXECUTE') or die(_("Access Denied."));
	class EzButtonBlockController extends BlockController {
		
		var $pobj;
		
		protected $btDescription = "Add alerts anywhere to any page!";
		protected $btName = "Ez Button";
		protected $btTable = 'btEzButton';
		protected $btInterfaceWidth = "340";
		protected $btInterfaceHeight = "350";
		
		function save($data) { 
			$args['buttonSize'] 	= $data['buttonSize'];
			$args['buttonType'] 	= $data['buttonType'];
			$args['buttonStyle'] 	= $data['buttonStyle'];
			$args['buttonText'] 	= $data['buttonText'];
			$args['pageID'] = ($args['pageID'] != '') ? $args['pageID'] : 0;
			parent::save($args);
		}
	}
	
?>