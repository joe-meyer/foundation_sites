<?php  
namespace Concrete\Package\ClearingLightbox\Block\ClearingLightbox;

use \Concrete\Core\Block\BlockController;
use Page;
use View;

class Controller extends BlockController {
    
    protected $btTable = 'btClearingLightbox';
    protected $btInterfaceWidth = "400";
    protected $btInterfaceHeight = "500";

    public function getBlockTypeName() {
        return t("Clearing Lightbox");
    }

    public function getBlockTypeDescription() {
        return t("Clearing Lightbox from file set");
    }

    public function add() {
        parent::add();
    }

    public function edit() {
        parent::edit();
    }
    
    public function view() {
    }

    public function getFileSets () {
        $filesets = //TODO get file sets here

    }

    public function getFileSetImages () {
        $images = //TODO get images from selected fileset
    }
}
