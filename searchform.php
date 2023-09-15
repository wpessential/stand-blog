


<form role="search" method="get" id="searchform" class="searchform search" action="<?php echo home_url('/'); ?>">

    <input type="text" value="<?php echo get_search_query(); ?>" placeholder="type to search..." name="s" id="s" class="searchText">
    
    <input type="submit" id="searchsubmit" value="Search">
</form>