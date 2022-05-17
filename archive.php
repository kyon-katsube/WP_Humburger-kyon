<?php get_header(); ?>
    
<?php get_sidebar(); ?>

    
   <div class="c-wrapper"></div>   <!--sp/tab時の薄グレー用-->

   <main class="l-main p-main">

         <div class="p-main-visual">   <!--メインビジュアル+薄グレー背景-->
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/archive-main.jpg" alt="Menu" class="p-main-visual__img u-height--239">
            <div class="c-wrapper__main-visual"></div>   <!--薄グレー-->
            <div class="p-main-visual__page-title">
               <h1 class="p-main-visual__page-title__main c-title">Menu:</h1>
               <h2 class="p-main-visual__page-title__sub c-title"><?php wp_title(''); ?></h2> <!--このページのタイトルにあたるもの（ここではカテゴリ名）を呼び出す 16px-->
            </div>
         </div>

         <div class="p-subheading-card">   <!--小見出し~カードのくくり padding用-->
            <article class="p-subheading">   <!--小見出しとテキスト-->
               <div class="p-subheading__wrapper">
                  <h2 class="c-title p-subheading__wrapper__h2"><?php single_cat_title();?></h2>
                  <div class="c-text">                 
                     <?php if (is_category()) : ?> 
                     <?php echo category_description(); ?>
                     <?php endif; ?>
                  </div>
               </div>
            </article>

            <?php
            if(have_posts()):
               while(have_posts()):the_post();
            ?>
            <section>   <!--カード-->
               <figure class="p-card">
                  <?php the_post_thumbnail('card-thumb',array('class' =>"p-card-img")); ?>

                  <div class="p-archive-card">
                     <div class="p-card__wrapper"> 
                        <h2 class="c-title p-card__wrapper__img-caption"><?php the_title();?></h3>                 
                        <figcaption>
                            <?php 
                                 $card_wrapper_text = get_the_content();
                                 $card_wrapper_text = str_replace('<h2','<h2 class="c-text p-card__wrapper__text" ',$card_wrapper_text);
                                 $card_wrapper_text = str_replace('<p','<p class="c-title p-card__wrapper__subtitle" ',$card_wrapper_text);
                                 echo  $card_wrapper_text;
                            ?>             
                        </figcaption>
                     </div>     <!--wrapper-->        
                   
                     <form action="<?php the_permalink(); ?>"> 
                            <button class="c-button p-card__button" type="submit">詳しく見る</button>

                  </div>   <!--p-archive-card-->
               </figure>     
            </section> 

            <?php wp_link_pages(); ?> <!--テーマチェックが出たのでとりあえず記入-->
            
            <?php endwhile;
               endif; ?>   
         
         </div>  <!--subheading-cardの閉じタグ-->

      <!--paging-->

         <!--ページング--tabpc版 プラグインで実装-->
         <?php wp_pagenavi(); ?>  <!--functionsに入れた内容で実行-->

         <!--ページング--sp版 phpのみで実装-->
         <div class="p-paging--sp">   
            <?php 
               $link = get_previous_posts_link('&lt;&lt; 前へ');
               if($link) {
               $link = str_replace('<a', '<a class="p-paging--sp__back"',$link);
               echo $link ;
               }
            ?>
            
            <?php 
               $link = get_next_posts_link('次へ &gt;&gt;');
               if($link) {
               $link = str_replace('<a', '<a class="p-paging--sp__next"',$link);
               echo $link ;
               }
            ?>
         </div>   

      </main>    

     
      <?php get_footer(); ?>