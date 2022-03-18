<?php get_header(); ?>
    
<?php get_sidebar(); ?>

<div class="c-wrapper"></div>   <!--sp/tab時の薄グレー用-->

   <main class="l-main p-main">  <!--singlepage-->

      <!-- <div class="p-main-visual">メインビジュアル薄グレーなし -->

      <?php if( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post(); ?>  <!--投稿があればある間以下の処理-->

                <div class="p-main-visual">   <!--メインビジュアル部分 -->
                   <?php the_post_thumbnail('full',array('class' =>"p-main-visual__img__singleheight"));?>  <!--メインビジュアルの呼び出し-->
                   <div class="p-main-visual__page-title">
                     <h1 class="p-main-visual__page-title__main c-title"><?php the_title(); ?></h1>
                  </div>
                </div>

         <div class="p-main-article">   <!--見出し～footer前までのpadding用-->      
            <article class="p-subheading"> 
               <div class="p-subheading__wrapper">
                   <?php 
                     $subheading__wrapper = get_the_content();
                     $subheading__wrapper = str_replace('<h2','<h2 class="p-subheading__wrapper__h2 c-title" ',$subheading__wrapper);
                     $subheading__wrapper = str_replace('<p','<p class="c-text" ',$subheading__wrapper);
                     $subheading__wrapper = str_replace('<h3','<h3 class="p-subheading__wrapper__h3 c-title" ',$subheading__wrapper);
                     $subheading__wrapper = str_replace('<h4','<h4 class="p-subheading__wrapper__h4 c-title" ',$subheading__wrapper);
                     $subheading__wrapper = str_replace('<h5','<h2 class="p-subheading__wrapper__h5 c-title" ',$subheading__wrapper);
                     $subheading__wrapper = str_replace('<h6','<h2 class="p-subheading__wrapper__h6 c-title" ',$subheading__wrapper);
                     $subheading__wrapper = str_replace('<blockquote','<blockquote class="p-backquote" ',$subheading__wrapper);
                     echo  $subheading__wrapper;
                  ?>
               </div>
            </article>

           <!-- <section>   <!--画像＆テキストのカード 横並び-->
               <!-- <figure class="p-card--single">
                  <img src="images/single-sublarge-.jpg" alt="ハンバーガーイメージ" class="p-card--single__img">
                  <figcaption class="c-text p-card--single__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                  </figcaption>    
               </figure>       
               <figure class="p-card--single">
                  <figcaption class="c-text p-card--single__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                  </figcaption>    
                  <img src="images/single-subsmall-.jpg" alt="ハンバーガーイメージ" class="p-card--single__img">
               </figure>  
         </section>   -->
         
         <!-- <img src="images/single-sublarge-.jpg" alt="ハンバーガーイメージ" class="p-main-visual__img__singleinsert"> -->

         <!-- <div class="p-grid--img">   <!--画像のgrid-->
            <!-- <img src="images/single-subsmall-.jpg" class="p-grid--img__item">
            <img src="images/single-subsmall-.jpg" class="p-grid--img__item">
            <img src="images/single-subsmall-.jpg" class="p-grid--img__item">
            <img src="images/single-subsmall-.jpg" class="p-grid--img__item">
            <img src="images/single-subsmall-.jpg" class="p-grid--img__item">
            <img src="images/single-subsmall-.jpg" class="p-grid--img__item">
            <img src="images/single-subsmall-.jpg" class="p-grid--img__item">
            <img src="images/single-subsmall-.jpg" class="p-grid--img__item">
            <img src="images/single-subsmall-.jpg" class="p-grid--img__item">
         </div> -->
         
         <!-- <div class="p-list">      <!--リスト-->
            <!-- <div class="p-list__ol">
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
            </div>       -->

            <!-- <div class="p-list__ul">
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
            </div>   p-list__ul -->
         <!-- </div>  p-list

         <div class="p-cord">     <!--コード-->
            <!-- <p>&lt;html&gt;</p>
            <p class="u-margin--left">&lt;head&gt;</p>
            <p class="u-margin--left">&lt;/head&gt;</p>
            <p class="u-margin--left">&lt;body&gt;</p>
            <p class="u-margin--left">&lt;/body&gt;</p>
            <p>&lt;/html&gt;</p>
         </div> -->
 
         <!-- <table class="p-table">   表 -->
             <!-- <tr>
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
         </table> -->

         <!-- <button class="p-single-button c-button--search">ボタン</button>
       
         <p class="p-annotation">boldboldboldboldboldboldboldbold</p>

        </div>  p-main-articleの閉じタグ -->
      <!-- </main>    -->

      <?php endwhile; ?>
      <?php endif; ?>     <!--single.phpは記事がないケースがない＆WPで制御があるのでエラーメッセージは入力しなくてもよい-->
   
<?php get_footer(); ?>