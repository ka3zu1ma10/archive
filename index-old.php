<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset="utf-8">
    <title>Kazuma Saitoh Info Card</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/ress.css">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
  </head>
  <body>
    <main class="main-body">
      <h1>Kazuma Saitoh<br>Information</h1>
      <section>
        <h2>Are you sure you want to follow me</h2>
        <ul class="follow-list">
          <li class="button follow-twitter">
            <a href="https://twitter.com/ka3zu1ma10?ref_src=twsrc%5Etfw" data-show-count="false">
              <img class="twitter-icon" src="images/Twitter_Logo_WhiteOnImage.svg"><p>Twitter Follow<br>@ka3zu1ma10</p>
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
          // ディレクトリハンドルの取得
          $dir_h = opendir( "images/img-list/" ) ;
          // ファイル・ディレクトリの一覧を $file_list に
          while (false !== ($file_list[] = readdir($dir_h))) ;
          // ディレクトリハンドルを閉じる
          closedir( $dir_h ) ;
          //ディレクトリ内のファイル名を１つずつを取得
          foreach ( $file_list as $file_name )
          {
            //ファイルのみを表示
            if( is_file( "images/img-list/" . $file_name) )
            {
              $p = pathinfo("images/img-list/" . $file_name);
              if ( $p["extension"] == "JPG" )
              {
                print $file_name  ;
              }
            }
          }?>
        </ul>
      </section>
    </main>
  </body>
</html>
