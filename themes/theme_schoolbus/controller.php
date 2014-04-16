<?php  
defined('C5_EXECUTE') or die(_("Access Denied."));

class ThemeSchoolbusPackage extends Package {

    protected $pkgHandle = 'theme_schoolbus';
    protected $appVersionRequired = '5.6';
    protected $pkgVersion = '1.0.5';

    public function getPackageDescription() {
        return t("A responsive SEO customizable theme for concrete5");
    }

    public function getPackageName() {
        return t("Schoolbus - Theme");
    }
     
    public function install() {
        $pkg = parent::install();
        PageTheme::add('schoolbus', $pkg);
    }
}
