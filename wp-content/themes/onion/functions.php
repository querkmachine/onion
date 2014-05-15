<?php

/**
 * Enable HTML5 output
 */

add_theme_support('html5', array('comment-list', 'comment-form', 'search-form'));

/**
 * Prettify search URLs because WordPress doesn't do that
 */

function onion_search_url_rewrite_rule() {
  if(is_search() && !empty($_GET['s'])) {
    wp_redirect(home_url("/search/") . urlencode(get_query_var('s')));
    exit();
  } 
}
add_action('template_redirect', 'onion_search_url_rewrite_rule');

/**
 * Highlight search terms
 */

function onion_search_highlight_term($term, $string) {
  $keys = explode(" ", $term);
  $string = preg_replace('/('.implode('|', $keys) .')/iu', '<mark>\0</mark>', $string);
  return $string;
}

/**
 * Better excerpts 
 */

function onion_excerpts($text, $raw_excerpt) {
  if(!$raw_excerpt) {
    $content = apply_filters('the_content', strip_shortcodes(get_the_content()));
    $text = substr($content, 0, strpos($content, '</p>') + 4);
  }
  $text = preg_replace("/<img[^>]+\>/i", "", $text); 
  return $text;
}
add_filter('wp_trim_excerpt', 'onion_excerpts', 10, 2);