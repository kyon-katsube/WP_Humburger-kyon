<?php get_header(); ?>
    
<?php get_sidebar(); ?>

    
   <div class="c-wrapper"></div>   <!--sp/tab時の薄グレー用-->

   <main class="l-main p-main">

         <div class="p-main-visual">   <!--メインビジュアル+薄グレー背景-->
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/archive-main.jpg" alt="Menu" class="p-main-visual__img u-height--239">
            <div class="c-wrapper__main-visual"></div>   <!--薄グレー-->
            <div class="p-main-visual__page-title">
               <h1 class="p-main-visual__page-title__main c-title">ページがありません</h1>
               <h2 class="p-main-visual__page-title__sub c-title">お探しのページが見つかりません</h2>
            </div>
         </div>

   </main>    

     
      <?php get_footer(); ?>