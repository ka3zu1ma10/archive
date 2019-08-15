<h2 class="page-tittle">My Photolist</h2>
<section id="photos">
  <h3 class="photos-tittle">MITAKA</h3>
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

  <h3 class="photos-tittle">OKUTAMA</h3>
  <ul class="photos-photolists">
    <?php
    $imagedir2 = opendir("./images/img-list/okutama-20181125/");
    while (false !== ($file2[] = readdir($imagedir2)));
    closedir($imagedir2);
    natsort($file2);
    reset($file2);
    $reverse2 = array_reverse($file2, true);
    while (false !== ($jpg2 = each($reverse2))){
    if (preg_match ("|.jpg$|", $jpg2[1])) {
      print "<li class='photos-photolist'><a href='./images/img-list/okutama-20181125/" . $jpg2[1] . "' data-lightbox='image-1'><img class='images' src='./images/img-list/okutama-20181125/" . $jpg2[1] . "'></a></li>";
    }
    }
    ?>
  </ul>

  <h3 class="photos-tittle">others</h3>
  <ul class="photos-photolists">
    <?php
    $imagedir3 = opendir("./images/img-list/others/");
    while (false !== ($file3[] = readdir($imagedir3)));
    closedir($imagedir3);
    natsort($file3);
    reset($file3);
    $reverse3 = array_reverse($file3, true);
    while (false !== ($jpg3 = each($reverse3))){
    if (preg_match ("|.jpg$|", $jpg3[1])) {
      print "<li class='photos-photolist'><a href='./images/img-list/others/" . $jpg3[1] . "' data-lightbox='image-1'><img class='images' src='./images/img-list/others/" . $jpg3[1] . "'></a></li>";
    }
    }
    ?>
  </ul>
</section>
