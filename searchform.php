<div class="sidebar-item search">
    <form id="search_form" method="GET" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="text" name="s" class="searchText" placeholder="<?php esc_attr_e( 'type to search...', 'stand-blog' ); ?>" value="<?php echo get_search_query(); ?>">
    </form>
</div>
