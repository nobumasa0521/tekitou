<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイサイト</title>
    <link rel="stylesheet" href="tekitou.css">
</head>
<body>
    <header>
        <div class="header-logo-menu">
            <div id="nav-drawer">
                <input id="nav-input" type="checkbox" class="nav-unshown">
                <label id="nav-open" for="nav-input"><span></span></label>
                <label class="nav-unshown" id="nav-close" for="nav-input"></label>
                <div id="nav-content">
                    <nav>
                        <ul>
                            <li><a href="https://www.pref.aichi.jp/shugyo/koukyou/nagoya/">名古屋高等技術専門校</a></li>
                            <li><a href="https://www.yahoo.com">yahoo本家</a></li>
                            <li><a href="https://www.haoo/co.jp">yahooJP</a></li>
                            <li><a href="https://google.com">google本家</a></li>
                            <li><a href="https://www.google.co.jp">googleJP</a></li>
                            <li><a href="https://applecom">Apple</a></li>
                        </ul>
                    </nav>
                </div>           
                <div class="logo-area">
                    <h1>自分のサイト</h1>
                </div>
        </div>
        
    </header>

    <main>
        </div id="main_image"> 
            <div id="main_image_inner">
                <h2>プログラミング勉強</h2>
            </div>
        </div>
        <h3>記事の一覧です！</h3>
        <article>
            <h3>記事のタイトルです！</h3>
            <p>ダミー文章: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt dicta in necessitatibus accusantium temporibus possimus numquam optio pariatur, nam aut doloribus voluptatem consectetur iste sapiente quisquam, debitis iure quo ducimus.</p>
            <p>ダミー文章: Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam tempora distinctio atque autem id magni debitis consequatur porro provident blanditiis, fugit consequuntur temporibus error eaque nostrum officiis quisquam, repellendus odio.</p>
            <p>ダミー文章: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, doloremque veritatis odio voluptatibus omnis at similique vel reiciendis id dolor est optio animi porro earum! Impedit maxime similique numquam neque!</p>
        </article>
        <a class="" href="https://google.com">リンク</a>
        <input type="date" name="" id="">
        <form action="sent.php" method="post" class="form">
            <h4>問い合わせフォーム</h4>
            <div>名前を入力してください</div>
            <input type="text" name="name">
            <div>Emailを入力してください</div>
            <input type="text" name="email">
            <div>内容</div>
            <textarea name="content" class="content"></textarea>
            <div>くだもの</div>
            <select name="fruit">
                <option>りんご</option>
                <option>ばなな</option>
                <option>みかん</option>
            </select>      
            <input type="submit" value="送信" class="sent">
        </form>
        <div>
        <!-- <?php
        for($i = 1; $i < 4; $i++){
            echo "<option value='{Si}'>{Si}</option>";
        }
        ?> -->
        </div>
    </main>
</body>
</html>