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
         </div>  <!--p-main-articleの閉じタグ-->

      <?php endwhile; ?>
      <?php endif; ?>     <!--single.phpは記事がないケースがない＆WPで制御があるのでエラーメッセージは入力しなくてもよい-->

   </main>

<?php get_footer(); ?>