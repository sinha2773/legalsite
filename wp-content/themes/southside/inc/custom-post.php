<?php 
	function create_custom_post() {
				
		
		register_post_type( 'our_team',array(
	  		'label'   => 'Our Team',
	  		'labels'  => array(
	  				'name' => 'Our Team',
	  				'singular_name' => 'team',
	  				'add_new' => 'New Team'	  				
	  			),
	  		'public' => true,
	  		'menu_icon' => 'dashicons-images-alt',
	  		'supports' => array('title','editor','thumbnail','custom-files','excerpt','custom-fields'),
	  	)	    
	  );
		register_post_type( 'testimonial',array(
	  		'label'   => 'Testimonials',
	  		'labels'  => array(
	  				'name' => 'Testimonials',
	  				'singular_name' => 'testimonial',
	  				'add_new' => 'New Testimonial'	  				
	  			),
	  		'public' => true,
	  		'menu_icon' => 'dashicons-images-alt',
	  		'supports' => array('title','editor','thumbnail','custom-files','excerpt','custom-fields'),
	  	)	    
	  ); 

	register_post_type( 'faq',array(
	  		'label'   => 'Faq',
	  		'labels'  => array(
	  				'name' => 'Faqs',
	  				'singular_name' => 'faq',
	  				'add_new' => 'New faq'	  				
	  			),
	  		'public' => true,
	  		'menu_icon' => 'dashicons-images-alt',
	  		'supports' => array('title','editor','thumbnail','custom-files','excerpt','custom-fields'),
	  	)	    
	  ); 

	}
	add_action( 'init', 'create_custom_post' );

	function create_custom_texonomy(){
			
	}

	add_action('init','create_custom_texonomy');

 ?>
