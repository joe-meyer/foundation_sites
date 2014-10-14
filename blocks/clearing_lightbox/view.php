<?php defined('C5_EXECUTE') or die('Access Denied.'); ?>

<ul class="clearing-thumbs" data-clearing>  
<?php 
foreach($files as $f) {
    $fv = $f->getApprovedVersion();
    $filePath  = $fv->getRelativePath();
    
    // $t = new Thumbnail($f);
    // $thumbnail = $t-getPath();

    // $thumbnail = $f->getThumbnail(2, false);

    echo "<li>";
    echo "<a class=\"th\" href=\"$filePath\" >";
    //echo "<img src=\"{$thumbnail}\"/>";
    echo "Link";
    echo "</a>";
    echo "</li>\n";
}
?>
</ul>
