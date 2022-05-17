<aside class="l-sidebar p-sidebar">   <!--Menuをタップして出てくるメニュー表示-->
         <button class="c-button--cross"><span></span><span></span></button>   <!--×ボタン用-->
         <h2 class="p-sidebar-title c-title u-color--gray">Menu</h2>   <!--PC時サイドバー上部に表示させる用-->
                  

   <!--navを表示する--> 
         <?php
             wp_nav_menu(array(
                'menu'=>'sidebar',  //管理画面で作成したメニュー名
                'container' => 'nav',   //一番外枠のdivタグをnavタグに divタグ全部を消すときはfalse
                'container_class' => 'p-sidebar-list' , //navのclass名             
                'items_wrap' =>  '<ul class="p-sidebar-list__contents">%3$s</ul>',
                'theme_location' => 'sidebar' ,//テーマの中で使われる位置 register_nav_menuが必要
                'walker'  => new custom_walker_sidebar, //h3追加(functionsも記述あり)
            ));
         ?>
</aside>