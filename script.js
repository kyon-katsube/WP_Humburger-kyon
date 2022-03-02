$(function(){

    //sp版でMenuを押すとハンバーガーのナビメニューが出てくる実装

    $(".c-button--menu").click(function () {   //Menuボタンがクリックされたら
        $(".c-button--cross").toggleClass('active');   //×ボタンを activeクラスを付与して表示      
        $(".c-wrapper").toggleClass('backactive');   //空要素のクラスにpanelactiveクラスを付与
        $(".l-sidebar").toggleClass('slideactive');  //サイドバーが出現
      });
      
      console.log('test'); 

    $(".c-button--cross").click(function () {   //×ボタンがクリックされたら
        $(this).removeClass('active');   //ボタンの activeクラスを除去し
        $(".c-wrapper").toggleClass('backactive');   //ナビゲーションのpanelactiveクラスも除去
        $(".l-sidebar").toggleClass('slideactive');   //サイドバーが右に隠れる
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

    //サイドバーが出ているとき背景固定
    $('.c-button--menu').on('click', function() {
    bodyFixedOn();
    });

    //サイドバーが消えたら背景固定戻す
    $('.c-button--cross').on('click', function() {
    bodyFixedOff();
    });



}); //最初のfunctionのかっこ//