<?php           
defined('C5_EXECUTE') or die(_("Access Denied."));
/* 
	Theme Name: Foundation
	Description: Responsive theme built on Skeleton framework.
	Author: Growth Curve
	Author URI: http://www.growthcurve.co 
*/
class DashboardFoundationSettingsController extends Controller {
	public $helpers = array("form");
	
	
	public function on_start() {
		$subnav = array(
			array(View::url('/dashboard/foundation/'),t('Foundation'), true), 
			array(View::url('/dashboard/foundation/settings/'),t('Configure')),
			array(View::url('/dashboard/foundation/documentation/'),t('Documentation')),
		);
		$this->set('subnav', $subnav);
		Loader::model('page_list');
		$this->error = Loader::helper('validation/error');
	}
	public function view(){
		$pkg = Package::getByHandle('foundation');
		$this->set('fdnstfoot', $pkg->config('fdnstfoot'));
		$this->set('fdnbcrumbs', $pkg->config('fdnbcrumbs'));
		$this->set('fdnptitles', $pkg->config('fdnptitles'));
		$this->set('fdnpdesc', $pkg->config('fdnpdesc'));
		$this->set('fdnslogan', $pkg->config('fdnslogan'));
	}
	public function fdnstfoot() {
		$pkg = Package::getByHandle('foundation');
    	$pkg->saveConfig('fdnstfoot', $this->post('fdnstfoot'));
        $this->set('message',t('Sticky Footer setting has been saved.'));   
        $this->view();
	}
	public function fdnbcrumbs() {
		$pkg = Package::getByHandle('foundation');
    	$pkg->saveConfig('fdnbcrumbs', $this->post('fdnbcrumbs'));
        $this->set('message',t('Breadcrumb Bar setting has been saved.'));   
        $this->view();
	}
	public function fdnptitles() {
		$pkg = Package::getByHandle('foundation');
    	$pkg->saveConfig('fdnptitles', $this->post('fdnptitles'));
        $this->set('message',t('Page Title setting has been saved.'));   
        $this->view();
	}
	public function fdnpdesc() {
		$pkg = Package::getByHandle('foundation');
    	$pkg->saveConfig('fdnpdesc', $this->post('fdnpdesc'));
        $this->set('message',t('Page Description setting has been saved.'));   
        $this->view();
	}
	public function fdnslogan() {
		$pkg = Package::getByHandle('foundation');
    	$pkg->saveConfig('fdnslogan', $this->post('fdnslogan'));
        $this->set('message',t('Slogan has been saved.'));   
        $this->view();
	}
}
?>