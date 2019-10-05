<h2 class="page-tittle">My Photolist</h2>
<section id="photos" class="page-area">
  <ul class="photos-photolists">
    <?php
    $imagedir = opendir("./images/img-list/");
    while (false !== ($file[] = readdir($imagedir)));
    closedir($imagedir);
    natsort($file);
    reset($file);
    $reverse = array_reverse($file, true);
    while (false !== ($jpg = each($reverse))) {
        if (preg_match("|.jpg$|", $jpg[1])) {
            print "<li class='photos-photolist'><a href='./images/img-list/" . $jpg[1] . "' data-lightbox='image-1'><img class='images' src='./images/img-list/" . $jpg[1] . "' alt=''></a></li>";
        }
    }
    ?>
  </ul>
</section>
