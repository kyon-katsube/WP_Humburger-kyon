$(function(){

    //sp版でMenuを押すとハンバーガーのナビメニューが出てくる実装

    $(".c-btn--menu").click(function () {//Menuボタンがクリックされたら
        $(".c-btn--close").toggleClass('active');//×ボタンを activeクラスを付与して表示      
        $(".p-menu-list__cover").toggleClass('backactive');//空要素のクラスにpanelactiveクラスを付与
        $(".p-menu-list__wrapper").toggleClass('slideactive');
      });
      
      console.log('test'); 

    $(".c-btn--close").click(function () {//×ボタンがクリックされたら
        $(this).removeClass('active');//ボタンの activeクラスを除去し
        $(".p-menu-list__cover").removeClass('backactive');//ナビゲーションのpanelactiveクラスも除去
        $(".p-menu-list__wrapper").removeClass('slideactive');
      });


     //ナビメニューが出たら背景を固定する（SP/TAB版）
//変数の設定
var $body = $('body');

//スクロール量を保存
var scrollTop;

//スクロールを固定
function bodyFixedOn() {
  scrollTop = $(window).scrollTop();
  
  $body.css({
    position: 'fixed',
    top: -scrollTop
  });
}

//スクロールの固定を解除
function bodyFixedOff() {
  $body.css({
    position: '',
    top: ''
  });
   
  $(window).scrollTop(scrollTop);
}

//モーダルのトリガーをクリックしたとき
$('.c-btn--menu').on('click', function() {
  bodyFixedOn();
});

//モーダルの閉じるボタンをクリックしたとき
$('.c-btn--close').on('click', function() {
  bodyFixedOff();
});



}); //最初のfunctionのかっこ//