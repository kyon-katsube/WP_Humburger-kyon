<?php 
    
      
//CSS,js 読み込み  WPが生成したページにCSSを追加する  get_template～～は読み込むファイルの後に記述
    function wphumburgerkyon_script() {
            //cssとfont
            wp_enqueue_style( 'reset', '//unpkg.com/ress/dist/ress.min.css');
            wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/css2? family=M+PLUS+1p:wght@400;500;700;800;900&display=swap', array(),'' );
            wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2? family=Roboto:wght@400;500;700;900&display=swap', array(),'' );
            wp_enqueue_style( 'style', get_template_directory_uri(). '/scss/style.css',array(),'1,0,0' );
        
            // WordPressのjQueryの読み込みを解除
            // wp_deregister_script('jquery');

            //js読み込み
            wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-3.6.0.min.js', array(), '3.6.0');
            wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', array(), '1.0.0' ); 
            }  

        add_action('wp_enqueue_scripts', 'wphumburgerkyon_script');


//テーマをサポート（使えるように）する
    add_theme_support('title-tag'); //タイトルタグサポートの許可
    add_theme_support( 'post-thumbnails' ); //アイキャッチ画の取り扱い許可 
    add_theme_support('automatic-feed-links');  //テーマチェックで入れろと指摘あり


//複数のナビゲーションメニューを登録する これを使うとadd_theme_support('menus')は不要
    function register_my_menu() {
        register_nav_menu( 'sidebar','サイドバー');
        register_nav_menu( 'footermenu','フッターメニュー');
    }
    add_action( 'after_setup_theme', 'register_my_menu' );


//固定ページにカテゴリを追加する
    add_action( 'init', 'my_add_pages_categories' ) ; 
    function my_add_pages_categories() {
        register_taxonomy_for_object_type( 'category', 'page' ) ;
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


 //wp-pagenavi（ページネーション）の設定
    function custom_wp_pagenavi( $html ) {
        $out = '';
        $out = str_replace( "<div", "", $html );
        $out = str_replace( "class='wp-pagenavi'>", "", $out );
        $out = str_replace( "<a", "<li><a", $out );
        $out = str_replace( "</a>", "</a></li>", $out );
        $out = str_replace( "<span", "<li><span", $out );
        $out = str_replace( "</span>", "</span></li>", $out );
        $out = str_replace( "</div>", "", $out );
        return '<nav class="p-paging__tabpc"><ul class="p-paging__tabpc__list"' . $out . '</ul></nav>';
    }
    add_filter( 'wp_pagenavi', 'custom_wp_pagenavi' );


//single.phpのギャラリーでWordpress側のCSSを止める設定 動いていない？
    add_filter( 'use_default_gallery_style', '__return_false' );


//page.phpのbodyに自動でついてくるpageというクラスを削除する
    add_filter('body_class', 'remove_body_class'); 
    function remove_body_class($wp_classes) {
    foreach($wp_classes as $key => $value) {
    if ($value == 'page') unset($wp_classes[$key]);
    }
    return $wp_classes;
    }