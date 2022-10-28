<?php
function add_slug_class_to_li( $output, $args ) {
  $regex    = '/<li class="cat-item cat-item-(\d+)[^"]*/';
  $taxonomy = isset( $args['taxonomy'] ) && taxonomy_exists( $args['taxonomy'] ) ? $args['taxonomy'] : 'category';
  preg_match_all( $regex, $output, $m );
 
  if ( ! empty( $m[1] ) ) {
    $replace = array();
    foreach ( $m[1] as $term_id ) {
      $term = get_term( $term_id, $taxonomy );
      if ( $term && ! is_wp_error( $term ) ) {
        $replace[ '/<li class="cat-item cat-item-' . $term_id . '("| )/' ] = '<li class="cat-item cat-item-' . $term_id . ' cat-item-' . esc_attr( $term->slug ) . '$1';
      }
    }
    $output = preg_replace( array_keys( $replace ), $replace, $output );
  }
  return $output;
}
add_filter( 'wp_list_categories', 'add_slug_class_to_li', 10, 2 );