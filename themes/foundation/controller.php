<?php  defined('C5_EXECUTE') or die(_("Access Denied."));

class FoundationPackage extends Package {

	protected $pkgHandle = 'foundation';
	protected $appVersionRequired = '5.5.1';
	protected $pkgVersion = '1.4';
	
	public function getPackageDescription() {
		return t("Responsive framework theme founded on Foundation.");
	}
	
	public function getPackageName() {
		return t("Foundation");
	}
	
	public function install() {
		$pkg = parent::install();
		// load stuff we need
		Loader::model('single_page');
		Loader::model('collection_types');
		Loader::model('collection_attributes');
		Loader::model('package');
		// install theme		
		PageTheme::add('foundation', $pkg);	
		
		// install page types
		$ct = CollectionType::getByHandle('home');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
			$data['ctHandle'] = 'home';
			$data['ctName'] = t('Home');
			$hpt = CollectionType::add($data, $pkg);
		}
		$ct = CollectionType::getByHandle('left_sidebar');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
			$data['ctHandle'] = 'left_sidebar';
			$data['ctName'] = t('Left Sidebar');
			$hpt = CollectionType::add($data, $pkg);
		}
		$ct = CollectionType::getByHandle('right_sidebar');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
			$data['ctHandle'] = 'right_sidebar';
			$data['ctName'] = t('Right Sidebar');
			$hpt = CollectionType::add($data, $pkg);
		}
		$ct = CollectionType::getByHandle('full');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
			$data['ctHandle'] = 'full';
			$data['ctName'] = t('Full');
			$hpt = CollectionType::add($data, $pkg);
		}
		$ct = CollectionType::getByHandle('two_columns');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
			$data['ctHandle'] = 'two_columns';
			$data['ctName'] = t('Two Columns');
			$hpt = CollectionType::add($data, $pkg);
		}
		$ct = CollectionType::getByHandle('three_columns');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
			$data['ctHandle'] = 'three_columns';
			$data['ctName'] = t('Three Columns');
			$hpt = CollectionType::add($data, $pkg);
		}
		$ct = CollectionType::getByHandle('four_columns');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
			$data['ctHandle'] = 'four_columns';
			$data['ctName'] = t('Four Columns');
			$hpt = CollectionType::add($data, $pkg);
		}
		$ct = CollectionType::getByHandle('nested');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
			$data['ctHandle'] = 'nested';
			$data['ctName'] = t('Nested');
			$hpt = CollectionType::add($data, $pkg);
		}
		$ct = CollectionType::getByHandle('blog_entry');
		if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
			$data['ctHandle'] = 'blog_entry';
			$data['ctName'] = t('Blog Entry');
			$hpt = CollectionType::add($data, $pkg);
		}
		
		// install blocks
		BlockType::installBlockTypeFromPackage('ez_cta', $pkg);
		BlockType::installBlockTypeFromPackage('hcard', $pkg);
		BlockType::installBlockTypeFromPackage('ez_alert', $pkg);
		BlockType::installBlockTypeFromPackage('ez_button', $pkg);
		
		//install dashboard pages
		Loader::model('single_page');
		$fcPage=Page::getByPath('/dashboard/foundation'); 
		if( !intval($fcPage->cID) ){ 
			$fcPage=SinglePage::add('/dashboard/foundation', $pkg); }
		$fcPage->update(array('cName'=>t('Foundation'), 'cDescription'=>t('Configure Foundation theme.'))); 
		//main and configuration single page
		$fcConfigPage=Page::getByPath('/dashboard/foundation/settings');
		if( !intval($fcConfigPage->cID) ){ 
			$fcConfigPage=SinglePage::add('/dashboard/foundation/settings', $pkg); }
		$fcConfigPage->update(array('cName'=>t('Configure'), 'cDescription'=>t('Configure the Foundation theme.')));		
		//documentation single page
		$fcDocsPage=Page::getByPath('/dashboard/foundation/documentation');
		if( !intval($fcDocsPage->cID) ){ 
			$fcDocsPage=SinglePage::add('/dashboard/foundation/documentation', $pkg); }
		$fcDocsPage->update(array('cName'=>t('Documenation'), 'cDescription'=>t('Documentation for Foundation theme.')));
		// install background image page attribute
		$ift = AttributeType::getByHandle('image_file');
		$bgImageAttr=CollectionAttributeKey::getByHandle('bg_image');
		if( !is_object($bgImageAttr) )
     	CollectionAttributeKey::add($ift, array('akHandle' => 'bg_image', 'akName' => t('Background Image'), 'akIsSearchable' => false));
	}
	public function uninstall(){
		parent::uninstall();
	}

}