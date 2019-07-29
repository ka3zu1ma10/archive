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
        <li><button class="menu-list_button menu-list_button__active" type="button" name="button" value="wellcom">WELLCOM</button></li>
        <li><button class="menu-list_button" type="button" name="button" value="photos">PHOTOs</button></li>
        <li><button class="menu-list_button" type="button" name="button" value="designs">DESIGNs</button></li>
        <li><button class="menu-list_button" type="button" name="button" value="aboutme">ABOUT ME</button></li>
      </ul>
    </menu>
    <article id="main-body">
      <?php include ('wellcom.html'); ?>
    </article>
  </main>
  <script>
  var mainBodyEls = {
    "wellcomeEls": "<?php include ('wellcom.html'); ?>",
    "photosEls": "<?php include ('phots.php'); ?>",
    "designsEls": "<?php include ('designs.php'); ?>",
    "aboutmeEls": "<?php include ('aboutme.html'); ?>"
  };
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./js/lightbox.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>
