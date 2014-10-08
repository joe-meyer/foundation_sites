<ul class="small-block-grid-1 medium-block-grid-3">

<?php 
defined('C5_EXECUTE') or die('Access Denied.');

    foreach($images as $imgInfo) {
        $f = File::getByID($imgInfo['fID']);
        $fp = new Permissions($f);
        if ($fp->canRead()) {

            $fileName = $f->getFileName();
            $picturePath = $f->getRelativePath();
            $fileDescription = $f->getDescription();
            $orbitLinkUrl = $f->getAttribute('orbit_link_url');

            echo "<li>";
            echo    "<img src=\"{$picturePath}\"/>"; 
            echo    "<br><small>$fileDescription</small>";       
            echo "</li>\n";
        }
}
?>

</ul>
