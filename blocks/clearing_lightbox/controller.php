<?php  
namespace Concrete\Package\FoundationSites\Block\ClearingLightbox;

use \Concrete\Core\Block\BlockController;
use FileSet;
use FileList;
use Concrete\Core\File\Type\Type;
use \Concrete\Core\File\Image\Thumbnail\Thumbnail;
use Permissions;

class Controller extends BlockController
{
    
    protected $btTable = 'btClearingLightbox';
    protected $btInterfaceWidth = "400";
    protected $btInterfaceHeight = "150";

    public function getBlockTypeName()
    {
        return t("Clearing Lightbox");
    }

    public function getBlockTypeDescription()
    {
        return t("Clearing Lightbox from file set");
    }

    public function view()
    {
        $this->set('files', $this->getFilesFromFileSet());
    }

    public function getFilesFromFileSet()
    {
        $fs = FileSet::getById($this->fsID);

        $files = array();

        $fl = new FileList();
        $fl->filterBySet($fs);
        //we show only images with this block
        $fileType = Type::T_IMAGE;
        $fl->filterByType($fileType);

        $files = $fl->get();

        return $files;
    }
}
