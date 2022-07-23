<?php
$name = isset($_POST["name"])? $_POST["name"] : "";
$email = isset($_POST["email"])? $_POST["email"] : "";
$email_confirmation = isset($_POST["email_confirmation"])? $_POST["email_confirmation"] : "";
$tel = isset($_POST["tel"])? $_POST["tel"] : "";
$consultation_content = isset($_POST["consultation_content"])&&is_array($_POST["consultation_content"])? implode("、", $_POST["consultation_content"]): "";
$birth_year = isset($_POST["birth_year"])? $_POST["birth_year"] : "";
$birth_month = isset($_POST["birth_month"])? $_POST["birth_month"] : "";
$birth_date = isset($_POST["birth_date"])? $_POST["birth_date"] : "";
$birth_hour = isset($_POST["birth_hour"])? $_POST["birth_hour"] : "";
$birth_min = isset($_POST["birth_min"])? $_POST["birth_min"] : "";
$birth_place = isset($_POST["birth_place"])? $_POST["birth_place"] : "";
$birth_year2 = isset($_POST["birth_yea2"])? $_POST["birth_year2"] : "";
$birth_month2 = isset($_POST["birth_month2"])? $_POST["birth_month2"] : "";
$birth_date2 = isset($_POST["birth_date2"])? $_POST["birth_date2"] : "";
$birth_hour2 = isset($_POST["birth_hour2"])? $_POST["birth_hour2"] : "";
$birth_min2 = isset($_POST["birth_min2"])? $_POST["birth_min2"] : "";
$birth_place2 = isset($_POST["birth_place2"])? $_POST["birth_place2"] : "";
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
      <form action="complete.php" method="post" id="contact">
        <!-- input:hiddenの内容 -->
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email,ENT_QUOTES,"UTF-8"); ?>">
        <input type="hidden" name="email_confirmation"
          value="<?php echo htmlspecialchars($email_confirmation,ENT_QUOTES,"UTF-8"); ?>">
        <input type="hidden" name="tel" value="<?php echo htmlspecialchars($tel,ENT_QUOTES,"UTF-8"); ?>">
        <input type="hidden" name="consultation_content"
          value="<?php echo htmlspecialchars($consultation_content,ENT_QUOTES,"UTF-8"); ?>">
        <input type="hidden" name="birth_year" value="<?php echo htmlspecialchars($birth_year,ENT_QUOTES,"UTF-8"); ?>">
        <input type="hidden" name="birth_month"
          value="<?php echo htmlspecialchars($birth_month,ENT_QUOTES,"UTF-8"); ?>">
        <input type="hidden" name="birth_date" value="<?php echo htmlspecialchars($birth_date,ENT_QUOTES,"UTF-8"); ?>">
        <input type="hidden" name="birth_hour" value="<?php echo htmlspecialchars($birth_hour,ENT_QUOTES,"UTF-8"); ?>">
        <input type="hidden" name="birth_min" value="<?php echo htmlspecialchars($birth_min,ENT_QUOTES,"UTF-8"); ?>">
        <input type="hidden" name="birth_place"
          value="<?php echo htmlspecialchars($birth_place,ENT_QUOTES,"UTF-8"); ?>">
        <input type="hidden" name="birth_year2"
          value="<?php echo htmlspecialchars($birth_year2,ENT_QUOTES,"UTF-8"); ?>">
        <input type="hidden" name="birth_month2"
          value="<?php echo htmlspecialchars($birth_month2,ENT_QUOTES,"UTF-8"); ?>">
        <input type="hidden" name="birth_date2"
          value="<?php echo htmlspecialchars($birth_date2,ENT_QUOTES,"UTF-8"); ?>">
        <input type="hidden" name="birth_hour2"
          value="<?php echo htmlspecialchars($birth_hour2,ENT_QUOTES,"UTF-8"); ?>">
        <input type="hidden" name="birth_min2" value="<?php echo htmlspecialchars($birth_min2,ENT_QUOTES,"UTF-8"); ?>">
        <input type="hidden" name="birth_place2"
          value="<?php echo htmlspecialchars($birth_place2,ENT_QUOTES,"UTF-8"); ?>">
        <!-- input:hiddenの内容ここまで -->
        <section>
          <h3>入力内容をご確認ください。</h3>
          <dl>
            <dt>お名前<span>※</span></dt>
            <dd><?php echo htmlspecialchars($name,ENT_QUOTES,"UTF-8"); ?></dd>
            <dt>メールアドレス※</dt>
            <dd><?php echo htmlspecialchars($email,ENT_QUOTES,"UTF-8"); ?></dd>
            <dt>電話番号<span>※</span></dt>
            <dd><?php echo htmlspecialchars($tel,ENT_QUOTES,"UTF-8"); ?></dd>
            <dt>相談したい内容（複数選択可能）</dt>
            <dd><?php echo htmlspecialchars($consultation_content,ENT_QUOTES,"UTF-8"); ?></dd>
          </dl>
          <section>
            <h4>◆自分の情報</h4>
            <dl>
              <dt>生年月日</dt>
              <dd>
                <?php echo htmlspecialchars($birth_year,ENT_QUOTES,"UTF-8"); ?>年<?php echo htmlspecialchars($birth_month,ENT_QUOTES,"UTF-8"); ?>月<?php echo htmlspecialchars($birth_date,ENT_QUOTES,"UTF-8"); ?>日
              </dd>
              <dt>出生時刻</dt>
              <dd>
                <?php echo htmlspecialchars($birth_hour,ENT_QUOTES,"UTF-8"); ?>時<?php echo htmlspecialchars($birth_min,ENT_QUOTES,"UTF-8"); ?>分
              </dd>
              <dt>出生地</dt>
              <dd><?php echo htmlspecialchars($birth_place,ENT_QUOTES,"UTF-8"); ?></dd>
            </dl>
          </section>
          <section>
            <h4>◆相手の情報（占いたい相手がいる場合</h4>
            <dl>
              <dt>生年月日</dt>
              <dd>
                <?php echo htmlspecialchars($birth_year2,ENT_QUOTES,"UTF-8"); ?>年<?php echo htmlspecialchars($birth_month2,ENT_QUOTES,"UTF-8"); ?>月<?php echo htmlspecialchars($birth_date2,ENT_QUOTES,"UTF-8"); ?>日
              </dd>
              <dt>出生時刻</dt>
              <dd>
                <?php echo htmlspecialchars($birth_hour2,ENT_QUOTES,"UTF-8"); ?>時<?php echo htmlspecialchars($birth_min2,ENT_QUOTES,"UTF-8"); ?>分
              </dd>
              <dt>出生地</dt>
              <dd><?php echo htmlspecialchars($birth_place2,ENT_QUOTES,"UTF-8"); ?></dd>
            </dl>
          </section>
        </section>
        <input type="submit" value="入力した内容を送信する" />
        <input type="button" value="修正する" onClick="history.back()">
      </form>
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