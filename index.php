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
        <li><a class="menu-list_button menu-list_button__active" href="#">WELLCOM</a></li>
        <li><a class="menu-list_button" href="#">PHOTOs</a></li>
        <li><a class="menu-list_button" href="photos.php">DESIGNs</a></li>
        <li><a class="menu-list_button" href="aboutme.html">ABOUT ME</a></li>
      </ul>
    </menu>
    <article id="main-body">
      <?php include ('wellcom.html'); ?>
    </article>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./js/lightbox.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>
