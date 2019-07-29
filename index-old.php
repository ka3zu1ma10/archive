<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>Kazuma Saitoh</title>
  <link rel="stylesheet" href="./css/ress.css">
  <link rel="stylesheet" href="./css/master.css">
  <link rel="stylesheet" href="./css/lightbox.css">
  <title></title>
</head>

<body>
  <header id="main-header">
    <h1>Kazuma Saitoh</h1>
  </header>
  <main id="main-area">
    <menu id="main-menu">
      <ul class="menu-lists">
        <li><button class="menu-list_button menu-list_button__active" type="button" name="button">WELLCOM</button></li>
        <li><button class="menu-list_button" type="button" name="button">PHOTOs</button></li>
        <li><button class="menu-list_button" type="button" name="button">DESIGNs</button></li>
        <li><button class="menu-list_button" type="button" name="button">ABOUT ME</button></li>
      </ul>
    </menu>
    <article id="main-body">
      <h2>WELLCOM<br>Kazuma Saitoh Pages</h2>
      <section>
        <h3>Are you sure you want to follow me</h3>
        <ul class="follow-list">
          <li class="button follow-twitter">
            <a href="https://twitter.com/ka3zu1ma10?ref_src=twsrc%5Etfw" data-show-count="false">
              <img class="twitter-icon" src="images/Twitter_Logo_WhiteOnImage.svg">
              <p>Twitter Follow<br>@ka3zu1ma10</p>
            </a>
          </li>
          <li class="button follow-facebook">
            <a href="https://www.facebook.com/ka3zu1ma10">
              <img class="facebook-icon" src="images/flogo-HexRBG-Wht-58.svg">
              <p>Facebook Follow<br>ka3zu1ma10</p>
            </a>
          </li>
        </ul>
      </section>
      <section>
        <h2>My Photolist</h2>
        <ul>
          <?php
              $imagedir = opendir("images/img-list/mitaka-20190616");
              while (false !== ($file[] = readdir($imagedir)));
              closedir($imagedir);
              natsort($file);
              reset($file);
              $reverse = array_reverse($file, true);
              while (false !== ($jpg = each($reverse))){
              if (preg_match ("|.JPG$|", $jpg[1])) {
                print "<li><a href='./images/top-image/" . $jpg[1] . "' data-lightbox='image-1'><img class='images' src='./images/top-image/" . $jpg[1] . "'></a></li>";
              }
            }

          ?>
        </ul>
      </section>
    </article>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./js/lightbox.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>
