<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'twentysixteen'); ?></span>
        <input type="search" class="search-field" placeholder="Procurando por algo?" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button type="submit" class="search-submit"><i class="fas fa-search"></i></><span class="screen-reader-text"><?php echo _x('Search', 'submit button', 'twentysixteen'); ?></span></button>
</form>