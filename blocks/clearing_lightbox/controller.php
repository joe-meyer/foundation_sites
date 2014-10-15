<?php  
namespace Concrete\Package\FoundationSites\Block\ClearingLightbox;

use Concrete\Core\Block\BlockController;
use File;
use FileSet;
use FileList;
use Concrete\Core\File\Type\Type;
use \Concrete\Core\File\Image\Thumbnail\Thumbnail as Thumbnail;
use \Concrete\Core\File\Image\Thumbnail\Type\Type as ThumbnailType;

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
        $this->set('thumbnail', $this->getThumbnail());
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

    public function getThumbnail() 
    {
        $files = $this->getFilesFromFileSet();

        foreach($files as $f) {
            $fID = $f->getFileID();
            $f = File::getByID($fID);
 
            //GET CLEARING LIGHTBOX TYPE AND COMPARE TO SEE IF WE NEED TO REGENERATE THUMBNAILS
            //THIS IS REALLY UGLY BUT THE ONLY WAY THAT WILL GENERATE NON-EXISTENT THUMBNAILS!!!!!!
            //WHYYY???
            $type = new ThumbnailType();
            $type = $type->getByHandle('clearing_lightbox');
            $type = $type->getBaseVersion();
            $thumbnail = new Thumbnail($type, $f->getThumbnailURL('clearing_lightbox'));
            $thumbTypes = $f->getThumbnails();
            $needsThumb = TRUE;
            foreach ($thumbTypes as $tType) {
                if ($thumbnail == $tType) {
                    $needsThumb = FALSE;
                }
            }
            if ($needsThumb != FALSE) {
                $f->rescanThumbnails();
            }                 
            //GET THUMBNAIL URL
            $thumbnail = $f->getThumbnailURL('clearing_lightbox');

            return $thumbnail;
        }
    }
}
