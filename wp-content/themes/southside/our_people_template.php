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
                    <div class="single_side_margin">
                      
                      
                      <div class="col-md-8">
                        <div class="key_staf">
                          <h2>Key Staff</h2>
                        </div>
                        <?php 
                        $p = new WP_Query(array(
                            'post_type' => 'our_team',
                            'posts_per_page' => -1,
                            
                        ));
                      ?>
                      <?php 
                          if($p->have_posts()): 
                          while($p->have_posts()): 
                          $p->the_post();  
                      ?>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="solicitor_all_content">
                              <div class="solicitor_image_designation">
                                <div class="solicitor_images">
                                  <?php the_post_thumbnail(); ?>
                                </div>                         
                                <div class="solicitor_designation">
                                  <h4><?php echo get_post_meta(get_the_ID(),'degree',true) ?></h4>
                                  <h2><?php the_title(); ?></h2>
                                  <h3><?php echo get_post_meta(get_the_ID(),'designation',true) ?></h3>
                                  <span><i class="fa fa-linkedin" aria-hidden="true"></i> <a href=""><?php echo get_post_meta(get_the_ID(),'linked_in',true) ?></a> </span>
                                  <p>Email:<a href="mailto:wrc@southsidelegal.com.au"><?php echo get_post_meta(get_the_ID(),'email',true) ?></a>  
                                      </p>
                                </div>
                              </div>
                              <div class="soli_content">
                                <?php the_content(); ?>
                              </div>
                              
                            </div>
                            
                          </div>
                          </div>
                          <?php endwhile; endif; ?>  
                        </div>
                        <!-- <div class="row">
                          <div class="col-md-12">
                            <div class="solicitor_details">
                              <p><?php //the_content(); ?></p>
                            </div>
                          </div>
                        </div>  -->
                                           
                    </div>
                  
                </div>                    
                </div>
              </div>
            </div>
        </section>
<?php 
  get_footer();
?>