<aside class="l-sidebar p-sidebar">   <!--Menuをタップして出てくるメニュー表示-->
         <button class="c-button--cross"><span></span><span></span></button>   <!--×ボタン用-->
         <h2 class="p-sidebar-title c-title u-color--gray">Menu</h2>   <!--PC時サイドバー上部に表示させる用-->
                  

         <!--navを表示する--> 
         <?php
             wp_nav_menu(array(
                'menu'=>'sidebar',  //管理画面で作成したメニュー名
                'container' => 'nav',   //一番外枠のdivタグをnavタグに divタグ全部を消すときはfalse
                'container_class' => 'p-sidebar-list' , //navのclass名
             
                'menu_id' =>  false,
                'menu_class' => 'p-sidebar-list__contents', //ulタグのclass名
                'theme_location' => 'sidebar' ,//テーマの中で使われる位置 register_nav_menuが必要
                'add_li_class' =>  'p-sidebar-list__contents__list',  //liのclass名追加(functionも記述あり)
                'walker'  => new custom_walker_sidebar, //h3追加(functionsも記述あり)
            ));
         ?>
<!--          
         <nav class="p-sidebar-list ">
               <ul class="p-sidebar-list__contents">
                  <h3 a href="#" class="c-title u-color--gray">バーガー</h3>           
                  <li class="p-sidebar-list__contents__list" a href="#">ハンバーガー</li>
                  <li class="p-sidebar-list__contents__list" a href="#">チーズバーガー</li>
                  <li class="p-sidebar-list__contents__list" a href="#">テリヤキバーガー</li>
                  <li class="p-sidebar-list__contents__list" a href="#">アボカドバーガー</li>
                  <li class="p-sidebar-list__contents__list" a href="#">フィッシュバーガー</li>
                  <li class="p-sidebar-list__contents__list" a href="#">ベーコンバーガー</li>
                  <li class="p-sidebar-list__contents__list" a href="#">チキンバーガー</li>
               </ul>
               <ul class="p-sidebar-list__contents">
                  <h3 a href="#" class="c-title u-color--gray">サイド</h3>
                  <li class="p-sidebar-list__contents__list" a href="#">ポテト</li>
                  <li class="p-sidebar-list__contents__list" a href="#">サラダ</li>
                  <li class="p-sidebar-list__contents__list" a href="#">ナゲット</li>
                  <li class="p-sidebar-list__contents__list" a href="#">コーン</li>
               </ul>
               <ul class="p-sidebar-list__contents">
                  <h3 a href="#" class="c-title u-color--gray">ドリンク</h3>
                  <li class="p-sidebar-list__contents__list" a href="#">コーラ</li>
                  <li class="p-sidebar-list__contents__list" a href="#">ファンタ</li>
                  <li class="p-sidebar-list__contents__list" a href="#">オレンジ</li>
                  <li class="p-sidebar-list__contents__list" a href="#">アップル</li>
                  <li class="p-sidebar-list__contents__list" a href="#">紅茶（ice/Hot)</li>
                  <li class="p-sidebar-list__contents__list" a href="#">コーヒー(Ice/Hot)</li>
               </ul>
         </nav> -->
</aside>