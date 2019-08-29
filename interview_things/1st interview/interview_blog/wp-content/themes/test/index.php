<?php
/*
 * Template Name: Homepage
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Focus - Multipurpose Landing Page</title>
    
    <!-- Loading Bootstrap -->
    <link href="<?php echo bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="<?php echo bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory'); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory'); ?>/css/style-magnific-popup.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/pe-icon-7-stroke.css">

	<!-- Optional - Adds useful class to manipulate icon font display -->
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/helper.css">

	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/owl.theme.default.min.css">
	    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="<?php echo bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
      <script src="<?php echo bloginfo('template_directory'); ?>/js/respond.min.js"></script>
    <![endif]-->
    
    <!--headerIncludes-->
    
</head>

<body>

    <!--begin header -->
    <header class="header">

        <!--begin nav -->
        <nav class="navbar navbar-default navbar-fixed-top">
            
            <!--begin container -->
            <div class="container">
        
                <!--begin navbar -->
                <div class="navbar-header">

                    <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        
                    <!--logo -->
                    <a href="<?php echo site_url(); ?>" class="navbar-brand" id="logo">Focus</a>

                </div>
                        
                <div id="navbar-collapse-02" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">			      
                        <li><a href="#home_wrapper">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#" class="discover-btn">Discover</a></li>
                       
                    </ul>
                </div>
                <!--end navbar -->
                                    
            </div>
    		<!--end container -->
            
        </nav>
    	<!--end nav -->
        
    </header>
    <!--end header -->

    <!--begin home section -->
    <section class="home-section" id="home_wrapper">


    	<div class="gradient-overlay">
            <video autoplay loop muted poster="../images/bg.jpg" id="bgvid">
            <source src="<?php echo bloginfo('template_directory'); ?>/video/intro-video-2.webm" type="video/webm">
            <source src="<?php echo bloginfo('template_directory'); ?>/video/intro-video-2.mp4" type="video/mp4">
            </video>
        </div>

		<!--begin container -->
		<div class="container">

	        <!--begin row -->
	        <div class="row">
	          
	          <!--begin col md 12-->
	          <div class="col-md-12">

	          	<div class="home-title">

	          		<span>We Do Awesome Work</span>
	          		<h1>Welcome to focus app</h1>
	          		<p>Curabitur quam etsum lacus etsumis nulatis etsumisedvitae etimuned nisle<br>varius 
					loremis feugiat etis netsum</p>

					<a href="#about" class="arrow-dwn scrool"><i class="fa fa-angle-down"></i></a>

	          	</div>

	          </div>
	          <!--end col md 12-->
	       
	        </div>
	        <!--end row -->

		</div>
		<!--end container -->

    </section>
    <!--end home section -->

    <!--begin section about -->
    <section class="section-white" id="about">

		<!--begin container -->
		<div class="container">

	        <!--begin row -->
	        <div class="row">

				<!--begin col md 12 -->
				<div class="col-md-12 text-center">

					<h2 class="section-title">Amazing Features</h2>

					<p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>
					
				</div>
				<!--end col md 12 -->

				<!--begin col md 4 -->
				<div class="col-md-4">

					<div class="about-box">

						<div class="hi-icon-wrap hi-icon-effect-8">
							<i class="fa fa-cogs hi-icon"></i>
						</div>

						<h3>Fully Responsive</h3>
						<p>Curabitur quam etsum lacus etsumis nulat iaculis ets vitae etsum nisle varius sed aliquam ets vitae dictis netsum.</p>
						
					</div>

				</div>
				<!--end col md 4 -->

				<!--begin col md 4 -->
				<div class="col-md-4">

					<div class="about-box">

						<div class="hi-icon-wrap hi-icon-effect-8">
							<i class="fa fa-clone hi-icon"></i>
						</div>

						<h3>Multiple Concepts</h3>
						<p>Curabitur quam etsum lacus etsumis nulat iaculis ets vitae etsum nisle varius sed aliquam ets vitae dictis netsum.</p>
						
					</div>

				</div>
				<!--end col md 4 -->

				<!--begin col md 4 -->
				<div class="col-md-4">

					<div class="about-box">

						<div class="hi-icon-wrap hi-icon-effect-8">
							<i class="fa fa-thumbs-o-up hi-icon"></i>
						</div>

						<h3>Easy To Use</h3>
						<p>Curabitur quam etsum lacus etsumis nulat iaculis ets vitae etsum nisle varius sed aliquam ets vitae dictis netsum.</p>
						
					</div>

				</div>
				<!--end col md 4 -->
	       
	        </div>
	        <!--end row -->

		</div>
		<!--end container -->

    </section>
    <!--end section about -->

    <!--begin section grey-->
  	<section class="section-grey">

	    <!--begin container -->
	    <div class="container">

	      	<!--begin row -->
	      	<div class="row">

		        <!--begin col md 6 -->
		        <div class="col-md-6 padding-top-60">

	        		<h3 class="medium-title">Mobile Devices</h3>

	        		<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur netsum lorisum fugit, sed quia magni dolores eos qui ratione sequi nesciunt. Neque et quis autem velis reprehenderit et quis voluptate velit esse quam nihil porisum ratione sequi enim ipsam voluptatem quia volupti tempor.</p>

	        		<blockquote>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus orci vel nibh aliquam laoreet Aenean accumsan</blockquote>

	        		<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamis corperas suscipit lobortis nisl consequat. volutpat. Ut wisi enim ad minim veniam, ets nostrud exerci tation ullamcorper suscipit lobortis nisl consequat.</p>

	        		<a href="#" class="btn-download"><i class="fa fa-cloud-download"></i>FREE VERSION</a>

		        </div>
		        <!--end col md 6 -->

		        <!--begin col md 6 -->
		        <div class="col-md-6">
		        	
		        	<img src="<?php echo bloginfo('template_directory'); ?>/images/iphones-left.png" alt="mobile-devices" class="width-100 wow slideInRight" data-wow-delay="0.50s"
		        	style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight;">
		        	
		        </div>
		        <!--end col md 6 -->
	     
	      	</div>
	      	<!--end row -->

	    </div>
	    <!--end container -->

  	</section>
  	<!--end section grey -->

  	<!--begin section white-->
  	<section class="section-white">

	    <!--begin container -->
	    <div class="container">

	      	<!--begin row -->
	      	<div class="row">

		        <!--begin col md 6 -->
		        <div class="col-md-6">

		        	<img src="<?php echo bloginfo('template_directory'); ?>/images/iphones-right.png" alt="mobile-devices" class="width-100 wow slideInLeft" data-wow-delay="0.50s"
		        	style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInLeft;">
		        	
		        </div>
		        <!--end col md 6 -->

		        <!--begin col md 6 -->
		        <div class="col-md-6 padding-top-60">

	        		<h3>Responsive Design</h3>

	        		<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur netsum lorisum fugit, sed quia magni dolores eos qui ratione sequi nesciunt. Neque et quis autem velis reprehenderit et quis voluptate velit esse quam nihil porisum ratione sequi enim ipsam voluptatem quia volupti tempor.</p>

	        		<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamis corperas suscipit lobortis nisl consequat. volutpat. Ut wisi enim ad minim veniam, ets nostrud exerci tation ullamcorper suscipit lobortis nisl consequat.</p>

	        		<ul class="features-responsive">
	        			<li><i class="fa fa-check"></i>Lorem ipsum dolor sit ametcon sectetur adipiscingelit</li>
	        			<li><i class="fa fa-check"></i>Wisi enim ad minim veniam nostrud net exercites. </li>
	        			<li><i class="fa fa-check"></i>Neque etim net quis autem velis reprehenderit.</li>
	        			<li><i class="fa fa-check"></i>Quia voluptas sit aspernatur netsum fugit.</li>
	        			<li><i class="fa fa-check"></i>Dipsam voluptatem quia volupti tempor.</li>
	        		</ul>

		        </div>
		        <!--end col md 6 -->
	     
	      	</div>
	      	<!--end row -->

	    </div>
	    <!--end container -->

  	</section>
  	<!--end section white -->

    <!--begin section image -->
  	<section class="newsletter-wrapper">

  	<div class="image-overlay"></div>

	    <!--begin container -->
	    <div class="container">

	      	<!--begin row -->
	      	<div class="row">

		        <!--begin col md 12 -->
		        <div class="col-md-12 text-center">
		            
		            <!--begin newsletter-form -->
		    		<h3 class="newsletter-title">Seen enough? We are currently in the closed beta.<br>
		    		Please enter your email to join the waiting list.</h3>

		        </div>
		        <!--end col md 12 -->

		        <!--begin col md 6-->
		        <div class="col-md-6 col-md-offset-3 newsletter_box">

		            <!--begin success_box -->
		            <p class="newsletter_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
		            <!--end success_box -->
		            
		    		<form id="newsletter-form" class="newsletter_form" action="<?php echo bloginfo('template_directory'); ?>/php/newsletter.php" method="post">
		    			<input type="email" name="nf_email" placeholder="Enter Your Email.." class="newsletter-input">
		    			<input type="submit" value="SUBSCRIBE" class="btn-newsletter">
		    		</form>
		    		<!--end newsletter-form -->

		        </div>
		        <!--end col md 8 -->

	      	</div>
	      	<!--end row -->

	    </div>
	    <!--end container -->

  	</section>
  	<!--end section image-->

  	<!--begin section-white -->
  	<section class="section-white" id="team">

	    <!--begin container -->
	    <div class="container">

	        <!--begin row -->
	        <div class="row">

				<!--begin col md 12 -->
				<div class="col-md-12 text-center">

					<h2 class="section-title">The Team Behind Focus</h2>

					<p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>
					
				</div>
				<!--end col md 12 -->

		        <!--begin col md 3 -->
		        <div class="col-md-3 col-sm-6">

		        	<!--begin team item -->
		        	<div class="team-box">

		        		<img src="<?php echo bloginfo('template_directory'); ?>/images/crossfit-gallery06.jpg" alt="team-1" class="width-100">
		        		
		        		<div class="team-text">

		        			<h5>Joe Doessimo<br><span class="text-blue">Web Designer</span></h5>

			        		<ul class="team-social">
			        			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			        			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			        			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			        			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			        		</ul>
		        			
		        		</div>

		        	</div>
		        	<!--end team item -->
		        </div>
		        <!--end col md 3 -->

		        <!--begin col md 3 -->
		        <div class="col-md-3 col-sm-6">

		        	<!--begin team item -->
		        	<div class="team-box">

		        		<img src="<?php echo bloginfo('template_directory'); ?>/images/crossfit-gallery06.jpg" alt="team-1" class="width-100">
		        		
		        		<div class="team-text">

		        			<h5>Jane Doe<br><span class="text-blue">App Developer</span></h5>

			        		<ul class="team-social">
			        			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			        			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			        			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			        			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			        		</ul>
		        			
		        		</div>

		        	</div>
		        	<!--end team item -->
		        </div>
		        <!--end col md 3 -->

		        <!--begin col md 3 -->
		        <div class="col-md-3 col-sm-6">

		        	<!--begin team item -->
		        	<div class="team-box">

		        		<img src="<?php echo bloginfo('template_directory'); ?>/images/crossfit-gallery06.jpg" alt="team-1" class="width-100">
		        		
		        		<div class="team-text">

		        			<h5>John Dow<br><span class="text-blue">Marketing Specilist</span></h5>

			        		<ul class="team-social">
			        			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			        			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			        			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			        			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			        		</ul>
		        			
		        		</div>

		        	</div>
		        	<!--end team item -->
		        </div>
		        <!--end col md 3 -->

		        <!--begin col md 3 -->
		        <div class="col-md-3 col-sm-6">

		        	<!--begin team item -->
		        	<div class="team-box">

		        		<img src="<?php echo bloginfo('template_directory'); ?>/images/crossfit-gallery06.jpg" alt="team-1" class="width-100">
		        		
		        		<div class="team-text">

		        			<h5>Jane Donel<br><span class="text-blue">App Developer</span></h5>

			        		<ul class="team-social">
			        			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			        			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			        			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			        			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			        		</ul>
		        			
		        		</div>

		        	</div>
		        	<!--end team item -->
		        </div>
		        <!--end col md 3 -->
		     
	        </div>
	      	<!--end row -->

	    </div>
	    <!--end container -->

  	</section>
  	<!--end section-white -->

  	<!--begin section grey -->
  	<section class="section-grey" id="services">

	    <!--begin container -->
	    <div class="container">

	      	<!--begin row -->
	      	<div class="row">

		        <!--begin col md 12-->
		        <div class="col-md-12 text-center">

					<h2 class="section-title">Discover Our Services</h2>

					<p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>

		        </div>
		        <!--end col md 12 -->

				<!--begin col md 12 -->
		        <div class="col-md-12 padding-top-40">
		        	<img src="<?php echo bloginfo('template_directory'); ?>/images/iphone-features3.png" alt="phone-features" class="width-100">
		        </div>
		        <!--end col md 12 -->

		        <!--begin col md 4-->
		        <div class="col-md-4">

		        	<div class="feature-box">

		        		<i class="pe-7s-tools"></i>

		        		<div class="feature-inner">

		        			<h4>Support 24/7</h4>
		        			<p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat, wisi ad minim.</p>
		        			
		        		</div>
		        	</div>
		        </div>
		        <!--end col md 4 -->

		        <!--begin col md 4-->
		        <div class="col-md-4">

		        	<div class="feature-box">

		        		<i class="pe-7s-users"></i>

		        		<div class="feature-inner">

		        			<h4>User Friendly</h4>
		        			<p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat, wisi ad minim.</p>
		        			
		        		</div>
		        	</div>
		        </div>
		        <!--end col md 4 -->

		        <!--begin col md 4-->
		        <div class="col-md-4">

		        	<div class="feature-box">

		        		<i class="pe-7s-bell"></i>

		        		<div class="feature-inner">

		        			<h4>Notifications</h4>
		        			<p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat, wisi ad minim.</p>
		        			
		        		</div>
		        	</div>
		        </div>
		        <!--end col md 4 -->

		        <!--begin col md 4-->
		        <div class="col-md-4">

		        	<div class="feature-box">

		        		<i class="pe-7s-chat"></i>

		        		<div class="feature-inner">

		        			<h4>Chat With Friends</h4>
		        			<p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat, wisi ad minim.</p>
		        			
		        		</div>
		        	</div>
		        </div>
		        <!--end col md 4 -->

		        <!--begin col md 4-->
		        <div class="col-md-4">

		        	<div class="feature-box">

		        		<i class="pe-7s-world"></i>

		        		<div class="feature-inner">

		        			<h4>Accesability</h4>
		        			<p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat, wisi ad minim.</p>
		        			
		        		</div>
		        	</div>
		        </div>
		        <!--end col md 4 -->

		        <!--begin col md 4-->
		        <div class="col-md-4">

		        	<div class="feature-box">

		        		<i class="pe-7s-piggy"></i>

		        		<div class="feature-inner">

		        			<h4>Cost Control</h4>
		        			<p>Utise wisi enim minim veniam, quis tation ullamcorper suscipit et loboti nisl consequat, wisi ad minim.</p>
		        			
		        		</div>
		        	</div>
		        </div>
		        <!--end col md 4 -->

	      	</div>
	      	<!--end row -->

	    </div>
	    <!--end container -->

  	</section>
  	<!--end section grey -->

	<!--begin section-white -->
    <section class="section-white no-padding">
        
        <!--begin container-->
        <div class="container-fluid">

            <!--begin row-->
            <div class="row">

	            <div class="inner-section">
	            
	                <!--begin col-md-6-->
	                <div class="col-md-6">

	                    <img src="<?php echo bloginfo('template_directory'); ?>/images/crossfit-post03.jpg" alt="app-image" class="width-100">

	                </div>
	                <!--end col-sm-6-->
	                
	                <!--begin col-md-6-->
	                <div class="col-md-6">

	                <div class="panel-wrapper">

		                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		                        
		                        <div class="panel panel-default">
		                            
		                            <div class="panel-heading" role="tab" id="headingOne">
		                                
		                                <h4 class="panel-title">
		                                
		                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		                                  <i class="fa fa-rocket panel-icon"></i> Is the app available in all countries?
		                                </a>
		                                
		                                </h4>
		                                
		                            </div>
		                            
		                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		                                
		                                <div class="panel-body">
		                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur netsum loris fugit, sed quia magni dolores eos qui ratione sequi nesciunt. Neque et quis autem velis reprehenderit et quis voluptate velit esse quam nihil poris ratione sequi enim ipsam voluptatem quia volupti tempor.</p>
		                                </div>
		                                
		                            </div>
		                            
		                        </div>
		                        
		                        <div class="panel panel-default">
		                            
		                            <div class="panel-heading" role="tab" id="headingTwo">
		                                
		                                <h4 class="panel-title">
		                                
		                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		                                  <i class="fa fa-trophy panel-icon"></i> How can I manage or stop the notifications I receive?
		                                </a>
		                                
		                                </h4>
		                                
		                            </div>
		                            
		                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
		                                
		                                <div class="panel-body">
		                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur netsum loris fugit, sed quia magni dolores eos qui ratione sequi nesciunt. Neque et quis autem velis reprehenderit et quis voluptate velit esse quam nihil poris ratione sequi enim ipsam voluptatem quia volupti tempor.</p>
		                                </div>
		                                
		                            </div>
		                            
		                        </div>
		                        
		                        <div class="panel panel-default">
		                            
		                            <div class="panel-heading" role="tab" id="headingThree">
		                                
		                                <h4 class="panel-title">
		                                
		                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		                                  <i class="fa fa-gift panel-icon"></i> Can I use the subscription on more than one device?
		                                </a>
		                                
		                                </h4>
		                                
		                            </div>
		                            
		                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
		                                
		                                <div class="panel-body">
		                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur netsum loris fugit, sed quia magni dolores eos qui ratione sequi nesciunt. Neque et quis autem velis reprehenderit et quis voluptate velit esse quam nihil poris ratione sequi enim ipsam voluptatem quia volupti tempor.</p>
		                                </div>
		                                
		                            </div>
		                            
		                        </div>

		                        <div class="panel panel-default">
		                            
		                            <div class="panel-heading" role="tab" id="headingFour">
		                                
		                                <h4 class="panel-title">
		                                
		                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
		                                  <i class="fa fa-leaf panel-icon"></i> Can I use the subscription on more than one device?
		                                </a>
		                                
		                                </h4>
		                                
		                            </div>
		                            
		                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
		                                
		                                <div class="panel-body">
		                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur netsum loris fugit, sed quia magni dolores eos qui ratione sequi nesciunt. Neque et quis autem velis reprehenderit et quis voluptate velit esse quam nihil poris ratione sequi enim ipsam voluptatem quia volupti tempor.</p>
		                                </div>
		                                
		                            </div>
		                            
		                        </div>
		                        
		                    </div>

		                </div>    
	                    
	                </div>
	                <!--end col-md-6-->

	            </div>    
            
            </div>
            <!--end row-->
    
        </div>
        <!--end container-->
    
    </section>
    <!--end section-white-->
    
	<!--begin section gallery -->
  	<section class="section-gradient" id="gallery">

		<!--begin container -->
		<div class="container-fluid	">

			<!--begin row -->
			<div class="row">
				
				<!--begin col md 12 -->
				<div class="col-md-12 text-center">

					<h2 class="section-title white">Explore Latest Projects</h2>

					<p class="section-subtitle white">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>
					
				</div>
				<!--end col md 12 -->

				<!--begin col md 12 -->
				<div class="gallery-item-wrapper padding-top-30">

					<!--begin owl carousel -->
					<div id="owl2" class="owl-carousel owl-theme">

						<div> 
							<img src="<?php echo bloginfo('template_directory'); ?>/images/showcase1.jpg" alt="showcase" class="gallery-show">
						</div>

						<div> 
							<img src="<?php echo bloginfo('template_directory'); ?>/images/showcase2.jpg" alt="showcase" class="gallery-show">
						</div>

						<div> 
							<img src="<?php echo bloginfo('template_directory'); ?>/images/showcase3.jpg" alt="showcase" class="gallery-show">
						</div>

						<div> 
							<img src="<?php echo bloginfo('template_directory'); ?>/images/showcase4.jpg" alt="showcase" class="gallery-show">
						</div>

						<div> 
							<img src="<?php echo bloginfo('template_directory'); ?>/images/showcase5.jpg" alt="showcase" class="gallery-show">
						</div>

						<div> 
							<img src="<?php echo bloginfo('template_directory'); ?>/images/showcase6.jpg" alt="showcase" class="gallery-show">
						</div>
						
					</div>
					<!--end owl carousel -->

						<div class="owl-dots">
							<div class="owl-dot active"><span></span></div>
							<div class="owl-dot"><span></span></div>
							<div class="owl-dot"><span></span></div>
						</div>
				</div>
				<!--end col md  12-->

			</div>
			<!--end row -->

		</div>
		<!--end container -->

	</section>
	<!--end section gallery -->

  	<!--begin section testimonials -->
  	<section class="section-lightgrey" >

	    <!--begin container -->
	    <div class="container">

	      <!--begin row -->
	      <div class="row">
	        
		        <!--begin col md 10 -->
		        <div class="col-md-10 col-md-offset-1">

		        	<!--begin owl carousel -->
		        	<div id="owl1" class="owl-carousel owl-theme">

						<div> 
							<div class="testim-inner">

								<img src="<?php echo bloginfo('template_directory'); ?>/images/customer-img.jpg" alt="testimonials" class="testim-img">
								<h6>Jennifer Smith<br><span class="job-text">App Magazine Editor</span></h6>
								
								<p>Eodem modo typi, qui per seacula nobis videntur quarta. Eodem modo typi, qui nunc nobis videntur 
								paris clari nobis videnturisem futurum. Wisi enims minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl consequat. Ut wisi enim ad minim.Eodem modo typi, qui per seacula nobis videntur netsum ets quarta nobis futurum.</p>

							</div>
						</div>

						<div> 
							<div class="testim-inner">

								<img src="<?php echo bloginfo('template_directory'); ?>/images/customer-img.jpg" alt="testimonials" class="testim-img">
								<h6>Jennifer Doe<br><span class="text-blue">App Magazine Editor</span></h6>
								
								<p>Eodem modo typi, qui per seacula nobis videntur quarta. Eodem modo typi, qui nunc nobis videntur 
								paris clari nobis videnturisem futurum. Wisi enims minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl consequat. Ut wisi enim ad minim.Eodem modo typi, qui per seacula nobis videntur netsum ets quarta nobis futurum.</p>

							</div>
						</div>

						<div> 
							<div class="testim-inner">

								<img src="<?php echo bloginfo('template_directory'); ?>/images/customer-img.jpg" alt="testimonials" class="testim-img">
								<h6>Jennifer Doe<br><span class="text-blue">App Magazine Editor</span></h6>
								
								<p>Eodem modo typi, qui per seacula nobis videntur quarta. Eodem modo typi, qui nunc nobis videntur 
								paris clari nobis videnturisem futurum. Wisi enims minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl consequat. Ut wisi enim ad minim.Eodem modo typi, qui per seacula nobis videntur netsum ets quarta nobis futurum.</p>

							</div>
						</div>
					</div>
					<!--end owl carousel -->

					<div class="owl-dots">
						<div class="owl-dot active"><span></span></div>
						<div class="owl-dot"><span></span></div>
						<div class="owl-dot"><span></span></div>
					</div>

		        </div>
		        <!--end col md 10 -->     
	      	</div>
	      	<!--end row -->

	    </div>
	    <!--end container -->

  	</section>
  	<!--end section-grey -->

  	<!--begin section white with image -->
  	<section class="section-white">

	    <!--begin container -->
	    <div class="container">

	        <!--begin row -->
	        <div class="row">
	        
				<!--begin col md 12 -->
				<div class="col-md-12 text-center margin-bottom-30">

					<h2 class="section-title">Discover Extra Features</h2>

					<p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>
					
				</div>
				<!--end col md 12 -->

		        <!--begin col md 4-->
		        <div class="col-md-4 margin-30">

		        	<div class="feature-wrapper">

		        		<div class="hi-icon-wrap hi-icon-effect-2 hi-icon-effect-2b">
							<i class="hi-icon-left pe-7s-tools lefts"></i>
						</div>

		        		<div class="feature-inner-left">

		        			<h5>Support 24/7</h5>
		        			<p>Netsum wisi enim adis minim veniam nisle, quis nostris exerci tation ullam corper suscipit net loremis nets advert nes wisi.</p>
		        			
		        		</div>
		        	</div>

		        	<div class="feature-wrapper">

		        		<div class="hi-icon-wrap hi-icon-effect-2 hi-icon-effect-2b">
							<i class="hi-icon-left pe-7s-users lefts"></i>
						</div>

		        		<div class="feature-inner-left">

		        			<h5>User Friendly</h5>
		        			<p>Netsum wisi enim adis minim veniam nisle, quis nostris exerci tation ullam corper suscipit net loremis nets advert nes wisi.</p>
		        			
		        		</div>
		        	</div>

		        	<div class="feature-wrapper">

		        		<div class="hi-icon-wrap hi-icon-effect-2 hi-icon-effect-2b">
							<i class="hi-icon-left pe-7s-bell lefts"></i>
						</div>

		        		<div class="feature-inner-left">

		        			<h5>Notifications</h5>
		        			<p>Netsum wisi enim adis minim veniam nisle, quis nostris exerci tation ullam corper suscipit net loremis nets advert nes wisi.</p>
		        			
		        		</div>
		        	</div>

		        </div>
		        <!--end col md 4 -->

		        <!--begin col md 4-->
		        <div class="col-md-4 margin-30">

		        	<img src="<?php echo bloginfo('template_directory'); ?>/images/iphone-features1.png" alt="featuresapp" class="width-100 wow slideInUp">
		        	
		        </div>
		        <!--end col md 4 -->

		        <!--begin col md 4-->
		        <div class="col-md-4 margin-30">

		        	<div class="feature-wrapper">
		        		<div class="hi-icon-wrap hi-icon-effect-2 hi-icon-effect-2b">
							<i class="hi-icon-right pe-7s-chat rights"></i>
						</div>
		        		<div class="feature-inner-right">
		        			<h5>Chat With Friends</h5>
		        			<p>Netsum wisi enim adis minim veniam nisle, quis nostris exerci tation ullam corper suscipit net loremis nets advert nes wisi.</p>
		        		</div>
		        	</div>

		        	<div class="feature-wrapper">
		        		<div class="hi-icon-wrap hi-icon-effect-2 hi-icon-effect-2b">
							<i class="hi-icon-right pe-7s-world rights"></i>
						</div>
		        		<div class="feature-inner-right">
		        			<h5>Accesability</h5>
		        			<p>Netsum wisi enim adis minim veniam nisle, quis nostris exerci tation ullam corper suscipit net loremis nets advert nes wisi.</p>
		        		</div>
		        	</div>

		        	<div class="feature-wrapper">
		        		<div class="hi-icon-wrap hi-icon-effect-2 hi-icon-effect-2b">
							<i class="hi-icon-right pe-7s-piggy rights"></i>
						</div>
		        		<div class="feature-inner-right">
		        			<h5>Cost Control</h5>
		        			<p>Netsum wisi enim adis minim veniam nisle, quis nostris exerci tation ullam corper suscipit net loremis nets advert nes wisi.</p>
		        		</div>
		        	</div>

		        </div>
		        <!--end col md 4 -->
		        
		    </div>
		    <!--end row -->

	    </div>
	    <!--end container -->

  	</section>
  	<!--end section-white -->

    <!--begin section fullvideo -->
    <section class="video-wrapper">

    <div class="video-wrapper-overlay"></div>

		<!--begin container -->
		<div class="container">

	        <!--begin row -->
	        <div class="row">

	        	<!--begin col-md-12-->
                <div class="col-md-12 text-center wow fadeIn" data-wow-delay="0.15s">
                    
                    <!--begin popup-gallery-->
                    <div class="popup-gallery">
                        <a class="popup4 video-icon" href="https://www.youtube.com/watch?v=FPfQMVf4vwQ"><i class="fa fa-play"></i></a>
                    </div>
                    <!--end popup-gallery-->

                    <h3 class="video-title white">Watch Our Video With Amazing Features</h3>
                    
                </div>
                <!--end col-md-12-->
	       
	        </div>
	        <!--end row -->

		</div>
		<!--end container -->

    </section>
    <!--end section fullvideo -->

	<!--begin section white pricing -->
  	<section class="section-white" id="pricing">

	    <!--begin container -->
	    <div class="container">

			<!--begin row -->
			<div class="row">

				<!--begin col md 12 -->
				<div class="col-md-12 text-center padding-bottom-30">

					<h2 class="section-title">Great Pricing Plans</h2>

					<p class="section-subtitle">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>
					
				</div>
				<!--end col md 12 -->

				<!--begin col md 4-->
				<div class="col-md-4 col-sm-4">

					<div class="price-box-white">

						<ul class="pricing-list">

							<li><p class="price-title">STANDARD</p></li>
							<li><span>$12</span></li>
							<li><p class="price-subtitle">6 Months</p></li>
							<li><a href="#" class="price-tag">GET STARTED</a></li>
							<li><p class="price-text">50 Gb Bandwidth</p></li>
							<li><p class="price-text">10 Themes</p></li>
						</ul>
					</div>
				</div>
				<!--end col md 4 -->

				<!--begin col md 4-->
				<div class="col-md-4 col-sm-4">

					<div class="price-box-grey">

						<ul class="pricing-list">

							<li><p class="price-title">SILVER</p></li>
							<li><span>$20</span></li>
							<li><p class="price-subtitle">12 Months</p></li>
							<li><a href="#" class="price-tag">GET STARTED</a></li>
							<li><p class="price-text">200 Gb Bandwidth</p></li>
							<li><p class="price-text">Unlimited Experiences</p></li>
						</ul>
					</div>
				</div>
				<!--end col md 4 -->

				<!--begin col md 4-->
				<div class="col-md-4 col-sm-4">

					<div class="price-box-blue">

						<ul class="pricing-list">

							<li><p class="price-title white-text">GOLD</p></li>
							<li><span class="white-text">$99</span></li>
							<li><p class="price-subtitle white-text">Unlimited</p></li>
							<li><a href="#" class="price-tag">GET STARTED</a></li>
							<li><p class="price-text white-text">Unlimited Bandwidth</p></li>
							<li><p class="price-text white-text">All Experiences</p></li>
						</ul>
					</div>
				</div>
				<!--end col md 4 -->

			</div>
			<!--end row -->

	    </div>
	    <!--end container -->

  	</section>
  	<!--end section white pricing -->

  	<!--begin section-grey-->
    <div class="section-grey sponsors-padding">
        
        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">
            
                <!--begin col-sm-12-->
                <div class="col-sm-12 sponsors">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/partner2.png" class="sponsor" alt="image">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/partner1.png" class="sponsor" alt="image">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/partner3.png" class="sponsor" alt="image">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/partner4.png" class="sponsor" alt="image">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/partner5.png" class="sponsor" alt="image">
                </div>
                <!--end col-sm-12-->
                
            </div>
            <!--end row-->
            
        </div>
        <!--end container-->
    
    </div> 
    <!--end section-grey-->

  	<!--begin section image -->
  	<section class="section-image-wrapper">

  	<div class="image-overlay"></div>

		<!--begin container -->
		<div class="container">

			<!--begin row -->
			<div class="row">

				<!--begin col md 12 -->
				<div class="col-md-12 text-center">

					<h2 class="section-title white">Download Focus Today!</h2>

					<p class="section-subtitle white">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh velit auctor aliquet. <br>Aenean sollicitudin, lorem quis bibendum aucto</p>
					
					<ul class="download-list">
						<li><a href="#"><i class="fa fa-apple"></i>iOS</a></li>
						<li><a href="#"><i class="fa fa-android"></i>ANDROID</a></li>
						<li><a href="#"><i class="fa fa-windows"></i>WINDOWS</a></li>
					</ul>
										
				</div>
				<!--end col md 12 -->

			</div>
			<!--end row -->

		</div>
		<!--end container -->

	</section>
	<!--end section image -->

  	<!--begin contact -->
    <section class="section-dark" id="contact">
        
        <!--begin container-->
        <div class="container">
    
            <!--begin row-->
            <div class="row">
            
                <!--begin col md 10 -->
				<div class="col-md-10 col-md-offset-1 text-center margin-bottom-30">

					<h2 class="section-title grey">Get In Touch</h2>

					<p class="section-subtitle grey">There are many variations of passages of Lorem Ipsum available, but the majority<br>have suffered alteration, by injected humour, or new randomised words.</p>
					
				</div>
				<!--end col md 10 -->

            </div>
            <!--end row-->
            
            <!--begin row-->
            <div class="row margin-20">
        
                <!--begin success message -->
                <p class="contact_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
                <!--end success message -->
                
                <!--begin contact form -->
                <form id="contact-form" class="contact" action="<?php echo bloginfo('template_directory'); ?>/php/contact.php" method="post">
                    
                    <!--begin col-md-6-->
                    <div class="col-md-6">
                        <input class="contact-input white-input" required="" name="contact_names" placeholder="Full Name*" type="text">
                        <input class="contact-input white-input" required="" name="contact_email" placeholder="Email Adress*" type="email">
                        <input class="contact-input white-input" required="" name="contact_phone" placeholder="Phone Number*" type="text">
                    </div>
                    <!--end col-md-6-->
                    
                    <!--begin col-md-6-->
                    <div class="col-md-6">
                        <textarea class="contact-commnent white-input" rows="2" cols="20" name="contact_message" placeholder="Your Message..."></textarea>
                    </div>
                    <!--end col-md-6-->
                    
                    <!--begin col-md-12-->
                    <div class="col-md-12">
                    	<input value="Send Message" id="submit-button" class="contact-submit" type="submit">
                    </div>
                    <!--end col-md-12-->
                    
                </form>
                <!--end contact form -->
            
            </div>
            <!--end row-->
            
      </div>
      <!--end container-->
            
    </section>
    <!--end contact-->
    
    <!--begin footer -->
    <div class="footer">
            
        <!--begin container -->
        <div class="container">
        
            <!--begin row -->
            <div class="row">
            
                <!--begin col-md-12 -->
                <div class="col-md-12 text-center">
                    
                    <!--begin copyright -->
                    <div class="copyright">
                        <p>Copyright © 2019 Focus. Developed by <a href="#" target="_blank">Veeramani R</a></p>
                        
                    </div>
                    <!--end copyright -->
                                                    
                    <!--begin footer_social -->
                    <ul class="footer_social">
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-skype"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-dribble"></i>
                            </a>
                        </li>
                    </ul>
                    <!--end footer_social -->
                    
                </div>
                <!--end col-md-6 -->
                
            </div>
            <!--end row -->
            
        </div>
        <!--end container -->
                
    </div>
    <!--end footer -->


<!-- Load JS here for greater good =============================-->
<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery.scrollTo-min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery.nav.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/wow.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/plugins.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/custom.js"></script>

</body>
</html>