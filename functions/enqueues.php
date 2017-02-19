<?php

/*
Google CDN jQuery with a local fallback
=======================================
See http://www.wpcoke.com/load-jquery-from-cdn-with-local-fallback-for-wordpress/
*/

if( !is_admin()){
	$url = 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js';
	$test_url = @fopen($url,'r');
	if($test_url !== false) {
		function load_external_jQuery() {
			wp_deregister_script('jquery');
			wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
			wp_enqueue_script('jquery');
		}
		add_action('wp_enqueue_scripts', 'load_external_jQuery');
	} else {
		function load_local_jQuery() {
			wp_deregister_script('jquery');
			wp_register_script('jquery', get_bloginfo('template_url').'/asset/js/jquery-1.11.3.min.js', __FILE__, false, '1.11.3', true);
			wp_enqueue_script('jquery');
		}
		add_action('wp_enqueue_scripts', 'load_local_jQuery');
	}
}

function a_pr_enqueues() {

/*
OPTIONAL: Enqueue WordPress's onboard jQuery
============================================
Un-comment the next two lines of code if you want to use WordPress's onboard jQuery INSTEAD of the Google CDN jQuery above.
	wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.11.3.min.js', __FILE__, false, '1.11.3', true);
	wp_enqueue_script( 'jquery' );
*/

	wp_register_style('bootstrap-css', get_template_directory_uri() . '/asset/css/bootstrap.min.css', false, '3.3.4', null);
	wp_enqueue_style('bootstrap-css');

/*
OPTIONAL: Bootstrap Theme enqueued
==================================
Delete (or comment-out) the next two lines of code below if you don't want the Bootstrap Theme.
*/

  	wp_register_style('a-pr-css', get_template_directory_uri() . '/asset/css/style-dist.css', false, null);
	wp_enqueue_style('a-pr-css');

  	wp_register_script('modernizr', get_template_directory_uri() . '/asset/js/modernizr-2.8.3.min.js', false, null, false);
	wp_enqueue_script('modernizr');

  	wp_register_script('bootstrap-js', get_template_directory_uri() . '/asset/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('a-pr-preload', get_template_directory_uri() . '/asset/js/preload-dist.js', false, null, true);
	wp_enqueue_script('a-pr-preload');

    wp_register_script('a-pr-js', get_template_directory_uri() . '/asset/js/a-pr-dist.js', false, null, true);
	wp_enqueue_script('a-pr-js');

    /*if(is_page('bio') ) {

        wp_register_style('a-pr-bio', get_template_directory_uri() . '/asset/css/layouts/bio.css', false, null);

        wp_enqueue_style('a-pr-bio');

    }*/

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'a_pr_enqueues', 100);

class WP_HTML_Compression {
    protected $compress_css = true;
    protected $compress_js = true;
    protected $info_comment = true;
    protected $remove_comments = true;

    protected $html;
    public function __construct($html) {
      if (!empty($html)) {
		    $this->parseHTML($html);
	    }
    }
    public function __toString() {
	    return $this->html;
    }
    protected function bottomComment($raw, $compressed) {
	    $raw = strlen($raw);
	    $compressed = strlen($compressed);
	    $savings = ($raw-$compressed) / $raw * 100;
	    $savings = round($savings, 2);
	    return '<!-- HTML Minify | http://fastwp.de/snippets/html-minify/ | Größe reduziert um '.$savings.'% | Von '.$raw.' Bytes, auf '.$compressed.' Bytes -->';
    }
    protected function minifyHTML($html) {
	    $pattern = '/<(?<script>script).*?<\/script\s*>|<(?<style>style).*?<\/style\s*>|<!(?<comment>--).*?-->|<(?<tag>[\/\w.:-]*)(?:".*?"|\'.*?\'|[^\'">]+)*>|(?<text>((<[^!\/\w.:-])?[^<]*)+)|/si';
	    preg_match_all($pattern, $html, $matches, PREG_SET_ORDER);
	    $overriding = false;
	    $raw_tag = false;
	    $html = '';
	    foreach ($matches as $token) {
		    $tag = (isset($token['tag'])) ? strtolower($token['tag']) : null;
		    $content = $token[0];
		    if (is_null($tag)) {
			    if ( !empty($token['script']) ) {
				    $strip = $this->compress_js;
			    }
			    else if ( !empty($token['style']) ) {
				    $strip = $this->compress_css;
			    }
			    else if ($content == '<!--wp-html-compression no compression-->') {
				    $overriding = !$overriding;
				    continue;
			    }
			    else if ($this->remove_comments) {
				    if (!$overriding && $raw_tag != 'textarea') {
					    $content = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $content);
				    }
			    }
		    }
		    else {
			    if ($tag == 'pre' || $tag == 'textarea') {
				    $raw_tag = $tag;
			    }
			    else if ($tag == '/pre' || $tag == '/textarea') {
				    $raw_tag = false;
			    }
			    else {
				    if ($raw_tag || $overriding) {
					    $strip = false;
				    }
				    else {
					    $strip = true;
					    $content = preg_replace('/(\s+)(\w++(?<!\baction|\balt|\bcontent|\bsrc)="")/', '$1', $content);
					    $content = str_replace(' />', '/>', $content);
				    }
			    }
		    }
		    if ($strip) {
			    $content = $this->removeWhiteSpace($content);
		    }
		    $html .= $content;
	    }
	    return $html;
    }
    public function parseHTML($html) {
	    $this->html = $this->minifyHTML($html);
	    if ($this->info_comment) {
		    $this->html .= "\n" . $this->bottomComment($html, $this->html);
	    }
    }
    protected function removeWhiteSpace($str) {
	    $str = str_replace("\t", ' ', $str);
	    $str = str_replace("\n",  '', $str);
	    $str = str_replace("\r",  '', $str);
	    while (stristr($str, '  ')) {
		    $str = str_replace('  ', ' ', $str);
	    }
	    return $str;
    }
}
function wp_html_compression_finish($html) {
    return new WP_HTML_Compression($html);
}
function wp_html_compression_start() {
    ob_start('wp_html_compression_finish');
}
add_action('get_header', 'wp_html_compression_start');
