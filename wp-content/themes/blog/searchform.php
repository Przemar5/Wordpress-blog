<form id="searchform" class="form-inline my-2 my-lg-0" method="get" action="<?= esc_url(home_url('/')); ?>">
    <input class="search-field form-control mr-sm-2" type="search" placeholder="Search"name="s" placeholder="Search" value="<?= get_search_query(); ?>">
    <input type="submit" value="Search" class="btn btn-outline-success my-2 my-sm-0">
</form>