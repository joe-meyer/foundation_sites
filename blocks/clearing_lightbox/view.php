<?php defined('C5_EXECUTE') or die('Access Denied.'); ?>

<ul class="clearing-thumbs" data-clearing>  
<?php 
foreach($files as $f) {
    $fv = $f->getApprovedVersion();
    $filePath  = $fv->getRelativePath();

    echo "<li>";
    echo "<a class=\"th\" href=\"$filePath\" >";
    echo $f->getListingThumbnailImage();
    //echo "Link";
    echo "</a>";
    echo "</li>\n";
}
?>
</ul>
