// Swiper用の設定
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
