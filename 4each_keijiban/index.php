 
<!DOCTYPE html>
<html lang="ja">
    <meta charset="UTF-8">
    <title>掲示板</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <body>
        <div class="logo"> <img src="4eachblog_logo.jpg"></div>
        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>
        <div class="left">
            <h1>プログラミングに役立つ掲示板</h1>
            
         
            <form method="post" action="insert3.php">
                <h2>入力フォーム</h2>
                <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text" name="handlename" size="35">
                </div>
                <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" name="title" size=35>
                </div>
                <div>
                    <label>コメント</label>
                    <br>
                    <textarea name="comments" rows="7" clos="35"></textarea>
                </div>
                <div>
                    <input type="submit" class="submit" value="投稿する">
                </div>
            </form>  
            
             <?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=yoshida_h;host=localhost;","root","");
    $stmt = $pdo -> query("select * from 4each_keijiban");
    
    while($row=$stmt->fetch()){
        echo "<div class='kiji'>";
        echo "<h4>".$row['title']."</h4>";
        echo "<div class='contents'>";
        echo $row['comments'];
        echo "<div class='handlename'> posted by ".$row['handlename']." </div>";
        echo "</div>";
        echo "</div>";
    }
        ?>
            
        </div>   
        
        <div class="right">
            <h3>人気の記事</h3>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP　MyAdminの使い方</li>
                    <li>今人気のエディタTop5</li>
                    <li>HTMLの基礎</li>
                </ul>
            <h3>オススメリンク</h3>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
            <h3>カテゴリ</h3>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
        </div>
        <footer>
            copyright © internous|4each blog the which provides A to Z about programing
        </footer>
    </body>   
</html>