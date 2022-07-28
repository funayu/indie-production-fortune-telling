// Swiper用の設定
if (document.getElementsByClassName('swiper').length) {
  const swiper = new Swiper('.swiper', {
    // 一番最後のスライドの次に一番最初のスライドを表示する
    loop: true,
    // 左右のナビゲーション
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    // 次のスライドに切り替わるスピード
    speed: 600,
    // スライドの自動再生
    autoplay: {
      // 一つのスライドを表示する時間
      delay: 4000,
      // ユーザー操作でスライドしたあと、自動再生を再開する
      disableOnInteraction: false,
    },
    slidesPerView: 1,
    breakpoints: {
      // width:980px以上(PCレイアウト)の場合
      960: {
        slidesPerView: 2,
      },
    },
  })
}

$(document).ready(function () {
  // ハンバーガーボタンクリック時の処理
  $('.btnHamburger').on('click', function () {
    $('.btnHamburger, .coverlayer, nav').toggleClass('is-active')
  })
  // coverlayer上のナビゲーションボタンクリック時処理
  $('nav ul li a').on('click', function () {
    $('.btnHamburger, .coverlayer, nav').removeClass('is-active')
  })

  // スムーススクロール
  // #で始まる出発地点をクリックした場合に処理を実行
  $('a[href^="#"]').click(function () {
    // 出発地点の値を取得
    const href = $(this).attr('href')
    // 到着地点を取得
    const target = $(href == '#' || href == '' ? 'html' : href)

    // 到着地点を数値で取得
    // ヘッダーと仕切り線の高さ分位置を調整する
    const headerHeight = $('header').height()
    // 一番高いボーダー仕切りの高さを使う、境界の調整のため+1
    const position = target.offset().top - headerHeight
    // スムーススクロール
    $('body,html').animate({ scrollTop: position }, 500, 'swing')
    // トップへ戻るボタンを押した時にボタンがちらつかないようにする
    return false
  })

  // トップへ戻るボタンをスクロールしたら出す
  const totop = $('#totop')
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      totop.fadeIn()
    } else {
      totop.fadeOut()
    }
  })
})
