<!DOGTYPE html>
<html lang="ja">
  <head>
    <meta charaset="utf-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <header>
      <img src="4eachblog_logo.jpg" class="logo">
      <ul class="menu">
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
      </ul>
    </header>
    <main>
      <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
        <form method="post" action="insert.php">
          <h2>入力フォーム</h2>
          <div>
            <label>ハンドルネーム</label><br>
            <input type="text" name="handlename" size="35">
          </div>  
          <div>
            <label>タイトル</label><br>
            <input type="text" name="title" size="35">
          </div>  
          <div>
            <label>コメント</label><br>
            <textarea name="comments" cols="35" rows="7"></textarea>
          </div>
          <div>
            <input type="submit" value="投稿する" class="submit">
          </div>
        </form>
        <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
        $stmt = $pdo->query("select * from 4each_keijiban");

        while($row = $stmt->fetch()){
          echo "<div class='kiji'>";
          echo "<h3>".$row['title']."</h3>";
          echo "<div clsss='contents'>";
          echo $row['comments'];
          echo "<div class='handlename'>posted by".$row['handlename']."</div>";
          echo "</div>";
          echo "</div>";
        }
          ?>

      </div>

      <div class="right">
        <h2>人気の記事</h2>
        <p>PHPオススメ本</p>
        <p>PHP MyAdimの使い方</p>  
        <p>今人気のエディタ Top5</p>
        <p>HTMLの基礎</p>

        <h2>オススメリンク</h2>
          <p>インターノウス株式会社</p>
          <p>XAMPPのダウンロード</p>
          <p>Eclipseのダウンロード</p>
          <p>Bracketsのダウンロード</p>

        <h2>カテゴリ</h2>
          <p>HTML</p>
          <p>PHP</p>
          <p>MySQL</p>
          <p>JavaScript</p>
      </div>
      <div class="none"></div>
    </main>

    <footer>
      <p>
        copyright©internous|4each blog the which provides A to Z about programming.
      </p>
    </footer>
  </body>

</html>