<?php           
defined('C5_EXECUTE') or die(_("Access Denied."));
class DashboardFoundationDocumentationController extends Controller {
	public $helpers = array("form");
	
	
	public function on_start() {
		$subnav = array(
			array(View::url('/dashboard/foundation/'),t('Foundaiton')), 
			array(View::url('/dashboard/foundation/settings/'),t('Configure'), true),
			array(View::url('/dashboard/foundation/documentation/'),t('Documentation'), true),
		);
		$this->set('subnav', $subnav);
		$this->error = Loader::helper('validation/error');
	}
}
?>