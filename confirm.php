<?php
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        header("Location: contact.php");
        exit;
    }

    $name = $_POST['name'];
    $company = $_POST['companyName'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $message = $_POST['message'];

    if (
        trim($name) === "" ||
        trim($company) === "" ||
        trim($email) === "" ||
        trim($age) === "" ||
        trim($message) === ""
    ) {
        echo "未入力の項目があります";
        exit;
    }

    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $company = htmlspecialchars($company, ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $age = htmlspecialchars($age, ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    ?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>お問い合わせフォーム - 確認画面</title>
    </head>
<body>
<div class="wrapper">
    <header>
        <h2>お問い合わせフォーム - 確認画面</h2>
    </header>

    <div class="container">
        <aside>
            <ul>
                <li><a href="#">トップページ</a></li>
                <li><a href="#">人気投稿</a></li>
                <li><a href="#">エンジニアおすすめ商品</a></li>
                <li><a href="#">エンジニアおすすめ記事</a></li>
                <li><a href="#">投稿ページ</a></li>
            </ul>
        </aside>

        <main>
            <form action="send.php" method="POST">
                <table border="3">
                    <tr>
                        <th>お名前</th>
                        <td><?php echo $name; ?></td>
                    </tr>
                    <tr>
                        <th>会社名</th>
                        <td><?php echo $company; ?></td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <th>年齢</th>
                        <td><?php echo $age; ?></td>
                    </tr>
                    <tr>
                        <th>お問い合わせ内容</th>
                        <td><?php echo $message; ?></td>
                    </tr>
                </table>

                <div class="button-area">
                    <input type="hidden" name="name" value="<?php echo $name; ?>">
                    <input type="hidden" name="companyName" value="<?php echo $company; ?>">
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                    <input type="hidden" name="age" value="<?php echo $age; ?>">
                    <input type="hidden" name="message" value="<?php echo $message; ?>">

                    <input type="submit" value="送信">
                    <button type="button" onclick="history.back()">戻る</button>
                </div>
            </form>
        </main>
    </div>

    <footer>
        <p>横のボタンを押すとfooterの背景色が変わります。</p>
        <button onclick="changeFooterColor()">押してみてね！</button>
    </footer>
</div>
</body>
</html>