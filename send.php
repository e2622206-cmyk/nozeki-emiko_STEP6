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

    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $company = htmlspecialchars($company, ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $age = htmlspecialchars($age, ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

    $to = "自分のメール";
    $subject = "お問い合わせ内容";

    $body = "名前: $name\n";
    $body .= "会社名: $company\n";
    $body .= "メール: $email\n";
    $body .= "年齢: $age\n";
    $body .= "内容: $message\n";
?>

<?php
$result = true;
?>



<!DOCTYPE html>
<html lang="ja">
<head>
        <meta charset="UTF-8">
        <title>お問い合わせフォーム - 送信完了画面</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>お問い合わせフォーム - 送信完了画面</h1>
        <?php if ($result): ?>
            <p>お問い合わせが送信されました。ありがとうございます！</p>
        <?php else: ?>
            <p>送信に失敗しました。</p>
        <?php endif; ?>
            <a href="contact.php">お問い合わせフォームに戻る</a>
    </body>
</html>