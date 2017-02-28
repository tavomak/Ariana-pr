<?php

function a_pr_setup() {
    add_editor_style('css/editor-style.css');
    add_theme_support('post-thumbnails');
    update_option('thumbnail_size_w', 170);
    update_option('medium_size_w', 470);
    update_option('large_size_w', 970);
    update_option('medium_large', 768);
}
add_action('init', 'a_pr_setup');

function a_pr_excerpt_readmore() {
    return '&hellip;';//'&nbsp; <a href="'. get_permalink() . '">' . '&hellip; ' . __('Read more', 'a-pr') . ' <i class="glyphicon glyphicon-arrow-right"></i>' . '</a></p>';
}
add_filter('excerpt_more', 'a_pr_excerpt_readmore');

function a_pr_browser_body_class( $classes ) {
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

	if($is_lynx) $classes[] = 'lynx';
	elseif($is_gecko) $classes[] = 'gecko';
	elseif($is_opera) $classes[] = 'opera';
	elseif($is_NS4) $classes[] = 'ns4';
	elseif($is_safari) $classes[] = 'safari';
	elseif($is_chrome) $classes[] = 'chrome';
	elseif($is_IE) {
		$browser = $_SERVER['HTTP_USER_AGENT'];
		$browser = substr( "$browser", 25, 8);
		if ($browser == "MSIE 7.0"  ) {
			$classes[] = 'ie7';
			$classes[] = 'ie';
		} elseif ($browser == "MSIE 6.0" ) {
			$classes[] = 'ie6';
			$classes[] = 'ie';
		} elseif ($browser == "MSIE 8.0" ) {
			$classes[] = 'ie8';
			$classes[] = 'ie';
		} elseif ($browser == "MSIE 9.0" ) {
			$classes[] = 'ie9';
			$classes[] = 'ie';
		} else {
            $classes[] = 'ie';
        }
	}
	else $classes[] = 'unknown';

	if( $is_iphone ) $classes[] = 'iphone';

	return $classes;
}
add_filter( 'body_class', 'a_pr_browser_body_class' );

// Add post formats support. See http://codex.wordpress.org/Post_Formats

//add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

// Bootstrap pagination

// Bootstrap pagination
function ar_pr_pagination( $query=null ) {

  global $wp_query;
  $query = $query ? $query : $wp_query;
  $big = 999999999;

  $paginate = paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'type' => 'array',
    'total' => $query->max_num_pages,
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'prev_text' => __('&larr;'),
    'next_text' => __('&rarr;'),
    )
  );

  if ($query->max_num_pages > 1) :
?>
<ul class="pagination">
  <?php
  foreach ( $paginate as $page ) {
    echo '<li>' . $page . '</li>';
  }
  ?>
</ul>
<?php
  endif;
}

add_theme_support( 'woocommerce' );
