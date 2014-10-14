<?php defined('C5_EXECUTE') or die('Access Denied.'); ?>

<ul class="clearing-thumbs" data-clearing>  
<?php 
foreach($files as $file) {
    $f = $file->getApprovedVersion();
    $filePath  = $f->getRelativePath();
    
    // $t = new Thumbnail($f);
    // $thumbnail = $t-getPath();

    // $thumbnail = $f->getThumbnail(2, false);

    echo "<li>";
    echo "<a class=\"th\" href=\"{$filePath}\" >";
    echo "Link";
    //echo "<img src=\"{$thumbnail}\"/>";
    echo "</a>";
    echo "</li>\n";
}
?>
</ul>
