<?php 
 get_header();
 // Template Name: Our People
?>
    <?php 
      $p = new WP_Query(array(
          'post_type' => 'page',
          'posts_per_page' => 1,
          'page_id' =>40
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
                  <div class="col-md-4">
                        <?php get_sidebar(); ?>
                    </div>
                    <div class="col-md-8">
                        <div class="our_team_information">                            
                          <div class="our_team_information_title common_title_color">
                              <h3>Key Staff</h3>                                
                          </div>                         
                            <div class="attorney_information">
                              <div class="row">
                                <?php 
                                    $our_team_store = new WP_Query(array(
                                        'post_type' => 'our_team',
                                        'posts_per_page' => 4                                        
                                    ));
                                ?>
                                <?php 
                                    if($our_team_store ->have_posts()): 
                                    while($our_team_store->have_posts()) :
                                     $our_team_store->the_post(); 
                                ?>
                                <div class="col-md-6 col-sm-6">
                                  <div class="attorney_image_hover_effect">
                                    <div class="attorney_content">
                                    <div class="attorney_content_images">
                                      <?php the_post_thumbnail('our_team_image'); ?>
                                    </div>
                                    <div class="attorney_content_images_text">
                                      <h3><?php the_title(); ?></h3>
                                      <p><?php echo get_post_meta(get_the_ID(),'designation',true) ?></p>
                                      </div>
                                    </div>
                                    <div class="project-content-wrap attorney_content_effect">
                                      <div class="project_title_bottom attorney_title"><?php the_title(); ?></div>
                                      <div class="project-content attorney_body"><?php echo get_trim_content(35, true); ?></div>
                                      <div class="project-link-wrap attorney_bottom_link">
                                        <a class="project-link-wrap" href="<?php the_permalink(); ?>">Details</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <?php endwhile; endif; ?>                                
                              </div>
                            </div>
                        </div> 
                    </div>                    
                </div>
              </div>
            </div>
        </section>
<?php 
  get_footer();
?>