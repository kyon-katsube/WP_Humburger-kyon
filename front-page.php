<?php get_header(); ?>
    
<?php get_sidebar(); ?>

<div class="c-wrapper"></div>   <!--sp/tab時の薄グレー用-->
      <main class="l-main p-main">

         <div class="p-main-visual">   <!--メインビジュアル-->
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/mainvisual-pc.jpg" class="p-main-visual__img">
            <h2 class="p-page-title c-title">手作りパティとこだわりコーヒーのお店</h2>
         </div>

         <div class="p-branch-menu">   <!--TakeOut全体のくくり-->
            <article class="p-branch-menu__contents-first">
              <h2 class="p-branch-menu__contents c-title--underline">Take Out</h2>
                 <div class="p-branch-menu__contents__wrapper">
                    <div class="p-branch-menu__contents__wrapper__detail c-contents-wrapper">
                        <h3 class="p-branch-menu__contents__wrapper__subtitle c-title">できたてをそのままご家庭で</h3>
                        <p>お電話をいただいてからバンズやパティをじっくり焼き上げます。テイクアウト希望時間の30分前までにご注文ください。</p>
                    </div>
                    <div class="p-branch-menu__contents__wrapper__detail">
                        <h3 class="p-branch-menu__contents__wrapper__subtitle c-title">サイドメニューやドリンクにもこだわっています</h3>
                        <p>ポテトは北海道産じゃがいもを店内で１からお作りしています。また、コーヒーは南米各地から取り寄せた豆を店内で豆から引いており、コーヒーだけお買い求めされるお客様もおられるほど人気です。自慢のハンバーガーとぜひセットでお召し上がりください。</p>
                    </div>  
                 </div>   <!--__wrapperの閉じタグ-->
            </article>   <!--__contents-firstの閉じタグ-->

            <article class="p-branch-menu__contents-second">
              <h2 class="p-branch-menu__contents c-title--underline">Eat In</h2>
                  <div class="p-branch-menu__contents__wrapper">
                     <div class="p-branch-menu__contents__wrapper__detail">
                        <h3 class="p-branch-menu__contents__wrapper__subtitle c-title">出来立てアツアツを店内で</h3>
                        <p>出来立てはおいしさが断然違います！イートイン専用の日替わりバーガーもご用意しています。</p>
                     </div>
                     <div class="p-branch-menu__contents__wrapper__detail">
                        <h3 class="c-title">店内は換気を十分おこなっています</h3>
                        <p>客席はスペースを取り換気をおこなっていますので、安心しておくつろぎいただけます。</p>
                     </div> 
                   </div>    
            </article>
         </div>   <!--p-branch-menuの閉じタグ-->

        <section class="p-location">
            <div class="p-location__wrapper">
               <h2 class="c-title--underline">当店へのアクセス</h2>
               <p>◯◯線◯◯駅南口から徒歩３分。赤い屋根が目印です。</p>
               <p>駐車場は３台完備しております。</p>
               <p>TEL/000-0000-0000</p>
               <p>・・県・・市・・町1−3−5　◯◯ビル1階</p>
               <p>営業時間/7:00~20:00(最終受付19:30)</p>
               <p>休業日/毎週水曜日・お盆・年末年始</p>
               
        </section>
 
      </main>    

      <?php get_footer(); ?>