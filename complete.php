<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");

// データ格納
$to = $_POST["email"];//メール送信先の設定
$subject = "【Fortune Adviser】鑑定のお申し込みありがとうございます。";//メールの件名
$header = "From: info@tdp.com";//送信元アドレス
$header .= "\n";//改行
$header .= "Bcc: tiro349@moimoi.re";//確認メール管理者受信用
//$header .= "Bcc: tdp@sairafactory.com";//確認メール管理者受信用
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
 mb_send_mail($to, $subject, $message, $header);

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

<body class="contact contact_complete">
  <header>
    <h1>
      <a href="index.html"><img src="images/logo/logo_white.svg" alt="Fortune Adviser" /></a>
    </h1>
    <nav>
      <ul>
        <li><a href="index.html#message">Message</a></li>
        <li><a href="index.html#about_service">サービス概要</a></li>
        <li><a href="index.html#introduce">所属占い師の紹介</a></li>
        <li><a href="index.html#price">鑑定料金</a></li>
        <li><a href="index.html#how_to_use">サービスご利用方法</a></li>
        <li class="contact"><a href="#">鑑定のお申込み</a></li>
      </ul>
    </nav>
    <!-- ハンバーガーボタン押下時に表示されるレイヤー -->
    <div class="coverlayer"></div>
    <!-- .coverlayerの終了タグ -->
    <!--ハンバーガーボタン-->
    <div class="btnHamburger">
      <span class="line line_01"></span>
      <span class="line line_02"></span>
      <span class="line line_03"></span>
    </div>
    <!-- .btnHamburgerの終了タグ  -->
  </header>
  <div id="contact_main">
    <picture>
      <source media="(max-width: 599px)"
        srcset="images/contact/top_main_sp@856.jpg 2x, images/contact/top_main_sp@1284.jpg 3x" />
      <source media="(max-width: 959px)" srcset="images/contact/top_main@1920.jpg 2x" />
      <img src="images/contact/top_main@1920.jpg" alt="大きな月と木" />
    </picture>
    <h2>
      <span>Contact</span>
      鑑定のお申し込み
    </h2>
  </div>
  <!-- #contact_mainの終了タグ -->
  <main>
    <div id="progress">
      <div class="inner">
        <div class="step">
          <span>01</span>
          内容入力
        </div>
        <div class="step">
          <span>02</span>
          内容確認
        </div>
        <div class="step">
          <span>03</span>
          送信完了
        </div>
      </div>
    </div>
    <!-- #progressの終了タグ -->
    <div class="inner">
      <section>
        <h3>鑑定申し込みが完了しました</h3>
        <p>後ほどメールにて日程調整用のURLをご連絡させていただきます。<br>お手数ですが、そちらから鑑定の日程調整をお願いいたします。</p>
        <p class="small">※24時間以内にメールが届かない場合は、お手数ですがcontact@fortune-adviser.comまでご連絡ください。</p>
        <div class="button"><a href="index.html">TOPへ戻る</a></div>
      </section>
    </div>
  </main>
  <footer>
    <div class="inner">
      <div>
        <a href="index.html"><img src="images/logo/logo_white.svg" alt="Fortune Adviser" /></a>
      </div>
      <p>contact@fortune-adviser.com</p>
      <ul>
        <li><a href="index.html#message">Message</a></li>
        <li><a href="index.html#about_service">サービス概要</a></li>
        <li><a href="index.html#introduce">所属占い師の紹介</a></li>
        <li><a href="index.html#price">鑑定料金</a></li>
        <li><a href="index.html#how_to_use">サービスご利用方法</a></li>
        <li class="contact">
          <a href="contact.html">鑑定のお申込み<span>→</span></a>
        </li>
      </ul>
      <small>&copy; 2022 Fortune Adviser. All Rights Reserved.</small>
    </div>
  </footer>
</body>

</html>