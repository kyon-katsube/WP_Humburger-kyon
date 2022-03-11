<?php 
    
      
//CSS,js 読み込み  WPが生成したページにCSSを追加する
    function wphumburgerkyon_script() {
            //cssとfont
            wp_enqueue_style( 'reset', '//unpkg.com/ress/dist/ress.min.css');
            wp_enqueue_style( 'style', get_template_directory_uri(). '/scss/style.css',array(),'1,0,0' );
            wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/css2? family=M+PLUS+1p:wght@400;500;700;800;900&display=swap', array(),'' );
            wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2? family=Roboto:wght@400;500;700;900&display=swap', array(),'' );
        
            // WordPressのjQueryの読み込みを解除
            wp_deregister_script('jquery');
            //js読み込み
            wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), false, true );  //footerで読み込む
            wp_enqueue_script('script', get_template_directory_uri().'/script.js', array(), false, true );   //footerで読み込む
            wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery-3.6.0.min.js',array(),'3.6.0',true);
            }  

        add_action('wp_enqueue_scripts', 'wphumburgerkyon_script');


//テーマをサポート（使えるように）する
add_action('init', function(){     
    add_theme_support('title-tag');        
    add_theme_support('post-thumbnails');  

//複数のナビゲーションメニューを登録する これを使うとadd_theme_support('menus')は不要
    register_nav_menus([
        'sidebar' => 'サイドバー',
    ]);
});


//各ページのタイトル取得
    function wphumburgerkyon_title($title){
            if ( is_front_page() && is_home() ) { 
                $title = get_bloginfo( 'name', 'display' );
            } elseif ( is_singular() ) {
                $title = single_post_title( '', false );
            }
              return $title;
            }
    add_filter( 'pre_get_document_title', 'wphumburgerkyon_title' );


//固定ページにカテゴリを追加する
    add_action( 'init', 'my_add_pages_categories' ) ; 
    function my_add_pages_categories() {
        register_taxonomy_for_object_type( 'category', 'page' ) ;
    }

    add_action( 'pre_get_posts', 'my_set_page_categories' ) ;
    function my_set_page_categories( $query ) {
        if ( $query->is_category== true && $query->is_main_query()){
            $query->set( 'post_type', array( 'post', 'page', 'nav_menu_item' )) ;
        }
    }


// wp_nav_menuのバーガー・サイド・ドリンクにh3を追加
class custom_walker_sidebar extends Walker_Nav_Menu {
 
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = '' . $item->ID;
        $id = '' . $item->ID;
        $css_classes = 'p-sidebar-list__contents c-title u-color--gray';
        foreach ($classes as $class){
            $css_classes .= $class.' ';
        }
        if($depth == 0){ //第一階層のときにh3タグを付ける
            $output .= '<li><h3 class="p-sidebar-list__contents c-title u-color--gray"><a href="'.$item->url.'">'.$item->title.'</a></h3>';
        } else{           //第一階層以外は入れない classはh3と違うので手入力
            $output .= '<li class="p-sidebar-list__contents__list u-color--gray"><a href="'.$item->url.'">'.$item->title.'</a>';
        }
     }
}


//カスタムメニューのliのid,classを削除
    add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
    add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
    add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
    function my_css_attributes_filter($var) {
    return is_array($var) ? array_intersect($var, array('p-sidebar-list__contents__list')) : ''; //liのクラス名だけ追加
    }


//single.phpでhタグを取得する
    function get_index() {  
        global $post;       //グローバル変数を使う為の宣言
        preg_match_all('/<h[1-6]>.+<\/h[1-6]>/u', $post->post_content, $matches);  //マッチングで<h>タグを取得する
        $matches_count = count($matches[0]);   //取得した<h>タグの個数をカウント
        if(empty($matches)){       //<h>タグがない場合の出力    
            echo '<span>Sorry no index</span>';
        }else{   //<h>タグが存在する場合に<h>タグを出力
               for ($i = 0; $i < $matches_count; $i++){  //取得した個数分出力する
                echo  $matches[0][$i];
            }
        }     
    }