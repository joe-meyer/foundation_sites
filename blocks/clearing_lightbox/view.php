<?php defined('C5_EXECUTE') or die('Access Denied.'); ?>

<ul class="clearing-thumbs" data-clearing>  
<?php 
$type = new ThumbnailType();
$type = $type->getByHandle('clearing_lightbox')

foreach($files as $f) {
    $fv = $f->getApprovedVersion();
    $filePath  = $fv->getRelativePath();

    echo "<li>";
    echo "<a class=\"th\" href=\"$filePath\" >";
    echo '<img src="' . $f->getThumbnailURL($type) . '" />';
    //echo "Link";
    echo "</a>";
    echo "</li>\n";
}
?>
</ul>
