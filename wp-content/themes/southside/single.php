<?php get_header(); ?>
<?php 
        $p = new WP_Query(array(
            'post_type' => 'page',
            'posts_per_page' => 1,
            'page_id' =>42
        ));
    ?>
    <?php 
        if($p->have_posts()): 
        while($p->have_posts()): 
        $p->the_post();  
    ?>
        <section class="common_banner_section">
            <div class="common_banner_images">
              <?php the_post_thumbnail('testimonial-bg-image'); ?>
            </div>
        </section>
    <?php endwhile; endif; ?>  
<?php if (have_posts()): the_post(); ?>	

        <div class="default-page-container all_page_content">
            <div class="container">
            	<div class="main_all_page_container">
	                <div class="row">
	                	<div class="col-md-12">
	                		<div class="all_page_content_title single_title">
	                			<h2><?php the_title(); ?></h2>
	                		</div>
	                	</div>
	                    <div class="col-md-12">
	                        <div class="all_page_content_information single_page_content">
	                        	<div class="single_page_content_image">
	                        		<?php the_post_thumbnail(); ?>
	                        	</div>	                        
	                        	<?php the_content(); ?>
	                        </div>
	                    </div>
	                </div>
                </div>
            </div>
        </div>

    <?php
endif;
wp_reset_query(); ?>


<?php get_footer(); ?>