<?php 

//CSS,js 読み込み  WPが生成したページにCSSを追加する
    function wphumburgerkyon_script() {
            //cssとfont
            wp_enqueue_style( 'reset', '//unpkg.com/ress/dist/ress.min.css');
            wp_enqueue_style( 'style', get_template_directory_uri(). '/style.css',array(),'1,0,0' );
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
            // 複数のナビゲーションメニューを登録する これを使うとadd_theme_support('menus')は不要
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
    function my_add_pages_categories()
    {
        register_taxonomy_for_object_type( 'category', 'page' ) ;
    }
    add_action( 'pre_get_posts', 'my_set_page_categories' ) ;
    function my_set_page_categories( $query )
    {
        if ( $query->is_category== true && $query->is_main_query()){
            $query->set( 'post_type', array( 'post', 'page', 'nav_menu_item' )) ;
        }
    }


// wp_nav_menuにh3を追加
class custom_walker_sidebar extends Walker_Nav_Menu {
 
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
 
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        $id = 'menu-item-' . $item->ID;
        $css_classes = '';
        foreach ($classes as $class){
            $css_classes .= $class.' ';
        }
 
        if($depth == 0){ //第一階層のときにh3タグを付ける
            $output .= '<li id="'.$id.'" class="'.$css_classes.'"><h3><a href="'.$item->url.'">'.$item->title.'</a></h4>';
        }else{ //第一階層以外は通常通り
            $output .= '<li id="'.$id.'" class="'.$css_classes.'"><a href="'.$item->url.'">'.$item->title.'</a>';
        }
     }
}


// wp_nav_menuのliにclass追加
    function add_additional_class_on_li($classes, $item, $args){
            if (isset($args->add_li_class)) {
                $classes['class'] = $args->add_li_class;
            }
            return $classes;
            }
    add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);