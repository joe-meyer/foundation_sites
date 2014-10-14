<?php  
namespace Concrete\Package\FoundationSites\Block\ClearingLightbox;

use \Concrete\Core\Block\BlockController;

class Controller extends BlockController {
    
    protected $btTable = 'btClearingLightbox';
    protected $btInterfaceWidth = "400";
    protected $btInterfaceHeight = "150";

    public function getBlockTypeName() {
        return t("Clearing Lightbox");
    }

    public function getBlockTypeDescription() {
        return t("Clearing Lightbox from file set");
    }
}
