<!DOCTYPE html>
<html lang="ja">

 <head>
 <meta charset="utf-8">
 <title>Hamburger-single</title>
 <meta name="description" content="ハンバーガーショップサイトのsingleページです">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!--CSS-->
 <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">   <!--リセットcssの設定-->
 <link rel="stylesheet" href="scss/style.css">   <!--参照するCSS-->
 <link rel="preconnect" href="https://fonts.googleapis.com">   <!--GoogleFontsの設定-->
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2? family=M+PLUS+1p:wght@400;500;700;800;900 &family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
 </head>

<body>
   <!--single-page-->
   <div class="p-grid"> <!--pcgrid用-->

 
      <header class="l-header p-header">
         <div class="p-header__menu">   <!--sp/tab用メニューボタン-->
            <button class="c-button--menu">Menu</button>
         </div>
         <p class="p-header__title c-title u-color--gray">Hamburger</p>
         <form action="#" method="get" class="p-search-form">
            <label for="search"></label>
            <input type="search" id="search" class="p-search-form__box c-input-box">
            <input type="submit" value="検索" class="p-search-form__button c-button--search">
         </form>
      </header>   
    
      <div class="c-wrapper"></div>   <!--sp/tab時の薄グレー用-->

      <aside class="l-sidebar p-sidebar">   <!--Menuをタップして出てくるメニュー表示-->
          <button class="c-button--cross"><span></span><span></span></button>   <!--×ボタン用-->
          <h2 class="p-sidebar-title c-title u-color--gray">Menu</h2>   <!--PC時サイドバー上部に表示させる用-->
          <nav class="p-sidebar-list ">
              <ul class="p-sidebar-list__contents">
                  <h3 a href="#" class="c-title u-color--gray">バーガー</h3>
                  <li a href="#">ハンバーガー</li>
                  <li a href="#">チーズバーガー</li>
                  <li a href="#">テリヤキバーガー</li>
                  <li a href="#">アボカドバーガー</li>
                  <li a href="#">フィッシュバーガー</li>
                  <li a href="#">ベーコンバーガー</li>
                  <li a href="#">チキンバーガー</li>
               </ul>
               <ul class="p-sidebar-list__contents">
                  <h3 a href="#" class="c-title u-color--gray">サイド</h3>
                  <li a href="#">ポテト</li>
                  <li a href="#">サラダ</li>
                  <li a href="#">ナゲット</li>
                  <li a href="#">コーン</li>
               </ul>
               <ul class="p-sidebar-list__contents">
                  <h3 a href="#" class="c-title u-color--gray">ドリンク</h3>
                  <li a href="#">コーラ</li>
                  <li a href="#">ファンタ</li>
                  <li a href="#">オレンジ</li>
                  <li a href="#">アップル</li>
                  <li a href="#">紅茶（ice/Hot)</li>
                  <li a href="#">コーヒー(Ice/Hot)</li>
               </ul>
         </nav>
      </aside>

      <main class="l-main p-main">

         <div class="p-main-visual">   <!--メインビジュアル薄グレーなし-->
            <img src="images/single-main-pc.jpg" alt="h1チーズバーガー" class="p-main-visual__img__singleheight">
            <div class="p-main-visual__page-title">
               <h1 class="p-main-visual__page-title__main c-title">h1 チーズバーガー</h1>
            </div>
         </div>

         <div class="p-main-article">   <!--見出し～footer前までのpadding用-->      
            <article class="p-subheading">  <!--archiveページ転用-->
               <div class="p-subheading__wrapper">
                  <h2 class="p-subheading__wrapper__h2 c-title ">見出しh2</h2> 
                  <p class="c-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                  <h3 class="p-subheading__wrapper__h3 c-title ">見出しh3</h3> 
                  <h4 class="p-subheading__wrapper__h4 c-title ">見出しh4</h4> 
                  <h5 class="p-subheading__wrapper__h5 c-title ">見出しh5</h5> 
                  <h6 class="p-subheading__wrapper__h6 c-title ">見出しh6</h6>
                  <blockquote class="p-backquote" cite="#">
                     <p>Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
                     <p>出典元 : <cite><a href="#">〇〇〇〇〇〇</a></cite></P>
                  </blockquote>  
               </div>
            </article>

         <div class="p-main-visual">   <!--single/pageの中段の画像-->
            <img src="images/single-sublarge-.jpg" alt="ハンバーガーイメージ" class="p-main-visual__img__singlesubheight">

         <section>   <!--画像＆テキストのカード 横並び-->
            <figure class="p-card--single">
               <img src="images/single-sublarge-.jpg" alt="ハンバーガーイメージ" class="p-card--single__img">
               <figcaption class="c-text p-card--single__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
               </figcaption>    
            </figure>       
            <figure class="p-card--single">
               <figcaption class="c-text p-card--single__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
               </figcaption>    
               <img src="images/single-subsmall-.jpg" alt="ハンバーガーイメージ" class="p-card--single__img">
            </figure>  
         </section>  
         
         <img src="images/single-sublarge-.jpg" alt="ハンバーガーイメージ" class="p-main-visual__img__singleinsert">

         <div class="p-grid--img">   <!--画像のgrid-->
            <img src="images/single-subsmall-.jpg" class="p-grid--img__item">
            <img src="images/single-subsmall-.jpg" class="p-grid--img__item">
            <img src="images/single-subsmall-.jpg" class="p-grid--img__item">
            <img src="images/single-subsmall-.jpg" class="p-grid--img__item">
            <img src="images/single-subsmall-.jpg" class="p-grid--img__item">
            <img src="images/single-subsmall-.jpg" class="p-grid--img__item">
            <img src="images/single-subsmall-.jpg" class="p-grid--img__item">
            <img src="images/single-subsmall-.jpg" class="p-grid--img__item">
            <img src="images/single-subsmall-.jpg" class="p-grid--img__item">
         </div>
         
         <div class="p-list">      <!--リスト-->
            <div class="p-list__ol">
              <div class="p-list__ol__pdg">
                <ol>
                  <li>リストリストリスト</li>
                  <li>リストリストリスト</li>
                </ol>
              </div>        
              <div class="p-list__ol__pdg u-margin--left">
                <ol>
                  <li>リスト2リスト2リスト2</li>
                  <li>リスト2リスト2リスト2</li>
                </ol>
              </div>  
              <div class="p-list__ol__pdg">
                 <ol>
                  <li>リストリストリスト</li>
                  <li>リストリストリスト</li>
                </ol>
              </div>  
            </div>      

            <div class="p-list__ul">
              <div class="p-list__ul__pdg">
                 <ul>
                  <li>リストリストリスト</li>
                  <li>リストリストリスト</li>
                 </ul>
              </div>
              <div class="p-list__ul__pdg  u-margin--left">
                 <ul>
                  <li>リスト2リスト2リスト2</li>
                  <li>リスト2リスト2リスト2</li>
               </ul>
              </div>
              <div class="p-list__ul__pdg">
                 <ul>
                  <li>リストリストリスト</li>
                  <li>リストリストリスト</li>
               </ul>
              </div>
            </div>   <!--p-list__ul-->
         </div>  <!--p-list-->

         <div class="p-cord">     <!--コード-->
            <p>&lt;html&gt;</p>
            <p class="u-margin--left">&lt;head&gt;</p>
            <p class="u-margin--left">&lt;/head&gt;</p>
            <p class="u-margin--left">&lt;body&gt;</p>
            <p class="u-margin--left">&lt;/body&gt;</p>
            <p>&lt;/html&gt;</p>
         </div>
 
         <table class="p-table">   <!--表-->
             <tr>
                <td>テーブル</td>
                <td>テーブル</td>
             </tr>
             <tr>
               <td>テーブル</td>
               <td>テーブル</td>
            </tr>
            <tr>
               <td>テーブル</td>
               <td>テーブル</td>
            </tr>
            <tr>
              <td>テーブル</td>
              <td>テーブル</td>
           </tr>
         </table>

         <button class="p-single-button c-button--search">ボタン</button>
       
         <p class="p-annotation">boldboldboldboldboldboldboldbold</p>

        </div>  <!--p-main-articleの閉じタグ-->
      </main>    
  
   
      <footer class="l-footer">
         <div class="p-footer">
            <p class="c-title" a href="#">ショップ情報 ｜ ヒストリー</p>
            <p class="c-copyright">copyright : RaiseTech</p>
         </div>
      </footer>

   </div> <!--pc版grid用のdivタグ-->
  
   <!--jQuery-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>            
   <script src="script.js"></script>          

</body>
</html>