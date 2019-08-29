<?php

add_action('wp_ajax_myfilter', 'misha_filter_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');
 
function misha_filter_function(){
	$args = array(
		'orderby' => 'date', // we will sort posts by date
		'order'	=> 'DSC' // ASC or DESC - Default
	);
 
  $langs = $_POST['langs'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];

  $args=array(
    'post_type'=>'videos',
    'tax_query' => array(
    'relation' => 'AND',       
       array(
         'taxonomy' => 'languages',
         'field' => 'term_id',
         'terms' => $langs,
         'operator' => 'IN'
       ),
       /*array(
         'taxonomy' => 'gender',
         'field' => 'term_id',
         'terms' => $gender,
         'operator' => 'IN'
       ),
       array(
         'taxonomy' => 'age',
         'field' => 'term_id',
         'terms' => $age,
         'operator' => 'IN'
       )*/
    )
 );
 
	/*// create $args['meta_query'] array if one of the following fields is filled
	if( isset( $_POST['price_min'] ) && $_POST['price_min'] || isset( $_POST['price_max'] ) && $_POST['price_max'] || isset( $_POST['featured_image'] ) && $_POST['featured_image'] == 'on' )
		$args['meta_query'] = array( 'relation'=>'AND' ); // AND means that all conditions of meta_query should be true
 
	// if both minimum price and maximum price are specified we will use BETWEEN comparison
	if( isset( $_POST['price_min'] ) && $_POST['price_min'] && isset( $_POST['price_max'] ) && $_POST['price_max'] ) {
		$args['meta_query'][] = array(
			'key' => '_price',
			'value' => array( $_POST['price_min'], $_POST['price_max'] ),
			'type' => 'numeric',
			'compare' => 'between'
		);
	} else {
		// if only min price is set
		if( isset( $_POST['price_min'] ) && $_POST['price_min'] )
			$args['meta_query'][] = array(
				'key' => '_price',
				'value' => $_POST['price_min'],
				'type' => 'numeric',
				'compare' => '>'
			);
 
		// if only max price is set
		if( isset( $_POST['price_max'] ) && $_POST['price_max'] )
			$args['meta_query'][] = array(
				'key' => '_price',
				'value' => $_POST['price_max'],
				'type' => 'numeric',
				'compare' => '<'
			);
	}*/
 
 
	/*// if post thumbnail is set
	if( isset( $_POST['featured_image'] ) && $_POST['featured_image'] == 'on' )
		$args['meta_query'][] = array(
			'key' => '_thumbnail_id',
			'compare' => 'EXISTS'
		);*/
	// if you want to use multiple checkboxed, just duplicate the above 5 lines for each checkbox
 
	$query = new WP_Query( $args );
 
	if( $query->have_posts() ) :
		while( $query->have_posts() ): $query->the_post();
      ?>
        <div class="thumbnail popup-gallery col-sm-3 wow fadeIn">
          <a class="popup4" href="<?php echo the_field('video_link'); ?>">
            <img src="<?php echo the_field('thumbnail_image') ?>">
            <h6><?php echo the_title(); ?></h6>
          </a>
        </div>        
  <?php
		endwhile;?>
        <script type="text/javascript">
          $('.popup-gallery').find('a.popup4').magnificPopup({
            type: 'iframe',
            gallery: {
              enabled:false
            }
          });
        </script>
  <?php
		wp_reset_postdata();
	else :
		echo 'No posts found';
	endif;
 
	die();
}