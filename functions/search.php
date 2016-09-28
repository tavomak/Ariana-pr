<?php

function a_pr_search_form( $form ) {
    $form = '<form class="form-inline" role="search" method="get" id="searchform" action="' . home_url('/') . '" >
	<input class="form-control" type="text" value="' . get_search_query() . '" placeholder="' . esc_attr__('Search', 'a-pr') . '..." name="s" id="s" />
	<button type="submit" id="searchsubmit" value="'. esc_attr__('Search', 'a-pr') .'" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'a_pr_search_form' );
