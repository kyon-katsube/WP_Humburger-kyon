$(function(){

    //sp版でMenuを押すとハンバーガーのナビメニューが出てくる実装

    $(".c-button--menu--sp").click(function () {//Menuボタンがクリックされたら
        $(".c-cross-button").toggleClass('active');//×ボタンを activeクラスを付与して表示      
        $(".c-wrapper").toggleClass('backactive');//空要素のクラスにpanelactiveクラスを付与
        $(".p-sidebar").toggleClass('slideactive'); //サイドバーが出現
      });
      
      console.log('test'); 

    $(".c-cross-button").click(function () {//×ボタンがクリックされたら
        $(this).removeClass('active');//ボタンの activeクラスを除去し
        $(".c-wrapper").removeClass('backactive');//ナビゲーションのpanelactiveクラスも除去
        $(".p-sidebar").removeClass('slideactive');//サイドバーが右に隠れる
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
    $('.c-button--menu--sp').on('click', function() {
    bodyFixedOn();
    });

    //モーダルの閉じるボタンをクリックしたとき
    $('.c-button--cross').on('click', function() {
    bodyFixedOff();
    });



}); //最初のfunctionのかっこ//