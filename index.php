<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>Kazuma Saitoh</title>
  <link rel="stylesheet" href="./css/ress.css">
  <link rel="stylesheet" href="./css/master.css">
  <link rel="stylesheet" href="./css/profile.css">
  <link rel="stylesheet" href="./css/lightbox.css">
  <link href="https://fonts.googleapis.com/css?family=Play:400,700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/7d6d95fc57.js" crossorigin="anonymous"></script>
  <title>Kazuma's room</title>
</head>
<!-- お越しいただきありがとうございます。 -->
<!-- まだまだ制作途中ですが、少しづつ進化していけたらと思っています。 -->

<body>
  <div id="menu-area">
    <header id="main-header">
      <h1>Kazuma Saitoh</h1>
    </header>
    <menu id="main-menu">
      <ul class="menu-lists">
        <li><button class="menu-list_button menu-list_button__active" type="button" name="button" value="wellcom">WELLCOM</button></li>
        <li><button class="menu-list_button" type="button" name="button" value="photos">PHOTO Gallery</button></li>
        <!-- <li><button class="menu-list_button" type="button" name="button" value="designs">DESIGN Gallery</button></li> -->
        <li><button class="menu-list_button" type="button" name="button" value="aboutme">ABOUT ME</button></li>
      </ul>
    </menu>
  </div>
  <main id="main-area">
    <article id="main-body">
      <div id="main-body-date-wellcom" class="main-body-date main-body-date--active">
        <?php include ('wellcom.html'); ?>
      </div>
      <div id="main-body-date-photos" class="main-body-date">
        <?php include ('photos.php'); ?>
      </div>
      <div id="main-body-date-designs" class="main-body-date">
        <?php include ('designs.php'); ?>
      </div>
      <div id="main-body-date-aboutme" class="main-body-date">
        <?php include ('aboutme.html'); ?>
      </div>

    </article>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./js/data.js"></script>
  <script src="./js/lightbox.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>
