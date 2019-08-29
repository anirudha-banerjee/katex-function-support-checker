<?php
/*
 * Template Name: Videos
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Videos - Rhymes, Stories, Learn</title>
    
    <!-- Loading Bootstrap -->
    <link href="<?php echo bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="<?php echo bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory'); ?>/css/video-style.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory'); ?>/css/animate.css" rel="stylesheet">

    <link href="<?php echo bloginfo('template_directory'); ?>/css/style-magnific-popup.css" rel="stylesheet">

    <!-- Fonts -->    
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/pe-icon-7-stroke.css">
	    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="<?php echo bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
      <script src="<?php echo bloginfo('template_directory'); ?>/js/respond.min.js"></script>
    <![endif]-->
    
    <!--headerIncludes-->
    
</head>

<body>

<div id="main" class="container-fluid">

	<div class="top col-md-12">
		<a href="<?php echo site_url(); ?>/home" class="btn btn-info btn-lg pull-left">
			<i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back to Homepage
		</a>

		<button type="button" class="btn btn-success btn-lg pull-right" data-toggle="modal" data-target="#myModal">
			Language <img src="<?php echo bloginfo('template_directory'); ?>/images/translation.png" width="25px">
		</button>
	</div>

	<div class="container">

	<div id="myModal" class="modal fade" role="dialog">		
  	<div class="modal-dialog">
  	<div class="modal-content">
	<!-- <button type="button" class="close modal-close pull-right" data-dismiss="modal">&times;</button> -->
  	<div class="modal-body">

	<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">

		<fieldset class="languages_wrap">

			<h4>Choose Language</h4>

		<?php
			if( $terms = get_terms( array( 'taxonomy' => 'languages', 'orderby' => 'name' ) ) ) :

			 echo '<div class="language_filter">';
	 
	      foreach ( $terms as $term ) :

	      echo '<span>';
	      echo '<input type="checkbox" name="language" id="' . $term->term_id . '" value="' . $term->term_id . '"><label for="' . $term->term_id . '">' . $term->name . '</label>';
	      echo '</span>';

	      endforeach;

	      echo '</div>';
	      
		  endif;
		?>

		<input type="button" name="next" class="btn btn-success btn-lg next" value="NEXT" />

		</fieldset>

		<fieldset class="gender_wrap">

		<h4>Choose Gender</h4>

		<?php
			if( $terms = get_terms( array( 'taxonomy' => 'gender', 'orderby' => 'name' ) ) ) :

			 echo '<div class="gender_filter">';
	 
	      foreach ( $terms as $term ) :

	      echo '<span>';
	      echo '<input type="radio" name="gender" id="' . $term->term_id . '" value="' . $term->term_id . '"><label for="' . $term->term_id . '">' . $term->name . '</label>';
	      echo '</span>';

	      endforeach;

	      echo '</div>';
	      
		  endif;
		?>
		
		<input type="button" name="previous" class="btn btn-danger previous" value="BACK"/>
		<input type="button" name="next" class="btn btn-success btn-lg next" value="NEXT" />

		</fieldset>

		<fieldset class="age_wrap tab">

		<h4>Choose Age</h4>

		<?php
			if( $terms = get_terms( array( 'taxonomy' => 'age', 'orderby' => 'name' ) ) ) :

		  echo '<div class="age_filter">';
	 
	      foreach ( $terms as $term ) :

	      echo '<span>';
	      echo '<input type="radio" name="age" id="' . $term->term_id . '" value="' . $term->term_id . '"><label for="' . $term->term_id . '">' . $term->name . '</label>';
	      echo '</span>';

	      endforeach;

	      echo '</div>';
	      
		  endif;
		?>

		<input type="button" name="previous" class="btn btn-danger previous" value="BACK" />
		<input type="submit" name="submit" class="btn btn-success btn-lg submit" value="SUBMIT" />		

		</fieldset>

	</form>

	</div>

	</div>
	</div>
	</div>


	<div id="response" class="video_lists"></div>

	</div>


</div>


<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/wow.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/plugins.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery.easing.min.js" type="text/javascript"></script>

<script type="text/javascript">
/*$(document).ready(function(){
	$('.popup-gallery').find('a.popup4').magnificPopup({
		type: 'iframe',
		gallery: {
		  enabled:false
		}
	});
});*/

$(window).load(function(){        
   	$('#myModal').modal('show');   		
});

/*$(".languages_wrap .next").click(function(){
	// Validate fields
	var langchecked = $(".language_filter input:checked").length > 0;
    if (!langchecked) {
        //$('#errorModal').modal('show');
        alert("Please choose anyone.");
        return true;
    }
});

$(".gender_wrap .next").click(function(){
	// Validate fields
	var genchecked = $(".gender_filter input:checked").length > 0;
    if (!genchecked) {
        //$('#errorModal').modal('show');
        alert("Please choose anyone.");
        return true;
    }
});

$(".age_wrap .submit").click(function(){
	// Validate fields
	var agechecked = $(".age_filter input:checked").length > 0;
    if (!agechecked) {
        //$('#errorModal').modal('show');
        alert("Please choose anyone.");
        return true;
    }
});*/

$(function() {

var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){

	var langchecked = $(".language_filter input:checked").length > 0;
    if (!langchecked) {
        //$('#errorModal').modal('show');
        alert("Please choose atleast one language.");
        return true;
    }

	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

jQuery(function($){
	$('.submit').click(function(){
		var filter = $('#filter');
		var lang = [];
		var gen = [];
		var age = [];

		$(".language_filter input:checked").each(function(){
	    	var lang_id=$(this).val();
	    	lang.push(lang_id);
	  	});

	  	$(".gender_filter input:checked").each(function(){
	    	var gen_id=$(this).val();
	    	gen.push(gen_id);
	  	});

	  	$(".age_filter input:checked").each(function(){
	    	var age_id=$(this).val();
	    	age.push(age_id);
	  	});

	  	//console.log(lang);
	  	//console.log(gen);
	  	//console.log(age);

		$.ajax({
			url: '<?php echo site_url() ?>/wp-admin/admin-ajax.php',
			//data:filter.serialize(), // form data
			data:{    
				'action' : 'myfilter',       
                'langs' : lang,
                'gender' : gen,
                'age' : age,
            },				
			type: 'POST', // POST
			beforeSend:function(xhr){
				//filter.find('button').text('Processing...'); // changing the button label
			},
			success:function(data){
				//filter.find('button').text('NEXT'); // changing the button label back
				$('#response').html(data); // insert data
				$('#myModal').modal('hide');
				//alert(data);
			}
		});
		return false;
	});
});

});
</script>

</body>
</html>