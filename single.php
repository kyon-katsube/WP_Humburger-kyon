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
            <article class="p-subheading">  <!--archiveページ転用-->
               <div class="p-subheading__wrapper">
                  <h2 class="p-subheading__wrapper__h2 c-title "><?php the_content();?></h2> 
                  <p class="c-text"><?php the_content();?></p>
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

      <?php endwhile; ?>
      <?php endif; ?>     <!--single.phpは記事がないケースがない＆WPで制御があるのでエラーメッセージは入力しなくてもよい-->
   
<?php get_footer(); ?>