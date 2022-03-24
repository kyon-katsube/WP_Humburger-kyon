<footer class="l-footer">
         <div class="p-footer">
            <!-- <p class="c-title" a href="#">ショップ情報 ｜ ヒストリー</p> -->
           
        <!--navを表示する--> 
         <?php
             wp_nav_menu(array(
                'menu'=>'footermenu',  //管理画面で作成したメニュー
                'container_class' => 'p-footer' , //navのclass名             
                'items_wrap' =>  '<ul class="c-footer">%3$s</ul>',            
                'theme_location' => 'footermenu' ,//テーマの中で使われる位置 register_nav_menuが必要
            ));
         ?>
            <p class="c-copyright">copyright : RaiseTech</p>
         </div>
      </footer>
  
   </div> <!--pc版grid用のdivタグ-->
  
   <?php wp_footer(); ?>

</body>
</html>