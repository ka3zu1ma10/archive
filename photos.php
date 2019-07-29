
<section id="photos">
  <h2>My Photolist</h2>
  <h3>mitaka</h3>
  <ul class="photos-photolists">
    <?php
    $imagedir = opendir("./images/img-list/mitaka-20190616/");
    while (false !== ($file[] = readdir($imagedir)));
    closedir($imagedir);
    natsort($file);
    reset($file);
    $reverse = array_reverse($file, true);
    while (false !== ($jpg = each($reverse))){
    if (preg_match ("|.jpg$|", $jpg[1])) {
      print "<li class='photos-photolist'><a href='./images/img-list/mitaka-20190616/" . $jpg[1] . "' data-lightbox='image-1'><img class='images' src='./images/img-list/mitaka-20190616/" . $jpg[1] . "'></a></li>";
    }
    }
    ?>
  </ul>
</section>
