<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");

// データ格納
$to = $_POST["email"];//メール送信先の設定
$subject = "【Fortune Adviser】鑑定のお申し込みありがとうございます。";//メールの件名
$header = "From: gyusopenu@sofia.re";//送信元アドレス
$header .= "\n";//改行
$header .= "Bcc: tiro349@moimoi.re";//確認メール管理者受信用
$message = "この度はFortune Adviserの占い鑑定をお申し込みいただき誠にありがとうございます。" . "\n" . "お客様からのお申し込みを下記内容にて受け付けました。" . "\n" .
"\n" .
"お名前：" . $_POST["name"] . "\n" .
"メールアドレス：" . $_POST["email"] . "\n" .
"電話番号：" . $_POST["tel"] . "\n" .
"相談したい内容（複数選択可能）：" . $_POST["consultation_content"] . "\n" .
"◆自分の情報" . "\n" .
"生年月日：" . $_POST["birth_year"] . "年" . $_POST["birth_month"] . "月" .$_POST["birth_date"] . "日" . "\n" .
"出生時刻：" . $_POST["birth_hour"] . "時" . $_POST["birth_min"] . "分" . "\n" .
"出生地：" . $_POST["birth_place"] . "\n" .
"◆相手の情報（占いたい相手がいる場合）" . "\n" .
"生年月日：" . $_POST["birth_year2"] . "年" . $_POST["birth_month2"] . "月" .$_POST["birth_date2"] . "日" . "\n" .
"出生時刻：" . $_POST["birth_hour2"] . "時" . $_POST["birth_min2"] . "分" . "\n" .
"出生地：" . $_POST["birth_place2"] . "\n" .
"\n" .
"後ほど別メールにて日程調整用のURLをご連絡させていただきます。"."\n" .
"お手数ですが、そちらから鑑定の日程調整をお願いいたします。"."\n" .
"\n" .
"※24時間以内にメールが届かない場合は、お手数ですがcontact@fortune-adviser.comまでご連絡ください。";

// メール送信
// TODO:送信テストするときはコメントアウトを外す
// mb_send_mail($to, $subject, $message, $header);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="keywords" content="占い,鑑定,オンライン,リモート,悩み,相談,LINE,Zoom,テレビ通話,テレビ電話" />
  <meta name="description" content="オンライン占いサービス「Fortune Adviser」の鑑定お申し込み内容確認ページです。" />
  <title>Fortune Adviser | 鑑定のお申込み内容確認</title>
  <link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <div class="inner">
    <header>
      <h1>ロゴ</h1>
      <nav>
        <ul>
          <li><a href="contact.html">Message</a></li>
          <li><a href="contact.html">サービス概要</a></li>
          <li><a href="contact.html">所属占い師の紹介</a></li>
          <li><a href="contact.html">鑑定料金</a></li>
          <li><a href="contact.html">サービスご利用方法</a></li>
          <li><a href="contact.html">鑑定のお申込み→</a></li>
        </ul>
      </nav>
      <div>（ハンバーガーメニュー）</div>
    </header>
  </div>
  <div id="contact_main">
    <h2>
      <span>Contact</span>
      鑑定のお申し込み
    </h2>
  </div>
  <!-- #contact_mainの終了タグ -->
  <main>
    <div class="inner">
      <div id="progress">
        <div>
          <span>01</span>
          内容入力
        </div>
        <div>
          <span>02</span>
          内容客員
        </div>
        <div>
          <span>03</span>
          送信完了
        </div>
      </div>
      <!-- #progressの終了タグ -->
      <section>
        <h3>鑑定申し込みが完了しました</h3>
        <p>後ほどメールにて日程調整用のURLをご連絡させていただきます。</p>
        <p>お手数ですが、そちらから鑑定の日程調整をお願いいたします。</p>
        <p>※24時間以内にメールが届かない場合は、お手数ですがcontact@fortune-adviser.comまでご連絡ください。</p>
      </section>
      <input type="button" value="TOPへ戻る" onClick="index.html">
    </div>
  </main>
  <footer>
    <div class="inner">
      <div>ロゴ</div>
      <p>contact@fortune-adviser.com</p>
      <ul>
        <li><a href="#">Message</a></li>
        <li><a href="#">サービス概要</a></li>
        <li><a href="#">所属占い師の紹介</a></li>
        <li><a href="#">鑑定料金</a></li>
        <li><a href="#">サービスご利用方法</a></li>
        <li><a href="#">鑑定のお申込み→</a></li>
      </ul>
      <small>&copy; 2022 Fortune Adviser. All Rights Reserved.</small>
    </div>
  </footer>
</body>

</html>