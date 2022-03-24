<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
<meta charset="utf-8">
<title><?php       //タブのタイトルを表示しているページのタイトルにする
         global $page, $paged;
         if(is_front_page()) : 
            bloginfo('name');
         elseif(is_home()) :   
            wp_title('|', true, 'right');
            bloginfo('name');
         elseif(is_single()) : 
            wp_title('');
         elseif(is_page()) : 
            wp_title('|', true, 'right');
            bloginfo('name');
         elseif(is_archive()) : 
            wp_title('|', true, 'right');
            bloginfo('name');
         elseif(is_search()) : 
            wp_title('');
         elseif(is_404()): 
            echo '404|';
            bloginfo('name');
         endif;
         if($paged >= 2 || $page >= 2) : //２ページ目以降の場合
            echo '-' . sprintf('%sページ',
            max($paged,$page));
         endif;
         ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content=<?php bloginfo('description');?>>                          
<meta name="keywords" content="WordPress, Theme, development, Hamburger"> 
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/fabicon-hamburger.png">

<?php wp_head(); ?>

</head>

 <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
 
    <!--front-page-->
    <div class="p-grid">   <!--pcgrid用-->

      <header class="l-header p-header">
         <div class="p-header__menu">               <!--sp/tab用メニューボタン-->
            <button class="c-button--menu">Menu</button>
         </div>

         <h1 class="p-header__title c-title u-color--gray">  <!--タイトル「Hamburger」の取得-->
             <a href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name');?></a></h1>   

         <div class="p-search-form">  <!--検索フォーム呼び出し-->
             <?php get_search_form(); ?>
         </div>  
      </header>   