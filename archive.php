<!DOCTYPE html>
<html lang="ja">

 <head>
 <meta charset="utf-8">
 <title>Hamburger-archive</title>
 <meta name="description" content="ハンバーガーショップサイトのarchiveページです">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!--CSS-->
 <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">   <!--リセットcssの設定-->
 <link rel="stylesheet" href="scss/style.css">   <!--参照するCSS-->
 <link rel="preconnect" href="https://fonts.googleapis.com">   <!--GoogleFontsの設定-->
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2? family=M+PLUS+1p:wght@400;500;700;800;900 &family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
 </head>

<body>
   <!--archive-page-->
   <div class="p-grid">   <!--pcgrid用-->

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

         <div class="p-main-visual">   <!--メインビジュアル+薄グレー背景-->
            <img src="images/archive-main.jpg" alt="Menu" class="p-main-visual__img u-height--239">
            <div class="c-wrapper__main-visual"></div>   <!--薄グレー-->
            <div class="p-main-visual__page-title">
               <h1 class="p-main-visual__page-title__main c-title">Menu:</h1>
               <h2 class="p-main-visual__page-title__sub c-title">チーズバーガー</h2> <!--新登場 16px-->
            </div>
         </div>

         <div class="p-subheading-card">   <!--小見出し~カードのくくり padding用-->
            <article class="p-subheading">   <!--小見出しとテキスト-->
               <div class="p-subheading__wrapper">
                  <h2 class="c-title">小見出しが入ります</h2>
                  <p class="c-text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
               </div>
            </article>

            <section>   <!--カード-->
               <figure class="p-card">
                  <img src="images/archive-card.png" alt="チーズバーガーイメージ" class="p-card-img">
                  <div class="p-archive-card">
                     <div class="p-card__wrapper"> 
                        <h3 class="c-title p-card__wrapper__img-caption">チーズバーガー</h3>
                        <h4 class="c-title p-card__wrapper__subtitle">小見出しが入ります</h4>
                        <figcaption class="c-text p-card__wrapper__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </figcaption>    
                     </div>     <!--wrapper-->        
                     <button class="c-button p-card__button" a href="#">詳しく見る</button> 
                  </div>   <!--p-archive-card-->
               </figure>       

               <figure class="p-card">
                  <img src="images/archive-card.png" alt="ダブルチーズバーガーイメージ" class="p-card-img">
                  <div class="p-archive-card">
                     <div class="p-card__wrapper"> 
                        <h3 class="c-title p-card__wrapper__img-caption">ダブルチーズバーガー</h3> <!--c-titleクラス名変える-->
                        <h4 class="c-title p-card__wrapper__subtitle">小見出しが入ります</h4>
                        <figcaption class="c-text p-card__wrapper__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </figcaption>    
                     </div>     <!--wrapper-->        
                     <button class="c-button p-card__button" a href="#">詳しく見る</button> 
                  </div>   <!--p-archive-card-->
               </figure>       

               <figure class="p-card">
                  <img src="images/archive-card.png" alt="スペシャルチーズバーガーイメージ" class="p-card-img">
                  <div class="p-archive-card">
                     <div class="p-card__wrapper"> 
                        <h3 class="c-title p-card__wrapper__img-caption">スペシャルチーズバーガー</h3> <!--c-titleクラス名変える-->
                        <h4 class="c-title p-card__wrapper__subtitle">小見出しが入ります</h4>
                        <figcaption class="c-text p-card__wrapper__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </figcaption>    
                     </div>     <!--wrapper-->        
                     <button class="c-button p-card__button" a href="#">詳しく見る</button> 
                  </div>   <!--p-archive-card-->
               </figure>       
            </section>   
         </div>  <!--subheading-cardの閉じタグ-->

         <!--paging-->
         <div class="p-paging--sp">   <!--ページング--sp-->
            <ul>
               <li>＜＜前へ</li>
            </ul> 
            <ul>
               <li>次へ＞＞</li>
            </ul>
         </div>   
         
         <div class="p-paging__tabpc">   <!--ページングtabpc-->
            <a class="p-paging__tabpc__page-count">page 1/10</a>
            <a class="p-paging__tabpc__prev" href="#"><<</a>
            <span class="p-paging__tabpc__page-numbers">1</span>
            <a class="p-paging__tabpc__page-numbers" href="#">2</a>
            <a class="p-paging__tabpc__page-numbers" href="#">3</a>
            <a class="p-paging__tabpc__page-numbers" href="#">4</a>
            <a class="p-paging__tabpc__page-numbers" href="#">5</a>
            <a class="p-paging__tabpc__page-numbers" href="#">6</a>
            <a class="p-paging__tabpc__page-numbers" href="#">7</a>
            <a class="p-paging__tabpc__page-numbers" href="#">8</a>
            <a class="p-paging__tabpc__page-numbers" href="#">9</a>
            <a class="p-paging__tabpc__next" href="#">>></a>
         </div>    

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