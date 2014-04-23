<form role="search" method="get" class="search-form form-inline" action="<?php bloginfo('url'); ?>/">
  <div class="input-group">
    <input type="search" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" class="search-field form-control" placeholder="Search...">
    <label class="hide">Search for:</label>
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-default">Search <i class="fa fa-search"></i></button>
    </span>
  </div>
</form>