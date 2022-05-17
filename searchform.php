<form class="p-search-form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="search"></label>
    <input type="search" class="p-search-form__box c-input-box" value="<?php the_search_query(); ?>" name="s" id="s">
    <input type="submit" class="p-search-form__button c-button--search" value="検索" >
</form>