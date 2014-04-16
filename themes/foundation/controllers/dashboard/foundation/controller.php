<?php  

defined('C5_EXECUTE') or die(_("Access Denied.")); 

class DashboardFoundationController extends Controller { 
	
	public function view(){ 
	
		$this->redirect('/dashboard/foundation/settings');
		
	}	
	
}

?>