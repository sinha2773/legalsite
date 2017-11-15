<?php 
	function create_custom_post() {
		register_post_type( 'banner',array(
	  		'label'   => 'Banner',
	  		'labels'  => array(
	  				'name' => 'Banner',
	  				'singular_name' => 'banner',
	  				'add_new' => 'New Banner'
	  				
	  			),
	  		'public' => true,
	  		'menu_icon' => 'dashicons-images-alt',
	  		'supports' => array('title','editor','thumbnail','custom-files','excerpt','custom-fields'),
	  	)
	    
	  );
		
		register_post_type( 'area_of_practice',array(
	  		'label'   => 'Area of Practice',
	  		'labels'  => array(
	  				'name' => 'Area of Practice',
	  				'singular_name' => 'area',
	  				'add_new' => 'New'
	  				
	  			),
	  		'public' => true,
	  		'menu_icon' => 'dashicons-images-alt',
	  		'supports' => array('title','editor','thumbnail','custom-files','excerpt','custom-fields'),
	  	)
	    
	  );
		
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
	 register_post_type( 'global_post',array(
	  		'label'   => 'Global Post',
	  		'labels'  => array(
	  				'name' => 'Global Post ',
	  				'singular_name' => 'global',
	  				'add_new' => 'New Post'
	  				
	  			),
	  		'public' => true,
	  		'menu_icon' => 'dashicons-images-alt',
	  		'supports' => array('title','editor','thumbnail','custom-files','excerpt','custom-fields'),
	  	)
	    
	  );

	}
	add_action( 'init', 'create_custom_post' );

	function create_custom_texonomy(){
		
		register_taxonomy( 'practice_type', 'area_of_practice',

			array(
				'hierarchical' 	=> true,
				'label'        	=> 'Practice Texonomy',
				'query_var'    	=> true,
				'rewrite'		=>array(
						'slag'			=> 'area_of_practice_slag',
						'with_front'	=>false
					)
			)
		);
		
	}

	add_action('init','create_custom_texonomy');

	

 ?>
