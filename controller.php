<?php
namespace Concrete\Package\FoundationSites;

use Package;
use PageTheme;

class Controller extends Package
{ 
    protected $pkgHandle = 'foundation_sites';
    protected $appVersionRequired = '5.7.0.0';
    protected $pkgVersion = '0.2';

    public function getPackageName() {
        return t("Foundation for Sites");
    }
    
    public function getPackageDescription() {
        return t("Foundation for Sites");
    }

    public function install() {
        $pkg = parent::install();
        $this->installThemes($pkg);
        //$this->installBlocks($pkg);

    }

    private function installThemes($pkg) {
        PageTheme::add('foundation_sites', $pkg);
    }

    // private function installBlocks($pkg) {
    //     if (!BlockType::getByHandle('clearing_lightbox')) {
    //         BlockType::installBlockTypeFromPackage('clearing_lightbox', $pkg);
    //     }
    // }
}
