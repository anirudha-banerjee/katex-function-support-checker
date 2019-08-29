<?php

add_action('wp_ajax_call_post', 'call_post');
add_action('wp_ajax_nopriv_call_post', 'call_post');

function call_post(){

    // Getting the ajax data:
    // An array of keys("name")/values of each "checked" checkbox
    $choices = $_POST['choices'];

    $meta_query = array('relation' => 'OR');
    foreach($choices as $Key=>$Value){

        if(count($Value)){
            foreach ($Value as $Inkey => $Invalue) {
                $meta_query[] = array( 'key' => $Key, 'value' => $Invalue, 'compare' => '=' );
            }
        }
    }
    $args = array(
        'post_type' => 'videos',
        'meta_query' =>$meta_query
    );

    $query = new WP_Query($args);
     //if( ! empty ($params['template'])) {
         ////$template = $params['template'];
         if( $query->have_posts() ) :
             while( $query->have_posts() ): $query->the_post();
                 get_template_part('content');
             endwhile;
             wp_reset_query();
         else :
             wp_send_json($query->posts);
         endif;
     //}

    die();
}