<?php get_header(); ?>
    
<?php get_sidebar(); ?>

    
   <div class="c-wrapper"></div>   <!--sp/tab時の薄グレー用-->

   <main class="l-main p-main">

         <div class="p-main-visual">   <!--メインビジュアル+薄グレー背景-->
            <img src="<?php echo get_template_directory_uri(); ?>/images/archive-main.jpg" alt="Menu" class="p-main-visual__img u-height--239">
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
                  <div class="p-card-img">
                  <?php the_post_thumbnail('full',array('class' =>"p-card-img")); ?>
                  </div>
                  <div class="p-archive-card">
                     <div class="p-card__wrapper"> 
                        <h3 class="c-title p-card__wrapper__img-caption"><?php the_title();?></h3>
                        <!-- <h4 class="c-title p-card__wrapper__subtitle"></h4> -->
                        <figcaption class="c-text p-card__wrapper__text"><?php the_content(); ?>
                        </figcaption>
                     </div>     <!--wrapper-->        
                   
                     <button class="c-button p-card__button" a href="<?php the_permalink(); ?>">詳しく見る</button> 
                  </div>   <!--p-archive-card-->
               </figure>     
            </section> 
            <?php endwhile;
               endif; ?>   
         
         </div>  <!--subheading-cardの閉じタグ-->

         <!--paging-->
         <div class="p-paging--sp">   <!--ページング--sp-->
            <?php 
               $link = get_previous_posts_link('&lt;&lt; 前へ');
               if($link) {
               $link = str_replace('<a', '<a class="p-paging--sp__back"',$link);
               echo $link ;
               }
            ?>
            
            <?php 
               $link = get_next_posts_link('次へ &lt;&lt;');
               if($link) {
               $link = str_replace('<a', '<a class="p-paging--sp__next"',$link);
               echo $link ;
               }
            ?>
            <!-- <ul>
               <li a class="p-paging--sp__back" href="#">＜＜前へ</li>
            </ul> 
            <ul>
               <li a class="p-paging--sp__next" href="#">次へ＞＞</li>
            </ul> -->
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

     
      <?php get_footer(); ?>