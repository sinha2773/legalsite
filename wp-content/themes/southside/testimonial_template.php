<?php 
 get_header();
 // Template Name: Testimonials
?>  <?php 
        $p = new WP_Query(array(
            'post_type' => 'page',
            'posts_per_page' => 1,
            'page_id' =>74
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
        <section class="about_section">
            <div class="container">
                <div class="main_abount_section">
                <div class="row">
                  <div class="col-md-4 col-sm-12">
                      <?php get_sidebar(); ?>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="testimonial_information">    
                            <div class="testimonial_information_title common_title_color">
                                <h3>Testimonials</h3>                                
                            </div>
                            <?php
                                
                                $testimonial_info = new WP_Query(array(
                                    'post_type' => 'testimonial',                                    
                                    'posts_per_page' => 8                                    
                                ));
                            ?>
                            <?php 
                                if($testimonial_info ->have_posts()): 
                                while($testimonial_info->have_posts()) :
                                 $testimonial_info->the_post(); 
                            ?>
                            <div class="testimonial_content">
                                <div class="testimonial_profile_image">
                                    <?php the_post_thumbnail('testimonial-image'); ?>
                                </div>
                                <div class="testimonail_profile_content">
                                    <p><?php the_content(); ?>
                                    </p>
                                    <h4><?php the_title(); ?></h4>
                                </div>
                            </div>
                            <?php endwhile; endif; ?>
                           
                        </div>                        
                    </div>                    
                </div>
                </div>
            </div>
        </section>        
<?php 
  get_footer();
?>