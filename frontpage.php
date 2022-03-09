<!DOCTYPE html>
<html lang="ja">

 <head>
 <meta charset="utf-8">
 <title>Hamburger-frontpage</title>
 <meta name="description" content="ハンバーガーショップサイトのfrontpageです">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!--CSS-->
 <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">   <!--リセットcssの設定-->
 <link rel="stylesheet" href="http://wphamburgerkyon.local/wp-content/themes/WP_Hamburger-kyon/style.css">   <!--参照するCSS-->
 <link rel="preconnect" href="https://fonts.googleapis.com">   <!--GoogleFontsの設定-->
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2? family=M+PLUS+1p:wght@400;500;700;800;900 &family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
 </head>

<body>
   <!--front-page-->
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


      <main class="l-main p-main">

         <div class="p-main-visual">   <!--メインビジュアル-->
            <img src="images/mainvisual-pc.jpg" class="p-main-visual__img">
            <h2 class="p-page-title c-title">ダミーサイト</h2>
         </div>

         <div class="p-branch-menu">   <!--TakeOut全体のくくり-->
            <article class="p-branch-menu__contents-first">
              <h2 class="p-branch-menu__contents c-title--underline">Take Out</h2>
                 <div class="p-branch-menu__contents__wrapper">
                    <div class="p-branch-menu__contents__wrapper__detail c-contents-wrapper">
                        <h3 class="p-branch-menu__contents__wrapper__subtitle c-title">Take Out1</h3>
                        <p>当店のテイクアウトで利用できる商品を掲載しています1当店のテイクアウトで利用できる商品を掲載しています1当店のテイクアウトで利用できる商品を掲載しています1当店のテイクアウトで利用できる商品を掲載しています1当店のテイクアウトで利用できる商品を掲載しています1当店のテイクアウトで利用できる商品を掲載しています1</p>
                    </div>
                    <div class="p-branch-menu__contents__wrapper__detail">
                        <h3 class="p-branch-menu__contents__wrapper__subtitle c-title">Take Out2</h3>
                        <p>当店のテイクアウトで利用できる商品を掲載しています2</p>
                    </div>  
                 </div>   <!--__wrapperの閉じタグ-->
            </article>   <!--__contents-firstの閉じタグ-->

            <article class="p-branch-menu__contents-second">
              <h2 class="p-branch-menu__contents c-title--underline">Eat In</h2>
                  <div class="p-branch-menu__contents__wrapper">
                     <div class="p-branch-menu__contents__wrapper__detail">
                        <h3 class="p-branch-menu__contents__wrapper__subtitle c-title">Take Out3</h3>
                        <p>当店のテイクアウトで利用できる商品を掲載しています3</p>
                     </div>
                     <div class="p-branch-menu__contents__wrapper__detail">
                        <h3 class="c-title">Take Out4</h3>
                        <p>当店のテイクアウトで利用できる商品を掲載しています4</p>
                     </div> 
                   </div>    
            </article>
         </div>   <!--p-branch-menuの閉じタグ-->

        <section class="p-location">
            <div class="p-location__wrapper">
               <h2 class="c-title--underline">見出しが入ります</h2>
               <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
        </section>
 
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